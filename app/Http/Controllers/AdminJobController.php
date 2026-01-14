<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job; // Import Model Job

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

    // 3. Simpan Data ke Database
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        // Simpan
        Job::create([
            'title' => $request->title,
            'type' => $request->type,
            'description' => $request->description,
            'is_active' => true,
        ]);

        return redirect()->route('admin.jobs.index')->with('success', 'Lowongan berhasil dibuat!');
    }
}
