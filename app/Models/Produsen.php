<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produsen extends Model
{
    protected $table = 'produsens';
    protected $primaryKey = 'id_produsen';

    protected $fillable = [
        'id_produsen',
        'id_user',
        'nama_produsen',
        'alamat_produsen',
    ];
}
