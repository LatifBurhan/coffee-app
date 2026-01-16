<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;


use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    // --- BAGIAN PUBLIC (PELANGGAN) ---

    // Simpan Booking Baru
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required',
            'email'  => 'required|email',
            'phone'  => 'required',
            'date'   => 'required|date|after:today', // Harus tanggal besok/nanti
            'time'   => 'required',
            'guests' => 'required|integer|min:1|max:20',
        ]);

        Reservation::create($request->all());

        return redirect('/#reservation')->with('success', 'Permintaan reservasi berhasil dikirim! Tunggu konfirmasi dari kami.');
    }

    // --- BAGIAN ADMIN ---

    // Lihat Daftar Booking
    public function index()
    {
        $reservations = Reservation::latest()->get();
        return view('layouts_admin.reservation', compact('reservations'));
    }

    // Update Status Booking (Approve/Reject)
    // Update Status Booking & Kirim WA Otomatis
    public function updateStatus(Request $request, $id)
    {
        // 1. Update Database (Sama seperti sebelumnya)
        $booking = Reservation::findOrFail($id);
        $booking->status = $request->status;
        $booking->save();

        // 2. LOGIKA API WHATSAPP (Mulai dari sini)
        // Kita hanya kirim WA kalau statusnya diubah jadi 'approved' atau 'rejected'
        if ($request->status == 'approved' || $request->status == 'rejected') {

            // A. Siapkan Nomor HP (Ubah 08xx jadi 628xx biar aman)
            $nomor_tujuan = $booking->phone;
            if(substr($nomor_tujuan, 0, 1) == '0'){
                $nomor_tujuan = '62' . substr($nomor_tujuan, 1);
            }

            // B. Siapkan Isi Pesan
            $pesan = "";
            if ($request->status == 'approved') {
                $pesan = "Halo Kak *{$booking->name}*! 👋\n\nKabar gembira, reservasi meja di *SARONE Coffee* untuk:\n📅 Tanggal: " . date('d M Y', strtotime($booking->date)) . "\n⏰ Jam: {$booking->time} WIB\n👥 Tamu: {$booking->guests} Orang\n\nTelah kami *TERIMA (APPROVED)*. ✅\nMohon datang tepat waktu ya. Sampai jumpa!";
            } else {
                $pesan = "Halo Kak *{$booking->name}*.\n\nMohon maaf, reservasi meja di SARONE Coffee untuk tanggal tersebut *BELUM BISA KAMI TERIMA* karena meja penuh/tutup. 🙏\n\nSilakan coba reservasi di waktu lain ya.";
            }

            // C. TEMBAK API FONNTE (Request ke Server Luar)
            try {
                $response = Http::withHeaders([
                    'Authorization' => 'gCccoPheb6QHt8AJD5iG', 
                ])->post('https://api.fonnte.com/send', [
                    'target' => $nomor_tujuan,
                    'message' => $pesan,
                    'countryCode' => '62', // Kode negara Indonesia
                ]);

                // (Opsional) Cek response di terminal kalau mau debugging
                // info($response->body());

            } catch (\Exception $e) {
                // Jika error (misal internet mati), biarkan aplikasi tetap jalan
                // Jangan sampai admin error cuma gara-gara WA gagal kirim
            }
        }

        return redirect()->back()->with('success', 'Status diperbarui & Notifikasi WA dikirim!');
    }

    // --- FITUR LACAK RESERVASI ---
    public function track(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'keyword' => 'required' // Bisa Email atau No HP
        ]);

        // 2. Cari Data (Berdasarkan Email ATAU No HP)
        $reservations = Reservation::where('email', $request->keyword)
                                   ->orWhere('phone', $request->keyword)
                                   ->latest() // Yang terbaru muncul duluan
                                   ->get();

        // 3. Cek Apakah Ketemu?
        if($reservations->isEmpty()) {
            return redirect('/#reservation')->with('track_error', 'Maaf, data reservasi tidak ditemukan. Cek kembali nomor/email Anda.');
        }

        // 4. Kirim Hasil ke Halaman Depan
        return redirect('/#reservation')->with('track_result', $reservations);
    }
}
