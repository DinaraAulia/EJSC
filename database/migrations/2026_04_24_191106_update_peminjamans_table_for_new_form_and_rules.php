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
            if (!Schema::hasColumn('peminjamans', 'kategori_instansi')) {
                $table->string('kategori_instansi', 100)->nullable()->after('id_peminjaman');
            }
            if (!Schema::hasColumn('peminjamans', 'tgl_berakhir')) {
                $table->date('tgl_berakhir')->nullable()->after('tgl_penggunaan');
            }
            if (!Schema::hasColumn('peminjamans', 'bersedia_ubah_jadwal')) {
                $table->boolean('bersedia_ubah_jadwal')->default(false)->after('status');
            }
        });
    }

    public function down(): void
    {
        Schema::table('peminjamans', function (Blueprint $table) {
            $table->dropColumn(['kategori_instansi', 'tgl_berakhir', 'bersedia_ubah_jadwal']);
            $table->string('tujuan_kegiatan')->nullable();
            $table->text('latar_belakang')->nullable();
            $table->string('sasaran_peserta')->nullable();
            $table->string('narasumber')->nullable();
            $table->string('wilayah')->nullable();
            $table->json('fasilitas_tambahan')->nullable();
            $table->text('other_requirements')->nullable();
            $table->string('berkas_ktp')->nullable();
            $table->string('berkas_poster')->nullable();
        });
    }
};
