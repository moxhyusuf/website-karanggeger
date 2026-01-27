<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelembagaan;

class KelembagaanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'LKMD/LPMD',
                'lembaga' => 'LKMD/LPMD',
                'jumlah' => 7,
                'l' => 4,
                'p' => 3,
                'keterangan' => 'Orang',
            ],
            [
                'nama' => 'TP-PKK',
                'lembaga' => 'TP-PKK',
                'jumlah' => 23,
                'l' => 0,
                'p' => 23,
                'keterangan' => 'Orang',
            ],
            [
                'nama' => 'KARANG TARUNA “BAMBU MUDA”',
                'lembaga' => 'Karang Taruna',
                'jumlah' => 30,
                'l' => 20,
                'p' => 10,
                'keterangan' => 'Orang',
            ],
        ];

        foreach ($data as $item) {
            Kelembagaan::create($item);
        }
    }
}
