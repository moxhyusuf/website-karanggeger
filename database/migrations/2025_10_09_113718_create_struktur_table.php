<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('struktur', function (Blueprint $table) {
            $table->id(); // Kolom ID
            $table->string('gambar')->nullable(); // Kolom untuk menyimpan nama/path gambar
            $table->timestamps(); // Kolom created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('struktur');
    }
};
