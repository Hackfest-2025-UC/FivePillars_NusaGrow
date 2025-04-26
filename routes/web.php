<?php

use App\Http\Controllers\products\ProductController;
use App\Http\Controllers\Produsen\CariSuplierController;
use App\Http\Controllers\Produsen\DashboardController;
use App\Http\Controllers\Produsen\MelihatPenawaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardAdminController;
use App\Http\Controllers\admin\VerifikasiAdminController;
use App\Http\Controllers\supplier\ChatSupplierController;
use App\Http\Controllers\supplier\DashboardSupplierController;
use App\Http\Controllers\supplier\ProductSupplierController;
use App\Http\Controllers\supplier\RequestProductSupplierController;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/detail', [ProductController::class, 'indexDetail'])->name('products.detail');

// Route::get('/', function () {
//     return view('layouts.template');
// });
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::prefix('produsen')->group(function () {
    Route::get('/dashboard', [DashboardController::class, "index"])->name('produsen.dashboard.index');
    Route::get('/cari-suplier', [CariSuplierController::class, "index"])->name('produsen.cari-supplier.index');
    Route::get('melihat-penawaran', [MelihatPenawaranController::class, "index"])->name('produsen.melihat-penawaran.index');
});
Route::prefix('supplier')->group(function () {
    Route::get('/dashboard', [DashboardSupplierController::class, "index"])->name('suplier.dashboard.index');

    // Prducts
    Route::resource('/products', ProductSupplierController::class);
    Route::get('/request', [RequestProductSupplierController::class, "index"])->name('suplier.request.index');
    Route::get('/chat', [ChatSupplierController::class, "index"])->name('suplier.chat.index');
});
// Route::get('/', function () {
//     return view('layouts.template');
// });
// Route::get('/dashboard', function () {
//     return view('pages.dashboard');
// });

// ADMIN
Route::get('/', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
Route::get('/verifikasi', [VerifikasiAdminController::class, 'index'])->name('admin.verifikasi');
