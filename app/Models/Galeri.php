<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri'; // nama tabel

    protected $fillable = [
        'judul',
        'deskripsi',
        'kategori',
        'gambar',
    ];
}
