<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->id_testimoni)) {
                // Contoh format: AGD-20260401-XXXX
                $model->id_testimoni = 'REV-' . date('Ymd') . '-' . strtoupper(bin2hex(random_bytes(1)));
            }
        });
    }
}
