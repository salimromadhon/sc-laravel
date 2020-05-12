<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'nama',
        'nim',
        'email',
        'jurusan',
    ];

    public static function getAllJurusan()
    {
        return [
            'Komputer',
            'Akuntansi',
            'Geografi',
            'Mesin',
            'Farmasi',
        ];
    }
}
