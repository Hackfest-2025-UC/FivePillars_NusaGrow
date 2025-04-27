<?php

namespace App\Http\Controllers\supplier;

use App\Http\Controllers\Controller;
use App\Models\Permintaan;
use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardSupplierController extends Controller
{
    public function index()
    {
        $totalProduk = Produk::where('id_user', 3)->count();
        $totalPermintaan = Permintaan::whereHas('produk', function ($query) {
            $query->where('id_user', 3);
        })->count();
        return view('pages.supplier.index', compact('totalProduk', 'totalPermintaan'));
    }
}
