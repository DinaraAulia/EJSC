<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                'id_ruangan' => 'co-working-space',
                'nama_ruangan' => 'Co-Working Space',
                'deskripsi' => 'Used for workspaces, webinars, workshops, and training activities.',
                'kapasitas' => 30,
                'is_tersedia' => true,
                'tgl_diperbarui' => now(),
            ],
            [
                'id_ruangan' => 'command-center',
                'nama_ruangan' => 'Command Center',
                'deskripsi' => 'Command Center for monitoring and coordination purposes.',
                'kapasitas' => 15,
                'is_tersedia' => true,
                'tgl_diperbarui' => now(),
            ],
            [
                'id_ruangan' => 'meeting-room',
                'nama_ruangan' => 'Meeting Room',
                'deskripsi' => 'Meeting Room for private discussions, interviews, and team syncs.',
                'kapasitas' => 12,
                'is_tersedia' => true,
                'tgl_diperbarui' => now(),
            ],
            [
                'id_ruangan' => 'classroom-playhard',
                'nama_ruangan' => 'Classroom / Playhard',
                'deskripsi' => 'Classroom / Playhard area for large seminars and creative workshops.',
                'kapasitas' => 50,
                'is_tersedia' => true,
                'tgl_diperbarui' => now(),
            ]
        ];

        foreach ($rooms as $room) {
            \App\Models\Ruangan::updateOrCreate(
                ['id_ruangan' => $room['id_ruangan']],
                $room
            );
        }
    }
}
