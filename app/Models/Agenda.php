<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agendas';
    protected $primaryKey = 'id_agenda';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id_agenda',
        'nama_agenda',
        'tanggal',
        'detail_agenda',
        'berkas',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->id_agenda)) {
                // Contoh format: AGD-20260401-XXXX
                $model->id_agenda = 'AGD-' . date('Ymd') . '-' . strtoupper(bin2hex(random_bytes(2)));
            }
        });
    }
}
