<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication; // Import Model Lamaran

class AdminApplicationController extends Controller
{
    /**
     * Menampilkan daftar semua pelamar
     */
    public function index()
    {
        // Ambil data lamaran beserta info Lowongannya (Job)
        // urutkan dari yang terbaru
        $applications = JobApplication::with('job')->latest()->get();

        return view('layouts_admin.reviewcv', compact('applications'));
    }

    /**
     * Mengubah Status Lamaran
     */
    public function updateStatus(Request $request, $id)
    {
        // Validasi input status
        $request->validate([
            'status' => 'required|in:review cv,wawancara,fgd,diterima,ditolak'
        ]);

        // Cari lamaran dan update
        $application = JobApplication::findOrFail($id);
        $application->status = $request->status;
        $application->save();

        return redirect()->back()->with('success', 'Status pelamar berhasil diperbarui menjadi ' . ucfirst($request->status));
    }
}
