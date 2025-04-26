<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    protected $table = 'permintaans';

    protected $primaryKey = 'id_permintaans';
    protected $fillable = [
        'id_kebutuhan_produsen',
        'id_produk',
        'harga_penawaran',
        'deskripsi_penawaran',
        'status_permintaan',
    ];

    public function kebutuhan_produsen()
    {
        return $this->belongsTo(KebutuhanProdusen::class, 'id_kebutuhan_produsen');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
}
