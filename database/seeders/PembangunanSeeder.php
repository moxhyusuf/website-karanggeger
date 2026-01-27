<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembangunanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pembangunans')->insert([
            [
                'judul' => 'Pembangunan Balai Desa',
                'keterangan' => 'Pembangunan balai desa tahap 1 telah dimulai pada bulan Januari.',
                'foto' => 'balai_desa.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Perbaikan Jalan Utama',
                'keterangan' => 'Proses pengecoran jalan utama sepanjang 1 km.',
                'foto' => 'jalan_utame.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
