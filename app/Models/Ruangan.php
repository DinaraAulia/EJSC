<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangans';
    protected $primaryKey = 'id_ruangan';
    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->id_ruangan)) {
                $model->id_ruangan = 'RNG-' . strtoupper(\Illuminate\Support\Str::random(6));
            }
            if (empty($model->slug) && !empty($model->nama_ruangan)) {
                $model->slug = \Illuminate\Support\Str::slug($model->nama_ruangan);
            }
        });
        static::updating(function ($model) {
            if (empty($model->slug) && !empty($model->nama_ruangan)) {
                $model->slug = \Illuminate\Support\Str::slug($model->nama_ruangan);
            }
        });
    }

    protected $fillable = [
        'id_ruangan',
        'nama_ruangan',
        'slug',
        'gambar',
        'wifi_speed',
        'luas',
        'deskripsi',
        'deskripsi_panjang',
        'kapasitas',
        'is_tersedia',
        'tgl_diperbarui',
    ];

    protected $casts = [
        'is_tersedia'   => 'boolean',
        'tgl_diperbarui' => 'date',
    ];

    /**
     * Ruangan ini memiliki banyak fasilitas.
     */
    public function fasilitas()
    {
        return $this->belongsToMany(
            Fasilitas::class,
            'ruangan_fasilitas',
            'ruangan_id',
            'fasilitas_id'
        );
    }

    /**
     * Ruangan ini memiliki banyak riwayat peminjaman.
     */
    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class, 'ruangan_id', 'id_ruangan');
    }
}
