<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuangPemudaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ruang_pemuda')->insert([
            [
                'nama' => 'Ruang Kreatif Pemuda',
                'keterangan' => 'Tempat kegiatan latihan seni dan diskusi pemuda desa.',
                'img' => 'ruang1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ruang Kegiatan Olahraga',
                'keterangan' => 'Fasilitas untuk latihan olahraga seperti futsal dan badminton.',
                'img' => 'ruang2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ruang Rapat Pemuda',
                'keterangan' => 'Tempat musyawarah dan pertemuan organisasi kepemudaan.',
                'img' => 'ruang3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
