<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('umkms')->insert([
            [
                'nama' => 'Keripik Pisang Manis',
                'harga' => 15000,
                'deskripsi' => 'Keripik pisang renyah dengan rasa manis khas rumahan.',
                'image' => 'keripik-pisang.jpg',
                'alamat' => 'Jl. Mawar No. 12, Kanigaran',
                'wa' => '628123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Sambal Udang Bu Narti',
                'harga' => 25000,
                'deskripsi' => 'Sambal udang homemade dengan cita rasa pedas gurih.',
                'image' => 'sambal-udang.jpg',
                'alamat' => 'Perum Gading 1 Blok B12',
                'wa' => '628987654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Kopi Robusta Probolinggo',
                'harga' => 30000,
                'deskripsi' => 'Kopi robusta pilihan dari petani lokal Probolinggo.',
                'image' => 'kopi-robusta.jpg',
                'alamat' => 'Desa Sumberkerang, Gending',
                'wa' => '628222333444',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
