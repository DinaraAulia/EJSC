{{--
    SECTION: Info Cards
    Variables yang diharapkan: $agendas (Collection<Agenda>)
--}}
<section class="max-w-7xl mx-auto px-4 md:px-6 -mt-2 pb-12">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

        {{-- Card 1: Status Hari Ini --}}
        <div class="bg-[#020636] border border-[#123B7A]/40 rounded-2xl p-5 relative overflow-hidden">
            <div class="absolute top-3 right-3 flex gap-1.5">
                <span class="bg-gray-700 text-gray-300 text-xs px-2 py-0.5 rounded-full">Mo–Fr</span>
                <span class="bg-[#F7AD12] text-[#01031C] text-xs font-bold px-2 py-0.5 rounded-full">Open</span>
            </div>
            <div class="w-10 h-10 bg-[#123B7A]/40 rounded-xl flex items-center justify-center mb-4">
                <svg class="w-5 h-5 text-[#71A2CF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
            </div>
            <p class="text-gray-400 text-xs mb-1">Status Hari Ini</p>
            <p class="text-white font-bold text-lg leading-tight">Today We Are<br>Open</p>
            <p class="text-[#71A2CF] text-xs mt-2">08:00 – 22:00 WIB</p>
        </div>

        {{-- Card 2: Plan of Meeting / Agenda --}}
        <div class="bg-[#020636] border border-[#123B7A]/40 rounded-2xl p-5">
            <div class="flex items-center gap-2 mb-3">
                <div class="w-7 h-7 bg-[#F7AD12] rounded-lg flex items-center justify-center shrink-0">
                    <svg class="w-3.5 h-3.5 text-[#01031C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div>
                    <p class="text-white font-semibold text-sm leading-none">Plan of Meeting</p>
                    <p class="text-gray-400 text-xs">Agenda Mendatang</p>
                </div>
            </div>

            @forelse($agendas->take(2) as $agenda)
            <div class="border-b border-[#123B7A]/30 py-2 last:border-0">
                <p class="text-white text-xs font-medium truncate">{{ $agenda->nama_agenda }}</p>
                <p class="text-gray-500 text-xs">{{ \Carbon\Carbon::parse($agenda->tanggal)->isoFormat('D MMM YYYY') }}</p>
            </div>
            @empty
            <p class="text-gray-400 text-xs leading-relaxed">
                Belum ada agenda terjadwal. Silahkan cek kembali nanti.
            </p>
            <div class="mt-3 flex items-center justify-between">
                <span class="text-[#E3733D] text-xs font-medium">Upcoming Event</span>
                <span class="text-[#F7AD12] text-xs">13-01-2026</span>
            </div>
            @endforelse

            <a href="{{ route('agenda.index') }}"
               class="mt-3 text-xs text-[#71A2CF] hover:text-[#F7AD12] transition-colors inline-flex items-center gap-1">
                Lihat semua
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>

        {{-- Card 3: Visitor Stats --}}
        <div class="bg-[#020636] border border-[#123B7A]/40 rounded-2xl p-5">
            <div class="flex items-center justify-between mb-4">
                <p class="text-white font-semibold text-sm">1150+ monthly<br>visitors</p>
                <a href="{{ route('pengunjung.create') }}"
                   class="bg-[#F7AD12] text-[#01031C] font-semibold px-3 py-1.5 rounded-full text-xs hover:brightness-110 transition-all flex items-center gap-1">
                    EXPLORE
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>

            {{-- Avatar stack --}}
            <div class="flex items-center -space-x-2 mb-4">
                @foreach(range(1,5) as $i)
                <div class="w-7 h-7 rounded-full border-2 border-[#020636] bg-[#123B7A] flex items-center justify-center text-xs font-bold text-white">
                    {{ $i }}
                </div>
                @endforeach
                <div class="w-7 h-7 rounded-full border-2 border-[#020636] bg-[#E3733D] flex items-center justify-center text-xs font-bold text-white">+</div>
            </div>

            {{-- Mini stats --}}
            <div class="grid grid-cols-3 gap-2">
                <div class="bg-[#123B7A]/30 rounded-lg p-2 text-center">
                    <svg class="w-4 h-4 text-[#F7AD12] mx-auto mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    <p class="text-white text-xs font-bold">Growth</p>
                </div>
                <div class="bg-[#F7AD12]/10 rounded-lg p-2 text-center">
                    <p class="text-[#F7AD12] text-xl font-black leading-none">25</p>
                    <p class="text-gray-400 text-xs">Today</p>
                </div>
                <div class="bg-[#E3733D]/10 rounded-lg p-2 text-center">
                    <p class="text-[#E3733D] text-xs font-bold leading-tight">13–01<br>2026</p>
                    <p class="text-gray-400 text-xs">Date</p>
                </div>
            </div>
        </div>

    </div>
</section>
