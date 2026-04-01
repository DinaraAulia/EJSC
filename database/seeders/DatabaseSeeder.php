<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin EJSC',
                'password' => bcrypt('password'),
            ]
        );

        $dummyAgendas = [
            [
                'id_agenda' => 'AG-001',
                'nama_agenda' => 'Workshop Digital Marketing',
                'tanggal' => now()->startOfMonth()->addDays(2)->format('Y-m-d'),
                'detail_agenda' => 'Pelatihan mempromosikan produk UMKM melalui Instagram dan TikTok Ads bersama praktisi.',
                'berkas' => null,
            ],
            [
                'id_agenda' => 'AG-002',
                'nama_agenda' => 'Community Meetup & Networking',
                'tanggal' => now()->startOfMonth()->addDays(5)->format('Y-m-d'),
                'detail_agenda' => 'Kumpul komunitas desainer grafis dan programmer wilayah Malang Raya untuk saling berdiskusi.',
                'berkas' => null,
            ],
             [
                'id_agenda' => 'AG-003',
                'nama_agenda' => 'Kurasi Produk UMKM',
                'tanggal' => now()->startOfMonth()->addDays(5)->format('Y-m-d'),
                'detail_agenda' => 'Sesi kurasi bulanan untuk produk makanan dan kerajinan UMKM yang akan didaftarkan ke platform EJSC.',
                'berkas' => null,
            ],
            [
                'id_agenda' => 'AG-004',
                'nama_agenda' => 'Seminar Legalitas Bisnis',
                'tanggal' => now()->startOfMonth()->addDays(14)->format('Y-m-d'),
                'detail_agenda' => 'Pemahaman mengenai pembuatan NIB, PIRT, dan sertifikasi Halal untuk teman-teman pengusaha muda.',
                'berkas' => null,
            ],
            [
                'id_agenda' => 'AG-005',
                'nama_agenda' => 'Pendaftaran Inkubasi Startup',
                'tanggal' => now()->startOfMonth()->addMonth()->addDays(10)->format('Y-m-d'),
                'detail_agenda' => 'Pembukaan pendaftaran untuk program inkubasi startup digital batch 3.',
                'berkas' => null,
            ],
            [
                'id_agenda' => 'AG-006',
                'nama_agenda' => 'Demo Day & Investor Meet',
                'tanggal' => now()->startOfMonth()->addMonth()->addDays(20)->format('Y-m-d'),
                'detail_agenda' => 'Demo day startup lulusan inkubasi bertemu dengan para investor nasional.',
                'berkas' => null,
            ],
        ];

        foreach ($dummyAgendas as $item) {
            \App\Models\Agenda::updateOrCreate(
                ['id_agenda' => $item['id_agenda']],
                $item
            );
        }
    }
}
