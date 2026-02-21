<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = 'testimonis';
    protected $primaryKey = 'id_testimoni';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id_testimoni',
        'nama_pengulas',
        'rating',
        'detail_ulasan',
        'tgl_ulasan',
        'is_published',
    ];

    protected $casts = [
        'tgl_ulasan'   => 'date',
        'is_published' => 'boolean',
    ];
}
