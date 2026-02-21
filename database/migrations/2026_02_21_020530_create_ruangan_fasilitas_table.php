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
        Schema::create('ruangan_fasilitas', function (Blueprint $table) {
            $table->string('ruangan_id', 100);
            $table->string('fasilitas_id', 100);
            $table->primary(['ruangan_id', 'fasilitas_id']);

            $table->foreign('ruangan_id')->references('id_ruangan')->on('ruangans')->onDelete('cascade');
            $table->foreign('fasilitas_id')->references('id_fasilitas')->on('fasilitas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruangan_fasilitas');
    }
};
