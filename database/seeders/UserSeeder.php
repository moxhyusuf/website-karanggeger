<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Jalankan seeder.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama'      => 'Admin Utama',
                'username'  => 'admin',
                'password'  => Hash::make('password123'), // jangan lupa hashing!
                'jabatan'   => 'Administrator',
                'no_hp'     => '081234567890',
                'bidang'    => 'Sistem Informasi',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nama'      => 'Petugas Desa',
                'username'  => 'petugas1',
                'password'  => Hash::make('petugas123'),
                'jabatan'   => 'Petugas',
                'no_hp'     => '082345678901',
                'bidang'    => 'Pelayanan Publik',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ]);
    }
}
