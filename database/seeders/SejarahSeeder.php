<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SejarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sejarah')->insert([
            [
                'sejarah' => 'Desa Laweyan berdiri sejak abad ke-18. Masyarakatnya hidup dari pertanian dan perdagangan kain batik. Seiring waktu, desa ini berkembang menjadi pusat kebudayaan.',
                'img'     => 'sejarah/laweyan1.jpg', // pastikan file ini ada di storage/app/public/sejarah/
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
