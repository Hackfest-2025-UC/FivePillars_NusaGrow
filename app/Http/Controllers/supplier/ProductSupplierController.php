<?php

namespace App\Http\Controllers\supplier;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::with('users')->get();
        return view('pages.supplier.products.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.supplier.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'gambar_produk' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori_produk' => 'required|string|in:Pertanian,Perikanan,Elektronik,Peralatan Rumah Tangga,Bahan Makanan',
            'harga' => 'required|integer|min:1',
            'deskripsi' => 'required|string|max:500',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $filename = null;
        if ($request->hasFile('gambar_produk')) {
            $file = $request->file('gambar_produk');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storePubliclyAs('supplier', $filename, 'public');
        }

        $produk = Produk::create([
            'id_user' => 3,
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga,
            'deskripsi_produk' => $request->deskripsi,
            'kategori_produk' => $request->kategori_produk,
            'gambar_produk' => $filename,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'status' => 'menunggu',
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::findOrFail($id);
        return view('pages.supplier.products.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'gambar_produk' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori_produk' => 'required|string|in:Pertanian,Perikanan,Elektronik,Peralatan Rumah Tangga,Bahan Makanan',
            'harga' => 'required|integer|min:1',
            'deskripsi' => 'required|string|max:500',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $produk = Produk::findOrFail($id);

        if ($request->hasFile('gambar_produk')) {
            $file = $request->file('gambar_produk');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storePubliclyAs('supplier', $filename, 'public');
            $produk->gambar_produk = $filename;
        }

        $produk->nama_produk = $request->nama_produk;
        $produk->harga_produk = $request->harga;
        $produk->deskripsi_produk = $request->deskripsi;
        $produk->kategori_produk = $request->kategori_produk;
        $produk->latitude = $request->latitude;
        $produk->longitude = $request->longitude;
        $produk->save();

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus');
    }
}
