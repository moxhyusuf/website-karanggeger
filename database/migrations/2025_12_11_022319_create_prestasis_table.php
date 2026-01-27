<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
            $table->string('judul_prestasi');
            $table->date('tanggal_prestasi');  // Tahun / Tanggal
            $table->text('deskripsi')->nullable();
            $table->string('foto_utama')->nullable(); // path foto
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prestasis');
    }
};
