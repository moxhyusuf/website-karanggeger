<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KependudukanRekapSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kependudukan_rekap')->insert([

            // ======================
            // JENIS KELAMIN
            // ======================
            ['kelompok'=>'gender','label'=>'Laki-Laki','jumlah'=>2361,'persentase'=>49.45],
            ['kelompok'=>'gender','label'=>'Perempuan','jumlah'=>2413,'persentase'=>50.55],

            // ======================
            // STRUKTUR USIA
            // ======================
            ['kelompok'=>'usia','label'=>'0-14','jumlah'=>1145,'persentase'=>null],
            ['kelompok'=>'usia','label'=>'15-64','jumlah'=>3322,'persentase'=>null],
            ['kelompok'=>'usia','label'=>'>65','jumlah'=>307,'persentase'=>null],

            // ======================
            // PEKERJAAN
            // ======================
            ['kelompok'=>'pekerjaan','label'=>'Belum Kerja','jumlah'=>423,'persentase'=>null],
            ['kelompok'=>'pekerjaan','label'=>'Buruh','jumlah'=>703,'persentase'=>null],
            ['kelompok'=>'pekerjaan','label'=>'Petani','jumlah'=>520,'persentase'=>null],
            ['kelompok'=>'pekerjaan','label'=>'Nelayan','jumlah'=>0,'persentase'=>null],
            ['kelompok'=>'pekerjaan','label'=>'Dagang','jumlah'=>123,'persentase'=>null],
            ['kelompok'=>'pekerjaan','label'=>'PNS','jumlah'=>54,'persentase'=>null],
            ['kelompok'=>'pekerjaan','label'=>'Pensiunan','jumlah'=>14,'persentase'=>null],
            ['kelompok'=>'pekerjaan','label'=>'TNI/POLRI','jumlah'=>8,'persentase'=>null],
            ['kelompok'=>'pekerjaan','label'=>'Guru','jumlah'=>58,'persentase'=>null],
            ['kelompok'=>'pekerjaan','label'=>'Karyawan Swasta','jumlah'=>146,'persentase'=>null],
            ['kelompok'=>'pekerjaan','label'=>'Karyawan BUMN','jumlah'=>18,'persentase'=>null],
            ['kelompok'=>'pekerjaan','label'=>'Honorer','jumlah'=>14,'persentase'=>null],
            ['kelompok'=>'pekerjaan','label'=>'Wiraswasta','jumlah'=>157,'persentase'=>null],
            ['kelompok'=>'pekerjaan','label'=>'Pelajar/Mahasiswa','jumlah'=>125,'persentase'=>null],
            ['kelompok'=>'pekerjaan','label'=>'Lain-lain','jumlah'=>252,'persentase'=>null],

            // ======================
            // TENAGA KERJA
            // ======================
            ['kelompok'=>'tenaga_kerja','label'=>'Produktif (15-55)','jumlah'=>3322,'persentase'=>null],
            ['kelompok'=>'tenaga_kerja','label'=>'Tidak Produktif','jumlah'=>1452,'persentase'=>null],

            // ======================
            // AGAMA
            // ======================
            ['kelompok'=>'agama','label'=>'Islam','jumlah'=>4769,'persentase'=>null],
            ['kelompok'=>'agama','label'=>'Katholik','jumlah'=>2,'persentase'=>null],
            ['kelompok'=>'agama','label'=>'Protestan','jumlah'=>0,'persentase'=>null],
            ['kelompok'=>'agama','label'=>'Hindu','jumlah'=>0,'persentase'=>null],
            ['kelompok'=>'agama','label'=>'Budha','jumlah'=>3,'persentase'=>null],

            // ======================
            // PENDIDIKAN
            // ======================
            ['kelompok'=>'pendidikan','label'=>'Tidak/Belum Sekolah','jumlah'=>930,'persentase'=>null],
            ['kelompok'=>'pendidikan','label'=>'Belum Tamat SD','jumlah'=>715,'persentase'=>null],
            ['kelompok'=>'pendidikan','label'=>'SD/Sederajat','jumlah'=>1709,'persentase'=>null],
            ['kelompok'=>'pendidikan','label'=>'SLTP','jumlah'=>607,'persentase'=>null],
            ['kelompok'=>'pendidikan','label'=>'SLTA','jumlah'=>655,'persentase'=>null],
            ['kelompok'=>'pendidikan','label'=>'D1/D2','jumlah'=>18,'persentase'=>null],
            ['kelompok'=>'pendidikan','label'=>'D3','jumlah'=>14,'persentase'=>null],
            ['kelompok'=>'pendidikan','label'=>'S1','jumlah'=>87,'persentase'=>null],
            ['kelompok'=>'pendidikan','label'=>'S2','jumlah'=>9,'persentase'=>null],

            // ======================
            // TAMAT SEKOLAH
            // ======================
            ['kelompok'=>'tamat_sekolah','label'=>'Tidak/Belum Sekolah','jumlah'=>930,'persentase'=>19.48],
            ['kelompok'=>'tamat_sekolah','label'=>'Belum Tamat SD','jumlah'=>715,'persentase'=>14.97],
            ['kelompok'=>'tamat_sekolah','label'=>'Tamat SD','jumlah'=>1709,'persentase'=>35.79],
            ['kelompok'=>'tamat_sekolah','label'=>'Tamat SLTP','jumlah'=>607,'persentase'=>12.71],
            ['kelompok'=>'tamat_sekolah','label'=>'Tamat SLTA','jumlah'=>655,'persentase'=>13.72],
            ['kelompok'=>'tamat_sekolah','label'=>'D3','jumlah'=>49,'persentase'=>1.02],
            ['kelompok'=>'tamat_sekolah','label'=>'S1/D4','jumlah'=>100,'persentase'=>2.09],
            ['kelompok'=>'tamat_sekolah','label'=>'S2','jumlah'=>9,'persentase'=>0.10],
            ['kelompok'=>'tamat_sekolah','label'=>'S3','jumlah'=>0,'persentase'=>0],
        ]);
    }
}
