<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KesanPesan extends Model
{
    protected $table = 'kesan_pesans';

    protected $fillable = [
        'status_pelapor',
        'nama_lengkap',
        'nomor_hp',
        'alamat',
        'isi_pengaduan',
        'foto_pendukung',
    ];
}
