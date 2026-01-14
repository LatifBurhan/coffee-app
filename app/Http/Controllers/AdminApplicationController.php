<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication; // Import Model Lamaran

class AdminApplicationController extends Controller
{

    public function index()
    {

        $applications = JobApplication::with('job')->latest()->get();

        return view('layouts_admin.reviewcv', compact('applications'));
    }


    public function updateStatus(Request $request, $id)
    {

        $request->validate([
            'status' => 'required|in:review cv,wawancara,fgd,diterima,ditolak'
        ]);

        $application = JobApplication::findOrFail($id);
        $application->status = $request->status;
        $application->save();

        return redirect()->back()->with('success', 'Status pelamar berhasil diperbarui menjadi ' . ucfirst($request->status));
    }
}
