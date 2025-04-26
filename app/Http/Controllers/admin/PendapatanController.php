<?php

namespace App\Http\Controllers\admin;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendapatanController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all()->map(function ($item) {
            $item->jumlah_transaksi_setelah_potong = $item->jumlah_transaksi * 0.95;
            return $item;
        });

        return view('pages.admin.pendapatan', [
            'transaksi' => $transaksi
        ]);
    }
}
