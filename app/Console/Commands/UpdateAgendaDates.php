<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateAgendaDates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'agenda:update-dates';
    protected $description = 'Shift past agenda dates to the current month for demonstration purposes';

    public function handle()
    {
        $now = now();
        $agendas = \App\Models\Agenda::all();
        
        foreach ($agendas as $agenda) {
            $tanggal = \Carbon\Carbon::parse($agenda->tanggal);
            
            // Jika tanggal sudah lewat bulan ini atau di bulan sebelumnya
            if ($tanggal->isPast() && !$tanggal->isSameMonth($now)) {
                // Set ke bulan sekarang, pertahankan tanggal harinya (misal tgl 5 tetap tgl 5)
                // Jika tgl 31 dan bulan sekarang cuma ada 30 hari, Carbon otomatis handle ke hari terakhir bulan tersebut
                $newDate = $tanggal->copy()->month($now->month)->year($now->year);
                
                $agenda->update(['tanggal' => $newDate]);
                $this->info("Updated Agenda: {$agenda->nama_agenda} to {$newDate->toDateString()}");
            }
        }
        
        $this->info('Agenda dates updated successfully.');
    }
}
