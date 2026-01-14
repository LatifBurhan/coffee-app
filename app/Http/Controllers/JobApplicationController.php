<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobApplication;

class JobApplicationController extends Controller
{
    // Function untuk menampilkan halaman form (opsional jika pakai modal)
    public function create($job_id)
    {
        $job = Job::findOrFail($job_id);
        return view('careers.apply', compact('job'));
    }

    // Function untuk menyimpan data lamaran
    public function store(Request $request)
    {
        // 1. Validasi
        $request->validate([
            'job_id'       => 'required|exists:job_vacancies,id',
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'phone'        => 'required|string|max:20',
            'cv'           => 'required|mimes:pdf|max:2048',
            'cover_letter' => 'nullable|string',
        ]);

        // 2. Upload CV
        $filePath = null;
        if ($request->hasFile('cv')) {
            $filePath = $request->file('cv')->store('cv_uploads', 'public');
        }

        // 3. Simpan ke Database
        JobApplication::create([
            'job_id'       => $request->job_id,
            'name'         => $request->name,
            'email'        => $request->email,
            'phone'        => $request->phone,
            'cover_letter' => $request->cover_letter,
            'cv_path'      => $filePath,
            'status'       => 'pending'
        ]);

        // 4. Redirect
        return redirect('/#career')->with('success', 'Lamaran berhasil dikirim! Kami akan menghubungi Anda segera.');
    }
}
