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
            $table->string('ruangan_id', 100)->nullable();
            $table->string('nama_kegiatan', 100)->nullable();
            $table->string('latar_belakang', 100)->nullable();
            $table->string('tujuan_kegiatan', 100)->nullable();
            $table->string('sasaran_peserta', 100)->nullable();
            $table->integer('jumlah_peserta')->nullable();
            $table->string('narasumber', 100)->nullable();
            $table->string('pj_kegiatan', 100)->nullable();
            $table->string('instansi', 100)->nullable();
            $table->string('alamat_instansi', 100)->nullable();
            $table->string('wilayah', 100)->nullable();
            $table->integer('no_hp_pj')->nullable();
            $table->string('fasilitas_tambahan', 100)->nullable();
            $table->date('tgl_penggunaan')->nullable();
            $table->timestamp('jam_mulai')->nullable();
            $table->timestamp('jam_berakhir')->nullable();
            $table->string('berkas_ktp', 100)->nullable();
            $table->string('berkas_surat', 100)->nullable();
            $table->string('berkas_poster', 100)->nullable();
            $table->boolean('status')->default(false);
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
