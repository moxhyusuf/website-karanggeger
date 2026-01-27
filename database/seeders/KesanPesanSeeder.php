<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KesanPesanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kesan_pesans')->insert([
            [
                'status_pelapor' => 'Warga Desa',
                'nama_lengkap' => 'Budi Santoso',
                'nomor_hp' => '081234567890',
                'alamat' => 'Dusun Krajan, Desa Lawean',
                'isi_pengaduan' => 'Saya berharap desa lebih memperhatikan kebersihan lingkungan.',
                'foto_pendukung' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status_pelapor' => 'Non Warga',
                'nama_lengkap' => 'Siti Aisyah',
                'nomor_hp' => '082233441122',
                'alamat' => 'Kabupaten Probolinggo',
                'isi_pengaduan' => 'Aplikasi pengaduan ini sangat membantu sekali, terima kasih.',
                'foto_pendukung' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
