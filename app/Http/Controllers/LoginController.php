<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.login.index');
    }

    public function cekLogin(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email harus diisi.',
            'password.required' => 'Password harus diisi.',
        ]);

        $cekLogoin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($cekLogoin)) {
            $request->session()->regenerate();
            // dd(Auth::user()->role);
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } else if (Auth::user()->role == 'produsen') {
                return redirect()->route('produsen.dashboard.index');
            } else if (Auth::user()->role == 'supplier') {
                return redirect()->route('suplier.dashboard.index');
            }
        } else {
            return redirect()->back()->with('error', 'Email atau Password anda salah.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
