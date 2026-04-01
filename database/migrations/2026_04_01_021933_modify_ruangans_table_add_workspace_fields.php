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
        Schema::table('ruangans', function (Blueprint $table) {
            $table->string('slug')->nullable()->unique();
            $table->string('gambar')->nullable();
            $table->string('wifi_speed', 50)->nullable();
            $table->integer('luas')->nullable();
            $table->text('deskripsi_panjang')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ruangans', function (Blueprint $table) {
            $table->dropColumn(['slug', 'gambar', 'wifi_speed', 'luas', 'deskripsi_panjang']);
        });
    }
};
