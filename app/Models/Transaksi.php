<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    protected $primaryKey = 'id_transaksi';
    protected $guarded = ['id_transaksi'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_users');
    }

    public function getPotonganAdminAttribute()
    {
        return $this->jumlah_transaksi * 0.05;
    }

    public function getJumlahBersihAttribute()
    {
        return $this->jumlah_transaksi * 0.95;
    }

}
