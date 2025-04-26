<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\KebutuhanPerusahan;
use App\Http\Controllers\Controller;
use App\Models\KebutuhanProdusen;
use App\Models\Produk;

class VerifikasiAdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.verifikasi', [
            "kebutuhan_produsen" => KebutuhanProdusen::with('produsen')->where('status', 'menunggu')->get(),
            "produk" => Produk::with('users')->where('status', 'menunggu')->get()
        ]);
    }

    public function updateStatusKebutuhanDiterima($id)
    {
        $kebutuhan = KebutuhanProdusen::find($id);
        $kebutuhan->status = 'diterima';
        $kebutuhan->save();
        return redirect()->route('admin.verifikasi')->with('success', 'Status kebutuhan berhasil diubah');
    }

    public function updateStatusKebutuhanDitolak($id)
    {
        $kebutuhan = KebutuhanProdusen::find($id);
        $kebutuhan->status = 'ditolak';
        $kebutuhan->save();
        return redirect()->route('admin.verifikasi')->with('success', 'Status kebutuhan berhasil diubah');
    }

    public function updateStatusProdukDiterima($id)
    {
        $kebutuhan = Produk::find($id);
        $kebutuhan->status = 'diterima';
        $kebutuhan->save();
        return redirect()->route('admin.verifikasi')->with('success', 'Status kebutuhan berhasil diubah');
    }

    public function updateStatusProdukDitolak($id)
    {
        $kebutuhan = Produk::find($id);
        $kebutuhan->status = 'ditolak';
        $kebutuhan->save();
        return redirect()->route('admin.verifikasi')->with('success', 'Status kebutuhan berhasil diubah');
    }
}
