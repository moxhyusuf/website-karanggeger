<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Struktur;

class StrukturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Struktur::create([
            'gambar' => 'struktur-desa.jpg', // ganti sesuai nama file gambar kamu
        ]);
    }
}
