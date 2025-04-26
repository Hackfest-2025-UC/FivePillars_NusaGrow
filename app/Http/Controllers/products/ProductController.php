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

    public function indexDetail(){
        return view('pages.products.detail');
    }
}
