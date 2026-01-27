<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mitras')->insert([
            [
                'nama_mitra' => 'UMKM Bunga Desa',
                'keterangan' => 'Mitra bergerak di bidang kerajinan tangan.',
                'foto' => 'umkm_bunga.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_mitra' => 'CV Maju Bersama',
                'keterangan' => 'Mitra dalam bidang distribusi produk lokal.',
                'foto' => 'cv_maju.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_mitra' => 'Komunitas Tani Sejahtera',
                'keterangan' => 'Komunitas pertanian organik desa.',
                'foto' => 'tani_sejahtera.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
