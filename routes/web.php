<?php

use App\Http\Controllers\products\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardAdminController;
use App\Http\Controllers\admin\VerifikasiAdminController;


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/detail', [ProductController::class, 'indexDetail'])->name('products.detail');

// Route::get('/', function () {
//     return view('layouts.template');
// });
// Route::get('/dashboard', function () {
//     return view('pages.dashboard');
// });

// ADMIN
Route::get('/', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
Route::get('/verifikasi', [VerifikasiAdminController::class, 'index'])->name('admin.verifikasi');

