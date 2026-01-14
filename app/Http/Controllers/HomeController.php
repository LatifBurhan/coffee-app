<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\JobApplication;






class HomeController extends Controller
{
    /**
     * Menampilkan Halaman Depan (Landing Page)
     */
    public function index()
    {
        // 1. Ambil data Menu Kopi
        $menu_kopi = Menu::all();

        // 2. Ambil data Lowongan Kerja (Hanya yang aktif)
        $jobs = Job::where('is_active', true)->latest()->get();

        // 3. Kirim data ke view welcome
        return view('welcome', compact('menu_kopi', 'jobs'));
    }

    /**
     * Fitur Baru: Cek Status Lamaran
     */
    public function track(Request $request)
    {
        // 1. Validasi Input (Email & No HP wajib diisi)
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        // 2. Cari data pelamar di database
        // Kita cari yang email DAN no hp-nya cocok
        $myApplications = JobApplication::with('job')
                            ->where('email', $request->email)
                            ->where('phone', $request->phone)
                            ->latest()
                            ->get();

        // 3. Cek apakah datanya ketemu?
        if ($myApplications->isEmpty()) {
            // Kalau kosong, kembalikan dengan pesan error
            return redirect('/#track-status')->with('error', 'Data tidak ditemukan! Pastikan Email dan No HP sesuai saat melamar.');
        }

        // 4. Kalau ketemu, kirim data balik ke landing page
        return redirect('/#track-status')->with('track_result', $myApplications);
    }
}
