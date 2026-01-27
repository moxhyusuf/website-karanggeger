<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrestasiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('prestasis')->insert([
            [
                'judul_prestasi'   => 'Juara 1 Lomba Desa Tingkat Kabupaten',
                'tanggal_prestasi' => '2024-04-12',
                'deskripsi'        => 'Desa berhasil meraih Juara 1 pada Lomba Desa Tingkat Kabupaten berkat inovasi dan partisipasi aktif masyarakat.',
                'foto_utama'       => 'prestasi/juara1.jpg',
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
            [
                'judul_prestasi'   => 'Desa Bersih dan Sehat Tingkat Kecamatan',
                'tanggal_prestasi' => '2023-10-02',
                'deskripsi'        => 'Penghargaan desa bersih dan sehat berkat kerjasama warga dalam menjaga lingkungan.',
                'foto_utama'       => 'prestasi/desa_bersih.jpg',
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
            [
                'judul_prestasi'   => 'Penggerak UMKM Terbaik',
                'tanggal_prestasi' => '2022-08-21',
                'deskripsi'        => 'Pemerintah desa berhasil meningkatkan ekonomi warga melalui program UMKM.',
                'foto_utama'       => 'prestasi/umkm.jpg',
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
        ]);
    }
}
