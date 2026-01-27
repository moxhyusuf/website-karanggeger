<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBumdesTable extends Migration
{
    public function up(): void
    {
        Schema::create('bumdes', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('keterangan')->nullable();
            $table->string('foto')->nullable(); // simpan nama file
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bumdes');
    }
}
