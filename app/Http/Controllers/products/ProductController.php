<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $produks = Produk::all();
        return view('pages.products.index', compact('produks'));
    }

    public function indexDetail($id){
        $produk = Produk::where('id_produk', $id)->first();
        return view('pages.products.detail', compact('produk'));
    }
}
