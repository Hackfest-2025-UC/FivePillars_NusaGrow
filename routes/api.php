<?php

use App\Http\Controllers\products\ProductController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('callback', [TransaksiController::class, "callback"])->name("callback");

Route::get('get-data-produk', [ProductController::class, "getDataProduk"])->name("get-data-produk");