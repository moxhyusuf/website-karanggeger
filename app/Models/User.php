<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'nama',
        'username',
        'password',
        'jabatan',
        'no_hp',
        'bidang',
    ];

    protected $hidden = [
        'password',
    ];
}
