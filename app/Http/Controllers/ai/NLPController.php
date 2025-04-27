<?php

namespace App\Http\Controllers\ai;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class NLPController extends Controller
{
    public function index()
    {
        $auth = Auth::user();

        if (!$auth) {
            $deskripsi_supplier = "Saya menjual bijih nikel berkualitas tinggi untuk industri baterai.";
            $deskripsi_investor_list = [
                "Investor pertambangan nikel",
                "Investor agrikultur dan pangan",
                "Investor startup teknologi finansial"
            ];
        } else {
            $produks = Produk::where('id_user', $auth->id)->get();

            if ($produks->isEmpty()) {
                $deskripsi_supplier = "Produk belum tersedia.";
                $deskripsi_investor_list = ["Tidak ada produk yang ditemukan."];
            } else {
                // ambil nama produk pertama untuk deskripsi supplier
                $deskripsi_supplier = $produks->first()->nama_produk;

                // buat list nama produk untuk deskripsi_investor_list
                $deskripsi_investor_list = $produks->pluck('nama_produk')->toArray();
            }
        }

        $response = Http::post('http://127.0.0.1:5000/cari-investor', [
            'deskripsi_supplier' => $deskripsi_supplier,
            'deskripsi_investor_list' => $deskripsi_investor_list,
        ]);

        if ($response->successful()) {
            $result = $response->json();
            return response()->json($result);
        } else {
            return response()->json([
                'error' => 'Gagal menghubungi NLP server',
                'message' => $response->body()
            ], 500);
        }
    }
}
