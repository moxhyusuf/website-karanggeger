<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    public function run()
    {
        DB::table('galeri')->insert([

            [
                'judul' => 'Kerja Bakti Bersama Warga',
                'deskripsi' => 'Kegiatan gotong royong membersihkan lingkungan desa.',
                'kategori' => 'kegiatan',
                'gambar' => 'galeri/kegiatan1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Festival Budaya Desa',
                'deskripsi' => 'Acara rutin dalam rangka melestarikan budaya lokal.',
                'kategori' => 'event',
                'gambar' => 'galeri/event1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Pembangunan Jalan Desa',
                'deskripsi' => 'Progres pembangunan jalan utama desa.',
                'kategori' => 'pembangunan',
                'gambar' => 'galeri/pembangunan1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Info UMKM Desa',
                'deskripsi' => 'Produk unggulan dari pelaku UMKM desa.',
                'kategori' => 'lain-lain', // karena tidak ada enum 'umkm'
                'gambar' => 'galeri/umkm1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Wisata Alam Desa',
                'deskripsi' => 'Panorama alam desa yang menjadi daya tarik wisata.',
                'kategori' => 'lain-lain', // karena tidak ada enum 'wisata'
                'gambar' => 'galeri/wisata1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Foto Kantor Desa',
                'deskripsi' => 'Dokumentasi kantor desa sebagai identitas wilayah.',
                'kategori' => 'lain-lain', // karena tidak ada enum 'profil'
                'gambar' => 'galeri/profil1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
