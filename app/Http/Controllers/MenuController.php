<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MenuController extends Controller
{
    public function index() {
        $menus = Menu::all();
        return view('layouts_admin.menus', compact('menus'));
    }

    public function store(Request $request) {
        $request->validate([
            'nama_menu' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $input = $request->all();

        // Logika Upload Gambar
        if ($image = $request->file('gambar')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        Menu::create($input);
        return redirect()->back()->with('success', 'Menu berhasil ditambahkan!');
    }
    public function destroy($id)
{
    $menu = Menu::findOrFail($id);

    // Hapus file gambar dari folder public/images jika ada
    if (File::exists(public_path('images/' . $menu->gambar))) {
        File::delete(public_path('images/' . $menu->gambar));
    }

    // Hapus data dari database
    $menu->delete();

    return redirect()->back()->with('success', 'Menu berhasil dihapus!');
}

public function update(Request $request, $id)
{
    $menu = Menu::findOrFail($id);

    $request->validate([
        'nama_menu' => 'required',
        'harga' => 'required|numeric',
        'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
    ]);

    $input = $request->all();

    if ($image = $request->file('gambar')) {
        // Hapus gambar lama jika ada
        if (File::exists(public_path('images/' . $menu->gambar))) {
            File::delete(public_path('images/' . $menu->gambar));
        }

        // Simpan gambar baru
        $destinationPath = 'images/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['gambar'] = "$profileImage";
    } else {
        // Jika tidak upload gambar baru, gunakan gambar lama
        unset($input['gambar']);
    }

    $menu->update($input);

    return redirect()->back()->with('success', 'Menu berhasil diperbarui!');
}
}
