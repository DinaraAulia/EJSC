<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';
    protected $primaryKey = 'id_fasilitas';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id_fasilitas',
        'nama_fasilitas',
        'ikon',
        'is_tersedia',
        'tgl_diperbarui',
    ];

    protected $casts = [
        'is_tersedia'   => 'boolean',
        'tgl_diperbarui' => 'date',
    ];

    /**
     * Fasilitas ini tersedia di ruangan mana saja.
     */
    public function ruangans()
    {
        return $this->belongsToMany(
            Ruangan::class,
            'ruangan_fasilitas',
            'fasilitas_id',
            'ruangan_id'
        );
    }
}
