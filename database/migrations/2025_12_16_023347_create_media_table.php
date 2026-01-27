<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();

            // relasi umum (UMKM, Pembangunan, dll)
            $table->unsignedBigInteger('parent_id');
            $table->string('parent_type'); // umkm, pembangunan, prestasi, dll

            // data file
            $table->string('file_path');
            $table->string('caption')->nullable();

            $table->timestamps();

            // index agar query cepat
            $table->index(['parent_id', 'parent_type']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
