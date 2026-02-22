<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Http;

class AdminApplicationController extends Controller
{

    public function index()
    {

        $applications = JobApplication::with('job')->latest()->get();

        return view('layouts_admin.reviewcv', compact('applications'));
    }


    public function updateStatus(Request $request, $id)
    {
        // 1. Update Status Database
        $application = JobApplication::findOrFail($id);
        $application->status = $request->status;
        $application->save();

// 2. LOGIKA KIRIM WA (Sesuaikan dengan value dropdown Anda)
// Kita kirim WA kalau statusnya: wawancara, fgd, diterima, atau ditolak
        if (in_array($request->status, ['wawancara', 'fgd', 'diterima', 'ditolak'])) {

            // A. Format Nomor HP
            $nomor_tujuan = $application->phone;
            if(substr($nomor_tujuan, 0, 1) == '0'){
                $nomor_tujuan = '62' . substr($nomor_tujuan, 1);
            }

            // B. Siapkan Pesan (Sesuai Value Dropdown)
            $pesan = "";
            $nama = $application->name;
            $posisi = $application->job->title ?? 'Posisi yang dilamar';

            if ($request->status == 'wawancara') {
                $pesan = "Halo Kak *{$nama}*! 👋\n\nLamaran Anda untuk posisi *{$posisi}* di SARONE Coffee telah kami review.\n\nSelamat! Anda lolos ke tahap *WAWANCARA*. 🎉\nSilakan tunggu jadwal detail dari tim HRD kami melalui pesan selanjutnya.\n\nTerima kasih.";
            }
            elseif ($request->status == 'fgd') {
                $pesan = "Halo Kak *{$nama}*! 👋\n\nSelamat! Anda lolos ke tahap *FGD (Focus Group Discussion)* untuk posisi *{$posisi}*.\nMohon persiapkan diri Anda, info jadwal akan segera menyusul.";
            }
            elseif ($request->status == 'diterima') {
                $pesan = "Selamat Kak *{$nama}*! 🥳\n\nSelamat bergabung dengan keluarga besar *SARONE Coffee*.\nLamaran Anda sebagai *{$posisi}* dinyatakan *DITERIMA*.\n\nInfo kontrak kerja akan kami kirimkan segera.";
            }
            elseif ($request->status == 'ditolak') {
                $pesan = "Halo Kak *{$nama}*.\n\nTerima kasih telah melamar di SARONE Coffee.\nMohon maaf, untuk saat ini kualifikasi Anda belum sesuai dengan kebutuhan kami. Tetap semangat dan sukses selalu! 🙏";
            }

            // C. Kirim via Fonnte
            try {
                Http::withHeaders([
                    'Authorization' => 'gCccoPheb6QHt8AJD5iG',
                ])->post('https://api.fonnte.com/send', [
                    'target' => $nomor_tujuan,
                    'message' => $pesan,
                    'countryCode' => '62',
                ]);
            } catch (\Exception $e) {
                // Abaikan error
            }
        }

        return redirect()->back()->with('success', 'Status berhasil diubah & WA Terkirim!');
    }
}
