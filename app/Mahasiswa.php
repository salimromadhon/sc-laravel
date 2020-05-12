<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use SoftDeletes;

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
