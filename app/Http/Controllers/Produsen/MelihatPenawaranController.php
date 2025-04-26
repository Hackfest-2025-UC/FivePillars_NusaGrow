<?php

namespace App\Http\Controllers\Produsen;

use App\Http\Controllers\Controller;
use App\Models\KebutuhanPerusahan;
use App\Models\KebutuhanProdusen;
use App\Models\Penawaran;
use Illuminate\Http\Request;

class MelihatPenawaranController extends Controller
{
    public function index() {
        $user_id = KebutuhanProdusen::where('id_users', )->first();
        $penawarans = Penawaran::where('id_kebutuhan_perusahaan', $user_id->id_penawaran)->get();
        return view('pages.produsen.melihat-penawaran', compact('penawarans'));
    }
}
