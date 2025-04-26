<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('pages.products.index');
    }

    public function indexDetail(){
        return view('pages.products.detail');
    }
}
