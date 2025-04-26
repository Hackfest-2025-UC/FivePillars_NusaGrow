<?php

namespace App\Http\Controllers\Produsen;

use App\Http\Controllers\Controller;
use App\Models\KebutuhanProdusen;
use App\Models\Penawaran;
use App\Models\Produk;
use App\Models\Produsen;
use Illuminate\Http\Request;

class ProdusenController extends Controller
{
    public function cariSuplier()
    {
        $suppliers = Produk::all();
        return view('pages.produsen.cari-suplier', compact('suppliers'));
    }

    public function penawaran()
    {
        $produsen = Produsen::where('id_user', 1)->first();
        $user_id = KebutuhanProdusen::where('id_produsen', $produsen->id_produsen)->first();
        $penawarans = Penawaran::where('id_kebutuhan_produsen', $user_id->id_kebutuhan_produsen)->get();
        return view('pages.produsen.melihat-penawaran', compact('penawarans'));
    }

    
}
