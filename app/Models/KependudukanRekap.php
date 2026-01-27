<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KependudukanRekap extends Model
{
    use HasFactory;

    protected $table = 'kependudukan_rekap';

    protected $fillable = [
        'kelompok',
        'label',
        'jumlah',
        'persentase',
    ];

    protected $casts = [
        'jumlah' => 'integer',
        'persentase' => 'float',
    ];
}
