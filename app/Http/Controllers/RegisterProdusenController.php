<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterProdusenController extends Controller
{
    public function index()
    {
        return view('pages.login.register-produsen');
    }
}
