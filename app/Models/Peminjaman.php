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
        'kategori_instansi',
        'ruangan_id',
        'nama_kegiatan',
        'jumlah_peserta',
        'pj_kegiatan',
        'instansi',
        'alamat_instansi',
        'no_hp_pj',
        'tgl_penggunaan',
        'tgl_berakhir',
        'jam_mulai',
        'jam_berakhir',
        'berkas_surat',
        'status',
        'bersedia_ubah_jadwal',
    ];

    protected $casts = [
        'tgl_penggunaan' => 'date',
        'tgl_berakhir' => 'date',
        'bersedia_ubah_jadwal' => 'boolean',
        'status'         => 'string',
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
