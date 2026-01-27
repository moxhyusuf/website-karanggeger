<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kesan_pesans', function (Blueprint $table) {
            $table->id();
            $table->enum('status_pelapor', ['Warga Desa', 'Non Warga'])->default('Warga Desa');
            $table->string('nama_lengkap');
            $table->string('nomor_hp');
            $table->text('alamat');
            $table->text('isi_pengaduan');
            $table->string('foto_pendukung')->nullable(); // opsional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesan_pesans');
    }
};
