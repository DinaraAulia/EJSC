<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Galeri extends Model
{
    protected $table = 'galeris';
    protected $primaryKey = 'id_galeri';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id_galeri',
        'judul',
        'tanggal',
        'deskripsi',
        'cover_foto',
        'album_fotos',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'album_fotos' => 'array',
    ];

    protected static function booted()
    {
        static::creating(function ($model) {
            if (empty($model->id_galeri)) {
                $model->id_galeri = 'GLR-' . strtoupper(\Illuminate\Support\Str::random(8));
            }
        });
    }

    /**
     * Galeri memiliki banyak foto.
     */
    public function fotos()
    {
        return $this->hasMany(GaleriFoto::class, 'galeri_id', 'id_galeri');
    }
}
