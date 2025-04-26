<?php

namespace App\Http\Controllers\supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestProductSupplierController extends Controller
{
    public function index()
    {
        return view('pages.supplier.request.index');
    }
}
