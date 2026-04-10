<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjamans';
    protected $primaryKey = 'id_peminjaman';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id_peminjaman',
        'ruangan_id',
        'nama_kegiatan',
        'latar_belakang',
        'tujuan_kegiatan',
        'sasaran_peserta',
        'jumlah_peserta',
        'narasumber',
        'pj_kegiatan',
        'instansi',
        'alamat_instansi',
        'wilayah',
        'no_hp_pj',
        'fasilitas_tambahan',
        'tgl_penggunaan',
        'jam_mulai',
        'jam_berakhir',
        'berkas_ktp',
        'berkas_surat',
        'berkas_poster',
        'status',
    ];

    protected $casts = [
        'tgl_penggunaan' => 'date',
        'status'         => 'string', // Ensure consistency with form options
        'fasilitas_tambahan' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->id_peminjaman)) {
                // Generate Booking ID: BOK-20240402-XXXX
                $model->id_peminjaman = 'BOK-' . date('Ymd') . '-' . strtoupper(bin2hex(random_bytes(2)));
            }
        });
    }

    /**
     * Peminjaman ini terkait dengan ruangan tertentu.
     * (Opsional: tambahkan kolom ruangan_id di migration jika diperlukan)
     */
    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'ruangan_id', 'id_ruangan');
    }
}
