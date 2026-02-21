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
}
