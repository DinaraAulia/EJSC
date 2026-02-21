<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GaleriFoto extends Model
{
    protected $table = 'galeri_fotos';
    protected $primaryKey = 'id_gambar';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id_gambar',
        'galeri_id',
        'path_foto',
    ];

    /**
     * Foto ini milik sebuah galeri.
     */
    public function galeri()
    {
        return $this->belongsTo(Galeri::class, 'galeri_id', 'id_galeri');
    }
}
