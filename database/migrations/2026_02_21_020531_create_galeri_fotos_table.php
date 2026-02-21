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
        Schema::create('galeri_fotos', function (Blueprint $table) {
            $table->string('id_gambar', 100)->primary();
            $table->string('galeri_id', 100)->nullable();
            $table->string('path_foto', 100)->nullable();
            $table->timestamps();

            $table->foreign('galeri_id')->references('id_galeri')->on('galeris')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeri_fotos');
    }
};
