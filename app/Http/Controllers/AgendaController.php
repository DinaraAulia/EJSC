<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        $month = $request->get('m', date('m'));
        $year = $request->get('y', date('Y'));
        
        // Cek format, kalau ngga valid kembalikan ke bulan ini
        try {
            $currentDate = \Carbon\Carbon::createFromDate($year, $month, 1);
        } catch (\Exception $e) {
            $currentDate = \Carbon\Carbon::now()->startOfMonth();
            $month = $currentDate->format('m');
            $year = $currentDate->format('Y');
        }

        $daysInMonth = $currentDate->daysInMonth;
        
        // 0 (Minggu) sampai 6 (Sabtu) -> Jika ingin mulai dari senin jadikan 1
        $firstDayOfWeek = $currentDate->copy()->firstOfMonth()->dayOfWeek; 
        
        // Ambil agenda bulan ini, group by tanggal (Y-m-d)
        $agendas = Agenda::whereMonth('tanggal', $month)
            ->whereYear('tanggal', $year)
            ->orderBy('tanggal')
            ->get()
            ->groupBy(function($item) {
                return \Carbon\Carbon::parse($item->tanggal)->format('Y-m-d');
            });

        return view('agenda.index', compact('agendas', 'currentDate', 'daysInMonth', 'firstDayOfWeek'));
    }
}
