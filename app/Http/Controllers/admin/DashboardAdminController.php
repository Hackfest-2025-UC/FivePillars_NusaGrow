<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardAdminController extends Controller
{
    public function index(){
        return view('pages.admin.dashboard', [
            'title' => 'Dashboard Admin',
            'total_user' => User::whereIn('role', ['produsen', 'supplier'])->count(),
            // $total_perlu_diverifikasi = User::whereIn('role', ['produsen', 'supplier'])->where('status', 'menunggu')>count();
        ]);
    }
}
