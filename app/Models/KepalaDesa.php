<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaDesa extends Model
{
    use HasFactory;

    protected $table = 'kepala_desa'; // nama tabel

    protected $fillable = [
        'nama',
        'nik',
        'foto',
        'periode_mulai',
        'periode_selesai',
        'alamat',
        'visi',
        'misi',
        'sambutan',
        'status_jabatan',
    ];
}
