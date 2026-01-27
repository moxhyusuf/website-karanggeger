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
        Schema::create('kepala_desa', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 150);
            $table->string('nik', 30)->nullable();
            $table->string('foto', 255)->nullable();
            $table->date('periode_mulai')->nullable();
            $table->date('periode_selesai')->nullable();
            $table->text('alamat')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->longText('sambutan')->nullable();
            $table->enum('status_jabatan', ['aktif', 'nonaktif'])->default('aktif');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepala_desa');
    }
};