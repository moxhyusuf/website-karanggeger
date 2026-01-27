<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengaduans')->insert([
            [
                'status_pelapor' => 'warga',
                'nama_pelapor'   => 'Budi Santoso',
                'no_hp'          => '081234567890',
                'alamat_pelapor' => 'Dusun Krajan RT 03 RW 01',
                'kategori'       => 'Infrastruktur',
                'isi_pengaduan'  => 'Jalan menuju balai desa rusak parah dan membahayakan pengguna jalan.',
                'foto'           => null,
                'status'         => 'baru',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'status_pelapor' => 'non_warga',
                'nama_pelapor'   => 'Siti Rohmah',
                'no_hp'          => '082345678901',
                'alamat_pelapor' => 'Kecamatan Sumberasih',
                'kategori'       => 'Lingkungan',
                'isi_pengaduan'  => 'Banyak sampah menumpuk di area jembatan perbatasan desa.',
                'foto'           => null,
                'status'         => 'diproses',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'status_pelapor' => 'warga',
                'nama_pelapor'   => 'Rahmat Hadi',
                'no_hp'          => '083456789012',
                'alamat_pelapor' => 'Dusun Tengah RT 02 RW 02',
                'kategori'       => 'Keamanan',
                'isi_pengaduan'  => 'Sering terjadi pencurian motor di area sekitar lapangan desa.',
                'foto'           => null,
                'status'         => 'selesai',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
        ]);
    }
}
