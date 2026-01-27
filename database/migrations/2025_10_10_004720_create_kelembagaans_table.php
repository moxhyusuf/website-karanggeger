<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kelembagaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('lembaga');
            $table->integer('jumlah')->default(0);
            $table->integer('l')->default(0); // Laki-laki
            $table->integer('p')->default(0); // Perempuan
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kelembagaans');
    }
};
