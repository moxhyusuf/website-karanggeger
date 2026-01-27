<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduans';

    protected $fillable = [
        'status_pelapor',
        'nama_pelapor',
        'no_hp',
        'alamat_pelapor',
        'kategori',
        'isi_pengaduan',
        'foto',
        'status',
    ];
}
