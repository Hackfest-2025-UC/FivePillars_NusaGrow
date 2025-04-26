<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penawaran extends Model
{
    protected $table = 'penawarans';
    protected $primaryKey = 'id_penawaran';
    protected $fillable = ['id_kebutuhan_perusahaan', 'id_produk', 'harga_penawaran', 'deskripsi_penawaran', 'status_penawaran'];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
}
