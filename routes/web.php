<?php

use App\Http\Controllers\Produsen\CariSuplierController;
use App\Http\Controllers\Produsen\DashboardController;
use App\Http\Controllers\Produsen\MelihatPenawaranController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.template');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::prefix('produsen')->group(function () {
    Route::get('/dashboard', [DashboardController::class, "index"]);
    Route::get('/cari-suplier',[CariSuplierController::class, "index"])->name('cari-supplier.index');
    Route::get('melihat-penawaran', [MelihatPenawaranController::class, "index"])->name('melihat-penawaran.index');
});
