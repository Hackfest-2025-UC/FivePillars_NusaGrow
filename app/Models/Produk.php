<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';
    protected $primaryKey = 'id_produk';
    protected $fillable = [
        'id_produk',
        'id_user',
        'nama_produk',
        'gambar_produk',
        'deskripsi_produk',
        'kategori_produk',
        'harga_produk',
        'latitude',
        'longitude',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
}
