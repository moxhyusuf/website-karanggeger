<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kependudukan_rekap', function (Blueprint $table) {
            $table->id();
            $table->string('kelompok');          // gender, usia, pekerjaan, agama, pendidikan, tamat_sekolah
            $table->string('label');             // Laki-Laki, 0-14, Buruh, Islam, SLTA, dll
            $table->integer('jumlah');            // jumlah penduduk
            $table->decimal('persentase', 5, 2)->nullable(); // opsional
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kependudukan_rekap');
    }
};
