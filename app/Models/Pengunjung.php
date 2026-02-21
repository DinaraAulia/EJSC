<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    protected $table = 'pengunjungs';
    protected $primaryKey = 'id_pengunjung';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_pengunjung',
        'nama',
        'usia',
        'jenis_kelamin',
        'no_hp',
        'sosmed',
        'profesi',
        'domisili',
        'sumber_info',
        'keperluan',
        'created_at',
    ];
}
