<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class AdminJobController extends Controller
{
    // 1. Tampilkan Daftar Lowongan
    public function index()
    {
        $jobs = Job::latest()->get();
        return view('layouts_admin.jobs', compact('jobs'));
    }

    // 2. Tampilkan Form Tambah
    public function create()
    {
        return view('layouts_admin.jobscreate');
    }

    // 3. Simpan Data Baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        Job::create([
            'title' => $request->title,
            'type' => $request->type,
            'description' => $request->description,
            'is_active' => true, // Default aktif
        ]);

        return redirect()->route('admin.jobs.index')->with('success', 'Lowongan berhasil dibuat!');
    }

    // --- FITUR BARU MULAI DARI SINI ---

    // 4. Tampilkan Form Edit
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('layouts_admin.updatejobs', compact('job'));
    }

    // 5. Update Data ke Database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        $job = Job::findOrFail($id);

        $job->update([
            'title' => $request->title,
            'type' => $request->type,
            'description' => $request->description,
            // Cek apakah checkbox dicentang (return true/false)
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.jobs.index')->with('success', 'Lowongan berhasil diperbarui!');
    }

    // 6. Hapus Data
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('admin.jobs.index')->with('success', 'Lowongan berhasil dihapus!');
    }
}
