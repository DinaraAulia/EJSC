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
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->string('id_peminjaman', 100)->primary();
            $table->string('kategori_instansi', 100)->nullable();
            $table->string('ruangan_id', 100)->nullable();
            $table->string('instansi', 100)->nullable();
            $table->string('alamat_instansi', 255)->nullable();
            $table->string('nama_kegiatan', 100)->nullable();
            $table->integer('jumlah_peserta')->nullable();
            $table->string('pj_kegiatan', 100)->nullable();
            $table->string('no_hp_pj', 50)->nullable();
            $table->date('tgl_penggunaan')->nullable();
            $table->date('tgl_berakhir')->nullable();
            $table->time('jam_mulai')->nullable();
            $table->time('jam_berakhir')->nullable();
            $table->string('berkas_surat', 255)->nullable();
            $table->boolean('bersedia_ubah_jadwal')->default(false);
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamans');
    }
};
