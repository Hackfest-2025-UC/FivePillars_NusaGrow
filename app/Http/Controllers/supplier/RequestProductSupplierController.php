<?php

namespace App\Http\Controllers\supplier;

use App\Http\Controllers\Controller;
use App\Models\Permintaan;
use Illuminate\Http\Request;

class RequestProductSupplierController extends Controller
{
    public function index()
    {
        $permintaans = Permintaan::with([
            'kebutuhan_produsen.produsen',
            'produk.user'
        ])
            ->whereHas('produk', function ($query) {
                $query->where('id_user', 3);
            })
            ->get();
        return view('pages.supplier.request.index', compact('permintaans'));
    }

    public function store(Request $request)
    {
        $permintaan = Permintaan::find($request->id_permintaan);
        $permintaan->balasan_penawaran = $request->balasan;
        $permintaan->save();
        return redirect()->route('suplier.request.index')->with('success', 'Permintaan berhasil dikirim');
    }
}
