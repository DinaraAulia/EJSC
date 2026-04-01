@extends('layouts.app')

@section('title', 'Agenda & Event EJSC Bakorwil III Malang')
@section('description', 'Kalender agenda kegiatan dan event di East Java Super Corridor Bakorwil Malang')

@section('content')
<main class="bg-[#0a0f1c] min-h-screen pt-24 pb-16 font-sans relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-1/4 right-1/4 w-[30rem] h-[30rem] bg-[#F7AD12]/10 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-1/4 left-1/4 w-[25rem] h-[25rem] bg-cyan-500/10 rounded-full blur-[120px]"></div>
    </div>

    <!-- Enhanced Grid Pattern -->
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_0%,#000_80%,transparent_100%)] z-0 pointer-events-none"></div>

    <section class="max-w-7xl mx-auto px-4 md:px-6 relative z-10">
        {{-- Header Section --}}
        <div class="text-center mt-8 mb-12">
            <h1 class="text-3xl md:text-4xl font-black text-white mb-4" style="font-family: 'Poppins', sans-serif;">
                Plan of <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#F7AD12] to-yellow-300">Meetings & Events</span>
            </h1>
            <p class="text-gray-400 text-sm md:text-base max-w-2xl mx-auto leading-relaxed">
                Stay updated with the latest workshops, collaborations, and meetings scheduled at the East Java Super Corridor Bakorwil Malang.
            </p>
        </div>

        {{-- Calendar Card --}}
        <div class="bg-[#101524]/80 backdrop-blur-xl border border-white/10 rounded-3xl p-6 md:p-8 shadow-2xl">
            
            {{-- Calendar Header / Month Navigation --}}
            @php
                $prevMonth = $currentDate->copy()->subMonth();
                $nextMonth = $currentDate->copy()->addMonth();
            @endphp
            <div class="flex flex-col sm:flex-row items-center justify-between mb-8 gap-4 border-b border-white/5 pb-6">
                <div class="flex items-center gap-4">
                    <a href="{{ route('agenda.index', ['m' => $prevMonth->format('m'), 'y' => $prevMonth->format('Y')]) }}" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    </a>
                    <h2 class="text-2xl font-bold text-white capitalize w-48 text-center" style="font-family: 'Poppins', sans-serif;">
                        {{ $currentDate->format('F Y') }}
                    </h2>
                    <a href="{{ route('agenda.index', ['m' => $nextMonth->format('m'), 'y' => $nextMonth->format('Y')]) }}" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
                
                <a href="{{ route('agenda.index') }}" class="px-5 py-2.5 rounded-xl bg-[#F7AD12]/10 border border-[#F7AD12]/30 text-[#F7AD12] font-semibold text-sm hover:bg-[#F7AD12]/20 transition shadow-[0_0_15px_rgba(247,173,18,0.15)]">
                    Today
                </a>
            </div>

            {{-- Calendar Grid --}}
            <div class="w-full overflow-x-auto pb-4">
                <div class="min-w-[600px]">
                    {{-- Days Header --}}
                    <div class="grid grid-cols-7 gap-3 mb-3">
                        @foreach(['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'] as $dayName)
                            <div class="text-center font-bold text-gray-500 uppercase text-xs tracking-wider">{{ $dayName }}</div>
                        @endforeach
                    </div>

                    {{-- Days Grid --}}
                    <div class="grid grid-cols-7 gap-2 md:gap-3">
                        {{-- Padding days for previous month --}}
                        @for($i = 0; $i < $firstDayOfWeek; $i++)
                            <div class="h-20 md:h-24 rounded-xl bg-transparent border border-transparent p-1.5 opacity-50"></div>
                        @endfor

                        {{-- Actual Days --}}
                        @for($day = 1; $day <= $daysInMonth; $day++)
                            @php
                                $dateString = $currentDate->format('Y-m-').str_pad($day, 2, '0', STR_PAD_LEFT);
                                $hasAgenda = $agendas->has($dateString);
                                $dayAgendas = $hasAgenda ? $agendas[$dateString] : collect([]);
                                $isToday = $dateString === now()->format('Y-m-d');
                            @endphp

                            <div class="h-20 md:h-24 rounded-xl p-2 flex flex-col transition-all duration-300 relative group
                                {{ $isToday ? 'bg-[#123B7A]/30 border-2 border-[#71A2CF] shadow-[0_0_20px_rgba(113,162,207,0.2)]' : 'bg-white/5 border border-white/10 hover:border-white/30 hover:bg-white/10' }}">
                                
                                {{-- Date Number --}}
                                <div class="flex justify-between items-start mb-1">
                                    <span class="text-xs font-bold {{ $isToday ? 'text-white' : 'text-gray-300' }} {{ $isToday ? 'bg-[#71A2CF] text-[#020636] w-6 h-6 flex items-center justify-center rounded-full' : '' }}">
                                        {{ $day }}
                                    </span>
                                    @if($hasAgenda)
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#F7AD12] shadow-[0_0_8px_rgba(247,173,18,0.8)] mt-1"></span>
                                    @endif
                                </div>

                                {{-- Events List --}}
                                <div class="flex-grow overflow-y-auto space-y-1.5 pr-1 custom-scrollbar">
                                    @foreach($dayAgendas as $agenda)
                                        <div class="text-left w-full truncate">
                                            {{-- Event Badge --}}
                                            <div onclick="openAgendaModal({{ json_encode($agenda->nama_agenda) }}, {{ json_encode($agenda->detail_agenda ?? 'Deskripsi tidak tersedia') }}, '{{ \Carbon\Carbon::parse($agenda->tanggal)->format('d F Y') }}')" class="inline-block w-full px-1.5 py-1 rounded-md bg-gradient-to-r from-blue-900/40 to-transparent border-l-2 border-cyan-400 group-hover:from-blue-800/60 transition-colors cursor-pointer" title="{{ $agenda->nama_agenda }}">
                                                <p class="text-[9px] md:text-[10px] font-semibold text-cyan-50 truncate leading-tight">{{ $agenda->nama_agenda }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Event Detail Modal --}}
    <div id="agenda-modal" class="fixed inset-0 z-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-[#020636]/60 backdrop-blur-sm" onclick="closeAgendaModal()"></div>
        
        <!-- Modal Content -->
        <div class="relative w-[90%] md:w-[500px] bg-[#101524] border border-[#71A2CF]/30 rounded-2xl shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300" id="agenda-modal-content">
            <!-- Header Pattern -->
            <div class="h-2 w-full bg-gradient-to-r from-[#123B7A] via-[#71A2CF] to-[#F7AD12]"></div>
            
            <div class="p-6 md:p-8 relative">
                <!-- Close Btn -->
                <button onclick="closeAgendaModal()" class="absolute top-4 right-4 text-gray-400 hover:text-white bg-white/5 hover:bg-white/10 p-2 rounded-xl transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>

                <p id="modal-date" class="text-[#F7AD12] text-xs font-bold uppercase tracking-wider mb-2">DATE</p>
                <h3 id="modal-title" class="text-xl md:text-2xl font-bold text-white mb-4 leading-tight" style="font-family: 'Poppins', sans-serif;">Event Title</h3>
                
                <div class="bg-white/5 border border-white/5 rounded-xl p-4">
                    <p id="modal-desc" class="text-sm text-gray-300 leading-relaxed">Event Description</p>
                </div>

                <div class="mt-8 flex justify-end">
                    <button onclick="closeAgendaModal()" class="px-5 py-2 rounded-xl bg-white/10 hover:bg-white/20 text-white text-sm font-medium transition-colors border border-white/10">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    const modal = document.getElementById('agenda-modal');
    const modalContent = document.getElementById('agenda-modal-content');
    
    function openAgendaModal(title, desc, date) {
        document.getElementById('modal-title').innerText = title;
        document.getElementById('modal-desc').innerText = desc;
        document.getElementById('modal-date').innerText = date;
        
        // Show modal
        modal.classList.remove('opacity-0', 'pointer-events-none');
        modalContent.classList.remove('scale-95');
        modalContent.classList.add('scale-100');
        
        // Prevent body scroll
        document.body.style.overflow = 'hidden';
    }

    function closeAgendaModal() {
        // Hide modal
        modal.classList.add('opacity-0', 'pointer-events-none');
        modalContent.classList.remove('scale-100');
        modalContent.classList.add('scale-95');
        
        // Restore body scroll
        document.body.style.overflow = '';
    }
</script>

<style>
/* Custom Scrollbar for daily events inner div */
.custom-scrollbar::-webkit-scrollbar {
    width: 3px;
}
.custom-scrollbar::-webkit-scrollbar-track {
    background: transparent;
}
.custom-scrollbar::-webkit-scrollbar-thumb {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
}
</style>
@endsection
