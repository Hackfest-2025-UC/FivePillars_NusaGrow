<?php

namespace App\Http\Controllers\supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CariInvestorController extends Controller
{
    public function index(){
        return view('pages.supplier.cariinvestor.index');
    }
}
