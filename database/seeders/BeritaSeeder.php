<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;
use Carbon\Carbon;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 15; $i++) {
            Berita::create([
                'judul' => "Berita Ke-$i",
                'tgl_berita' => Carbon::now()->subDays($i),
                'nmpenulis' => "Penulis $i",
                'narasiberita' => "Ini adalah isi narasi berita ke-$i yang menjelaskan detail berita dengan lengkap.",
                'image' => null,
            ]);
        }
    }
}
