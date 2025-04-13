<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Asesor\DashboardController as AsesorDashboardController;
use App\Http\Controllers\Keuangan\KeuanganDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});


//ambil seperlunya untuk kebutuhan slicing selain itu tolong di matikan
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

// Route group untuk admin
Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});

// Route group untuk keuangan
Route::middleware(['auth', 'role:keuangan'])->group(function(){
    Route::get('/keuangan/dashboard', [KeuanganDashboardController::class, 'index'])->name('keuangan.dashboard');
});

// Route group untuk asesor
Route::middleware(['auth', 'role:asesor'])->group(function(){
    Route::get('/asesor/dashboard', [AsesorDashboardController::class, 'index'])->name('asesor.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
