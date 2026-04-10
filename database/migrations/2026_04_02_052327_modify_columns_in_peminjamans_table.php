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
        Schema::table('peminjamans', function (Blueprint $table) {
            $table->string('status')->default('pending')->change();
            $table->string('no_hp_pj')->change();
            $table->text('fasilitas_tambahan')->nullable()->change();
            $table->time('jam_mulai')->nullable()->change();
            $table->time('jam_berakhir')->nullable()->change();
            // Extend file paths to avoid truncation
            $table->string('berkas_ktp', 255)->change();
            $table->string('berkas_surat', 255)->change();
            $table->string('berkas_poster', 255)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('peminjamans', function (Blueprint $table) {
            $table->boolean('status')->default(false)->change();
            // Reverting other changes would need careful consideration of data types
        });
    }
};
