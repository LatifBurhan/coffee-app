<?php

use App\Http\Controllers\AdminJobController;
use App\Http\Controllers\HomeController;
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
Route::get('/admin/jobs', [AdminJobController::class, 'index'])->name('admin.jobs.index');
Route::get('/admin/jobs/create', [AdminJobController::class, 'create'])->name('admin.jobs.create');
Route::post('/admin/jobs', [AdminJobController::class, 'store'])->name('admin.jobs.store');
