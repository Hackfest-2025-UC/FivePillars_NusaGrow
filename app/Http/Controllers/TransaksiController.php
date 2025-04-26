<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function getToken(Request $request) {
        $rand_id = "TRN".time().rand(1,9);
    $user = User::where('id_users', $request->id)->first();
    $produk = Produk::where('id_produk', $request->id_produk)->first();
    $jumlah = $request->jumlah * $produk->harga_produk;
    $transaksi = Transaksi::create([
        'jumlah_transaksi' => $jumlah,
        'id_user' => $request->id,
        'status_transaksi' => false,
        'order_id' => $rand_id
    ]);
        // Set your Merchant Server Key
    \Midtrans\Config::$serverKey = config('midtrans.server_key');
    // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    \Midtrans\Config::$isProduction = false;
    // Set sanitization on (default)
    \Midtrans\Config::$isSanitized = true;
    // Set 3DS transaction for credit card to true
    \Midtrans\Config::$is3ds = true;

    $params = array(
        'transaction_details' => array(
            'order_id' => $rand_id,
            'gross_amount' => $jumlah,
        ),
        'customer_details' => array(
            'first_name' => $user->nama,
            'last_name' => '.',
            'email' => $user->email,
            // 'phone' => '08111222333',
        ),
    );
    $snapToken = \Midtrans\Snap::getSnapToken($params);
    return response()->json($snapToken);
    }

    public function callback(Request $request) {
        $id = $request->order_id;
        $donasi = Transaksi::where('order_id', $id)->first();
        $donasi->status_transaksi = true;
        $donasi->save();
        return response()->json($donasi);
    }
}
