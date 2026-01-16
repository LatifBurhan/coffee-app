<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminApplicationController;
use App\Http\Controllers\AdminJobController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\JobApplicationController;

/*
|--------------------------------------------------------------------------
| 1. ROUTE PUBLIC (Bisa diakses SIAPA SAJA tanpa login)
|--------------------------------------------------------------------------
*/

// Halaman Depan
Route::get('/', [HomeController::class, 'index'])->name('home');

// Kirim Pesan (Contact Us)
Route::post('/contact-send', [PesanController::class, 'store'])->name('contact.store');

// Pelamar Kerja (Public)
Route::get('/career/{id}/apply', [JobApplicationController::class, 'create'])->name('career.apply');
Route::post('/career/apply', [JobApplicationController::class, 'store'])->name('career.store');
Route::post('/track-application', [HomeController::class, 'track'])->name('career.track');

// Reservasi (Public)
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
Route::post('/track-reservation', [ReservationController::class, 'track'])->name('reservation.track');


/*
|--------------------------------------------------------------------------
| 2. ROUTE LOGIN & LOGOUT
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| 3. ROUTE ADMIN (WAJIB LOGIN)
|--------------------------------------------------------------------------
| Semua rute di dalam kurung ini AMAN karena dijaga 'auth'
*/
Route::middleware(['auth'])->group(function () {

    // A. Pintu Masuk (Redirect /admin ke Dashboard Utama)
    Route::get('/admin', function () {
        return redirect()->route('admin.applications.index');
    });

    // B. Dashboard Lamaran (Applications)
    Route::get('/admin/applications', [AdminApplicationController::class, 'index'])->name('admin.applications.index');
    Route::post('/admin/applications/{id}/update-status', [AdminApplicationController::class, 'updateStatus'])->name('admin.applications.updateStatus');

    // C. Manajemen Menu
    Route::get('/admin/menu', [MenuController::class, 'index'])->name('menu.index');
    Route::post('/admin/menu', [MenuController::class, 'store'])->name('menu.store');
    Route::put('/admin/menu/{id}', [MenuController::class, 'update'])->name('menu.update');
    Route::delete('/admin/menu/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');

    // D. Manajemen Pesan Masuk
    Route::get('/admin/pesan', [PesanController::class, 'index'])->name('admin.messages');

    // E. Manajemen Jobs (Lowongan) - Saya tambahkan prefix /admin biar rapi
    Route::get('/admin/jobs', [AdminJobController::class, 'index'])->name('admin.jobs.index');
    Route::get('/admin/jobs/create', [AdminJobController::class, 'create'])->name('admin.jobs.create');
    Route::post('/admin/jobs', [AdminJobController::class, 'store'])->name('admin.jobs.store');
    Route::get('/admin/jobs/{id}/edit', [AdminJobController::class, 'edit'])->name('admin.jobs.edit');
    Route::put('/admin/jobs/{id}', [AdminJobController::class, 'update'])->name('admin.jobs.update');
    Route::delete('/admin/jobs/{id}', [AdminJobController::class, 'destroy'])->name('admin.jobs.destroy');

    // F. Manajemen Reservasi
    Route::get('/admin/reservations', [ReservationController::class, 'index'])->name('admin.reservations.index');
    Route::post('/admin/reservations/{id}', [ReservationController::class, 'updateStatus'])->name('admin.reservations.update');

});
