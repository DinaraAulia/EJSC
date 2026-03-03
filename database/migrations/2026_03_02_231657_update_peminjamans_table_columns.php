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
            $table->string('no_hp_pj')->change();
            $table->text('fasilitas_tambahan')->nullable()->change();
            $table->time('jam_mulai')->nullable()->change();
            $table->time('jam_berakhir')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Reverting back the changes, assuming original types
        Schema::table('peminjamans', function (Blueprint $table) {
            $table->integer('no_hp_pj')->change();
            $table->string('fasilitas_tambahan', 100)->nullable()->change();
            $table->timestamp('jam_mulai')->nullable()->change();
            $table->timestamp('jam_berakhir')->nullable()->change();
        });
    }
};
