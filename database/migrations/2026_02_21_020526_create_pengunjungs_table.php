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
        Schema::create('pengunjungs', function (Blueprint $table) {
            $table->string('id_pengunjung', 100)->primary();
            $table->string('nama', 100)->nullable();
            $table->integer('usia')->nullable();
            $table->string('jenis_kelamin', 10)->nullable();
            $table->string('no_hp', 15)->nullable();
            $table->string('sosmed', 100)->nullable();
            $table->string('profesi', 100)->nullable();
            $table->string('domisili', 100)->nullable();
            $table->string('sumber_info', 100)->nullable();
            $table->string('keperluan', 100)->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengunjungs');
    }
};
