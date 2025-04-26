<?php

use App\Http\Controllers\products\ProductController;
use App\Http\Controllers\Produsen\CariSuplierController;
use App\Http\Controllers\Produsen\DashboardController;
use App\Http\Controllers\Produsen\MelihatPenawaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\DashboardAdminController;
use App\Http\Controllers\admin\PendapatanController;
use App\Http\Controllers\admin\VerifikasiAdminController;
use App\Http\Controllers\ai\NLPController;
use App\Http\Controllers\investor\DashboardInvestorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterProdusenController;
use App\Http\Controllers\supplier\ChatSupplierController;
use App\Http\Controllers\supplier\DashboardSupplierController;
use App\Http\Controllers\supplier\ProductSupplierController;
use App\Http\Controllers\supplier\RequestProductSupplierController;
use App\Http\Controllers\TransaksiController;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/detail/{id}', [ProductController::class, 'indexDetail'])->name('products.detail');

Route::post("get-token", [TransaksiController::class, "getToken"])->name("getToken");
Route::get("nlp", [NLPController::class, "index"])->name("nlp");

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

// LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/cek-login', [LoginController::class, 'cekLogin'])->name('cek-login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register-produsen', [RegisterProdusenController::class, 'index'])->name('register-produsen');
Route::post('/register-produsen', [RegisterProdusenController::class, 'storeRoleProdusen'])->name('register-produsen');


// ADMIN

// Route::middleware('auth')->group(function () {

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/verifikasi', [VerifikasiAdminController::class, 'index'])->name('admin.verifikasi');
    Route::put('/verifikasi/kebutuhan/{id_kebutuhan_produsen}/diterima', [VerifikasiAdminController::class, 'updateStatusKebutuhanDiterima'])->name('admin.verifikasi.statusKebutuhan-terima');
    Route::put('/verifikasi/kebutuhan/{id_kebutuhan_produsen}/ditolak', [VerifikasiAdminController::class, 'updateStatusKebutuhanDitolak'])->name('admin.verifikasi.statusKebutuhan-tolak');
    Route::put('/verifikasi/produk/{id_produk}/diterima', [VerifikasiAdminController::class, 'updateStatusProdukDiterima'])->name('admin.verifikasi.statusProduk-terima');
    Route::put('/verifikasi/produk/{id_produk}/ditolak', [VerifikasiAdminController::class, 'updateStatusProdukDitolak'])->name('admin.verifikasi.statusProduk-tolak');
    Route::get('/pendapatan', [PendapatanController::class, 'index'])->name('admin.pendapatan');
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
    Route::get('/cari-investor', [NLPController::class, "index"])->name('suplier.nlp.index');
    Route::post('/cari-investor', [NLPController::class, "index"])->name('suplier.nlp.index');
});
Route::prefix('investor')->group(function () {
    Route::get('/dashboard', [DashboardInvestorController::class, "index"])->name('investor.dashboard.index');
});

Route::get('/', function () {
    return view('pages.home');
});
