<?php

namespace App\Http\Controllers\Produsen;

use App\Http\Controllers\Controller;
use App\Models\KebutuhanPerusahan;
use App\Models\KebutuhanProdusen;
use App\Models\Penawaran;
use App\Models\Produsen;
use Illuminate\Http\Request;

class MelihatPenawaranController extends Controller
{
    public function index() {
        $produsen = Produsen::where('id_user', 1)->first();
        $user_id = KebutuhanProdusen::where('id_produsen', $produsen->id_produsen)->first();
        $penawarans = Penawaran::where('id_kebutuhan_produsen', $user_id->id_kebutuhan_produsen)->get();
        return view('pages.produsen.melihat-penawaran', compact('penawarans'));
    }
}
