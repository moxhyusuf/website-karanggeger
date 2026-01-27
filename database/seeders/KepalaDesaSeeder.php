<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KepalaDesaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kepala_desa')->insert([
            'nama' => 'Nama Kepala Desa',
            'nik' => '3512345678901234',
            'foto' => 'kepala_desa/default.jpg', // sesuaikan path foto
            'periode_mulai' => '2024-01-01',
            'periode_selesai' => '2030-01-01',
            'alamat' => 'Jl. Raya Desa No. 123, Kecamatan ABC',
            'visi' => 'Mewujudkan desa maju, mandiri, dan sejahtera.',
            'misi' => '1. Meningkatkan pelayanan publik. 2. Memperkokoh gotong royong. 3. Memajukan pembangunan desa.',
            'sambutan' => '<p>Assalamualaikum warahmatullahi wabarakatuh. Selamat datang di website resmi Pemerintah Desa. Semoga informasi yang disajikan dapat bermanfaat bagi seluruh masyarakat.</p>',
            'status_jabatan' => 'aktif',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
