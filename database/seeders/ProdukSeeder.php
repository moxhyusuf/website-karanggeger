<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('produks')->insert([
            [
                'nama_produk' => 'Keripik Singkong',
                'image' => 'produk/keripik_singkong.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_produk' => 'Batik Probolinggo',
                'image' => 'produk/batik_probolinggo.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_produk' => 'Kopi Robusta',
                'image' => 'produk/kopi_robusta.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
