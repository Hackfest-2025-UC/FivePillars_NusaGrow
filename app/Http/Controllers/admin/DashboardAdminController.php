<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\KebutuhanProdusen;
use App\Http\Controllers\Controller;

class DashboardAdminController extends Controller
{

    public function index()
    {
        $total_potongan_admin = Transaksi::sum('jumlah_transaksi') * 0.05;

        $total_kebutuhan_menunggu = KebutuhanProdusen::where('status', 'menunggu')->count();
        $total_produk_menunggu = Produk::where('status', 'menunggu')->count();
        $total_menunggu = $total_kebutuhan_menunggu + $total_produk_menunggu;

        return view('pages.admin.dashboard', [
            'title' => 'Dashboard Admin',
            'total_user' => User::whereIn('role', ['produsen', 'supplier'])->count(),
            'total_pendapatan' => $total_potongan_admin,
            'total_perlu_diverifikasi' => $total_menunggu,
        ]);
    }
}
