<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua data menu dari database
        $menu_kopi = Menu::all();

        // 2. Ambil data Lowongan yang AKTIF saja (Code Baru)
        // Kita filter where 'is_active' = true, dan urutkan dari yang terbaru
        $jobs = Job::where('is_active', true)->latest()->get();

        // Kirim data ke file view landing page (misal namanya welcome.blade.php)
        return view('welcome', compact('menu_kopi','jobs'));
    }
}
