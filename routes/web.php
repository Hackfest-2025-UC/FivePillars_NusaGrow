<?php

use App\Http\Controllers\Pengelolaan\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.template');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/pengelolaan/dashboard', [DashboardController::class, "index"]);
