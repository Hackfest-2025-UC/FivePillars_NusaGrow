<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\KebutuhanPerusahan;
use App\Http\Controllers\Controller;

class VerifikasiAdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.verifikasi', [
            // "kebutuhan_perusahaan" => KebutuhanPerusahan::with('produsen')->get()
        ]);
    }
}
