<?php

namespace App\Http\Controllers\ai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NLPController extends Controller
{
    public function index(){
        $deskripsi_supplier = "Saya menjual bijih nikel berkualitas tinggi untuk industri baterai.";
        $deskripsi_investor_list = [
            "Saya ingin berinvestasi di sektor pertambangan nikel.",
            "Saya fokus di industri agrikultur dan pangan.",
            "Saya tertarik dengan startup teknologi finansial."
        ];

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
