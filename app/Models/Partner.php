<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'partners';
    protected $primaryKey = 'id_partner';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id_partner',
        'nama_mitra',
        'logo',
        'detail_mitra',
        'berkas_kerjasama',
    ];
}
