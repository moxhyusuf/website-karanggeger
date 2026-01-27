<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas'; // nama tabel di MySQL
    protected $fillable = ['nama','username','password','no_hp','jabatan','bidang'];
}
