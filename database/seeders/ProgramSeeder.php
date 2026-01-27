<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        Program::create([
            'nama_program' => 'Program Odus, Ocon',
            'keterangan' => 'Adalah program penggalian potensi yang ada di setiap Dusun untuk menjadi ikon di setiap dusunnya. Program ini dilaksanakan di akhir Tahun 2021.',
            'img' => null, // bisa diisi 'programs/odus.jpg' jika nanti ada gambarnya
        ]);

        Program::create([
            'nama_program' => 'GERPAS',
            'keterangan' => 'Adalah program penggalian potensi yang ada di setiap Dusun untuk menjadi ikon di setiap dusunnya. Program ini dilaksanakan di akhir Tahun 2021.',
            'img' => null,
        ]);

        Program::create([
            'nama_program' => 'Penyelenggaraan Jalan New Normal',
            'keterangan' => 'Adalah gerakan yang melibatkan kelompok masyarakat untuk bersama-sama melaksanakan pembersihan sampah di lingkungan sekitar.',
            'img' => null,
        ]);
    }
}
