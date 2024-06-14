<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\DashboardControllers;
use App\Http\Controllers\AdminController;
use  App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/salam', function () {
    return "Hai, Saya Dila siap belajar Laravel 11";
});

Route::get('/form', function () {
    return view('pasien.form');
});



Route::get('/admin', [AdminController::class, 'index']);
Route::get('/pasien/show', [PasienController::class, 'show'])->name('pasien.show');
Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');

Route::get('/pasien/edit', [PasienController::class, 'edit'])->name('pasien.edit');
Route::get('/pasien/destroy', [PasienController::class, 'destroy'])->name('pasien.destroy');
Route::get('/pasien/view', [PasienController::class, 'view'])->name('pasien.view');  



