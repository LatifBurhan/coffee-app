<?php

use App\Http\Controllers\AdminApplicationController;
use App\Http\Controllers\AdminJobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesanController;
use Illuminate\Support\Facades\Route;






Route::get('/', [HomeController::class, 'index']);


Route::get('/admin', function () {
    return view('layouts.admin');
});
Route::get('/admin/menu', function () {
    return view('layouts_admin.menus');
});
Route::get('/admin/pesan', function () {
    return view('layouts_admin.pesan');
});





// CRUD MENU
Route::get('/admin/menu', [MenuController::class, 'index'])->name('menu.index');
Route::post('/admin/menu', [MenuController::class, 'store'])->name('menu.store');
Route::delete('/admin/menu/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
Route::put('/admin/menu/{id}', [MenuController::class, 'update'])->name('menu.update');


//ROUTE PESAN
Route::post('/contact-send', [PesanController::class, 'store'])->name('contact.store');
Route::get('/admin/pesan', [PesanController::class, 'index'])->name('admin.messages');



//ROUTES ADMIN JOBS
    Route::get('/jobs', [AdminJobController::class, 'index'])->name('admin.jobs.index');
    Route::get('/jobs/create', [AdminJobController::class, 'create'])->name('admin.jobs.create');
    Route::post('/jobs', [AdminJobController::class, 'store'])->name('admin.jobs.store');
    Route::get('/jobs/{id}/edit', [AdminJobController::class, 'edit'])->name('admin.jobs.edit');
    Route::put('/jobs/{id}', [AdminJobController::class, 'update'])->name('admin.jobs.update'); // Pakai PUT
    Route::delete('/jobs/{id}', [AdminJobController::class, 'destroy'])->name('admin.jobs.destroy'); // Pakai DELETE

//ROUTES APLICATION JOBS
Route::get('/career/{id}/apply', [JobApplicationController::class, 'create'])->name('career.apply');

// Route Proses Kirim Lamaran (POST)
Route::post('/career/apply', [JobApplicationController::class, 'store'])->name('career.store');


//ROUTES ADMIN APLICATION
Route::get('/applications', [AdminApplicationController::class, 'index'])->name('admin.applications.index');
Route::post('/applications/{id}/status', [AdminApplicationController::class, 'updateStatus'])->name('admin.applications.updateStatus');


//CEKK STATUS LAMARAN
Route::post('/track-application', [HomeController::class, 'track'])->name('career.track');
