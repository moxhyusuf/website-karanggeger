<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $table = 'umkms';

    protected $fillable = [
        'nama',
        'harga',
        'deskripsi',
        'image',
        'alamat',
        'wa',
    ];

    public function media()
    {
        return $this->hasMany(Media::class, 'parent_id')
            ->where('parent_type', 'umkm');
    }
}
