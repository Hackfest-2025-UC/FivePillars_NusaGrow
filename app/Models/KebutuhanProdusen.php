<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KebutuhanProdusen extends Model
{
    protected $table = 'kebutuhan_produsens';
    protected $primaryKey = 'id_kebutuhan_produsen';

    protected $fillable = [
        'id_produsen',
        'nama_kebutuhan',
        'jumlah_kebutuhan',
        'latitude',
        'longitude',
    ];

    public function produsen()
    {
        return $this->belongsTo(Produsen::class, 'id_produsen');
    }
}
