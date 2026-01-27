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
       Schema::create('hero_sections', function (Blueprint $table) {
        $table->id();
        $table->string('judul_1');
        $table->string('judul_2')->nullable();
        $table->string('subtitle')->nullable();
        $table->string('gambar'); // path gambar
        $table->boolean('aktif')->default(true);
        $table->integer('urutan')->default(0);
        $table->timestamps();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};
