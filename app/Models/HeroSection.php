<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'judul_1',
        'judul_2',
        'subtitle',
        'gambar',
        'aktif',
        'urutan'
    ];
}
