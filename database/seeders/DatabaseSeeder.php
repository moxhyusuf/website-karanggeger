<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\VismisSeeder;
use Database\Seeders\SejarahSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(SejarahSeeder::class);
        $this->call(BeritaSeeder::class);
       
        $this->call(VismisSeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call([ProdukSeeder::class]);
       
        $this->call(GaleriSeeder::class);
        $this->call([StrukturSeeder::class,]);
        $this->call(KepalaDesaSeeder::class);
        $this->call(PengaduanSeeder::class);
        $this->call(KesanPesanSeeder::class);
        $this->call([BumdesSeeder::class,]);
        $this->call([PembangunanSeeder::class,]);
        $this->call([PrestasiSeeder::class,]);
        $this->call([KependudukanRekapSeeder::class,]);

        


    }
}
