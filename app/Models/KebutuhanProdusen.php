<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KebutuhanProdusen extends Model
{
    protected $table = 'kebutuhan_produsens';

    protected $fillable = [
        'id_produsen',
        'nama_kebutuhan',
        'jumlah_kebutuhan',
        'latitude',
        'longitude',
    ];
}
