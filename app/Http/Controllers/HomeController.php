<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua data menu dari database
        $menu_kopi = Menu::all();

        // Kirim data ke file view landing page (misal namanya welcome.blade.php)
        return view('welcome', compact('menu_kopi'));
    }
}
