<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'hp' => 'required',
            'pesan' => 'required',
        ]);

        Pesan::create($request->all());

        return redirect()->back()->with('success', 'Pesan Anda telah terkirim!');
    }

    // Tampilkan pesan di Dashboard Admin
    public function index()
    {
        $Pesan = Pesan::latest()->get();
        return view('layouts_admin.pesan', compact('Pesan'));
    }
}
