<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Talenta extends Model
{
    protected $fillable = ['name', 'skill', 'portfolio', 'city', 'avatar'];

    public function getCityNameAttribute()
    {
        $map = [
            'Kabupaten Malang' => 'Malang Regency',
            'Kota Malang' => 'Malang City',
            'Kota Batu' => 'Batu City',
            'Kabupaten Pasuruan' => 'Pasuruan Regency',
            'Kota Pasuruan' => 'Pasuruan City',
            'Kabupaten Sidoarjo' => 'Sidoarjo Regency',
            'Kabupaten Blitar' => 'Blitar Regency',
            'Kota Blitar' => 'Blitar City',
            'Kota Surabaya' => 'Surabaya City',
        ];

        return $map[$this->city] ?? $this->city;
    }
}
