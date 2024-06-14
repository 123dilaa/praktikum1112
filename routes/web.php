<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use  App\Http\Controllers\PasienController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); 

});


require __DIR__.'/auth.php';

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/pasien/show', [PasienController::class, 'show'])->name('pasien.show');
Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien/edit', [PasienController::class, 'edit'])->name('pasien.edit');
Route::delete('/pasien/destroy', [PasienController::class, 'destroy'])->name('pasien.destroy');
Route::get('/pasien/view', [PasienController::class, 'view'])->name('pasien.view');