<?php

namespace App\Http\Controllers\supplier;

use App\Http\Controllers\Controller;
use App\Models\Investor;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CariInvestorController extends Controller
{
    public function index(){
        return view('pages.supplier.cariinvestor.index', [
            'investors' => Investor::all()
        ]);
    }
}
