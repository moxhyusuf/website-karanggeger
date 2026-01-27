<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $table = 'prestasis';

    protected $fillable = [
        'judul_prestasi',
        'tanggal_prestasi',
        'deskripsi',
        'foto_utama',
    ];
}
