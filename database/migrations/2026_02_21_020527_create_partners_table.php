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
        Schema::create('partners', function (Blueprint $table) {
            $table->string('id_partner', 100)->primary();
            $table->string('nama_mitra', 100)->nullable();
            $table->string('logo', 100)->nullable();
            $table->string('detail_mitra', 100)->nullable();
            $table->string('berkas_kerjasama', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
