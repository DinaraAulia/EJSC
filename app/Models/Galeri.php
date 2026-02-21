<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    /**
     * Galeri memiliki banyak foto.
     */
    public function fotos()
    {
        return $this->hasMany(GaleriFoto::class, 'galeri_id', 'id_galeri');
    }
}
