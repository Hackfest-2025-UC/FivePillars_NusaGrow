<?php

namespace App\Http\Controllers\Produsen;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class CariSuplierController extends Controller
{
    public function index()
    {
        $suppliers = Produk::all();
        return view('pages.produsen.cari-suplier', compact('suppliers'));
    }
}
