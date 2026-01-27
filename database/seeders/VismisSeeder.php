<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vismis;

class VismisSeeder extends Seeder
{
    public function run(): void
    {
        Vismis::create([
            'visi' => 'Menjadi desa yang maju, mandiri, dan berdaya saing dengan berlandaskan nilai gotong royong serta kesejahteraan masyarakat.',
            'misi' => "- Meningkatkan kualitas sumber daya manusia melalui pendidikan dan pelatihan.\n"
                . "- Mengembangkan potensi ekonomi lokal berbasis pertanian, UMKM, dan pariwisata.\n"
                . "- Meningkatkan pelayanan publik yang transparan, akuntabel, dan responsif.\n"
                . "- Membangun infrastruktur yang mendukung kemajuan desa secara berkelanjutan.\n"
                . "- Mewujudkan lingkungan desa yang bersih, aman, dan harmonis.",
        ]);
    }
}
