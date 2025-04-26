<?php

use App\Http\Controllers\products\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.template');
});
Route::get('/products', [ProductController::class, 'index']);

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
