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
        Schema::create('ruangans', function (Blueprint $table) {
            $table->string('id_ruangan', 100)->primary();
            $table->string('nama_ruangan', 100)->nullable();
            $table->string('deskripsi', 100)->nullable();
            $table->integer('kapasitas')->nullable();
            $table->boolean('is_tersedia')->default(true);
            $table->date('tgl_diperbarui')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruangans');
    }
};
