<?php

namespace Database\Seeders;

use App\Models\Bumdes;
use Illuminate\Database\Seeder;

class BumdesSeeder extends Seeder
{
    public function run(): void
    {
        Bumdes::create([
            'nama' => 'Bumdes Sejahtera',
            'keterangan' => 'Bumdes ini bergerak dalam layanan usaha dan ekonomi masyarakat desa.',
            'foto' => null
        ]);

        Bumdes::create([
            'nama' => 'Bumdes Mandiri',
            'keterangan' => 'Fokus pada pengelolaan usaha simpan pinjam dan pemberdayaan UMKM.',
            'foto' => null
        ]);
    }
}
