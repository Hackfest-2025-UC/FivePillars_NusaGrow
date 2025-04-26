<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardAdminController;
use App\Http\Controllers\admin\VerifikasiAdminController;

// Route::get('/', function () {
//     return view('layouts.template');
// });
// Route::get('/dashboard', function () {
//     return view('pages.dashboard');
// });

// ADMIN
Route::get('/', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
Route::get('/verifikasi', [VerifikasiAdminController::class, 'index'])->name('admin.verifikasi');
