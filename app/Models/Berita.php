<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_berita';

    protected $fillable = [
        'judul',
        'tgl_berita',
        'nmpenulis',
        'narasiberita',
        'image',
    ];

    public function scopeTerbaru($query)
{
    return $query->orderBy('tgl_berita', 'desc');
}

}
