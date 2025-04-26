<?php

namespace App\Http\Controllers\investor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardInvestorController extends Controller
{
    public function index(){
        return view('pages.investor.dashboard');
    }
}
