<?php

namespace App\Http\Controllers;

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
    public function updateStatus(Request $request, $id)
    {
        $booking = Reservation::findOrFail($id);
        $booking->status = $request->status;
        $booking->save();

        return redirect()->back()->with('success', 'Status reservasi diperbarui!');
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
