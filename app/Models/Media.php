<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';

    protected $fillable = [
        'parent_id',
        'parent_type',
        'file_path',
        'caption',
    ];

    public function parent()
    {
        return $this->morphTo();
    }
}
