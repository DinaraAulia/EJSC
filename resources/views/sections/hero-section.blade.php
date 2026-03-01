<section class="min-h-screen relative overflow-hidden bg-[#01031C] pb-16">

    {{-- Background glow --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-[#123B7A]/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-64 h-64 bg-[#F7AD12]/5 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 pt-22 md:max-w-7xl px-6 pt-15">

        {{-- === HERO CONTENT === --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center min-h-[55vh]">

            {{-- LEFT: Headline --}}
            <div class="relative z-10">
                <div class="inline-flex items-center gap-2 bg-[#123B7A]/30 border border-[#123B7A]/40 rounded-full px-3 py-1.5 mb-5">
                    <span class="w-2 h-2 bg-[#F7AD12] rounded-full animate-pulse"></span>
                    <span class="text-xs text-[#71A2CF] font-medium">Best Co-working Space</span>
                </div>

                <h1 class="text-3xl md:text-4xl lg:text-5xl font-black uppercase leading-tight tracking-tight mb-4"
                    style="font-family: 'Poppins', sans-serif;">
                    ELEVATE YOUR
                    <span class="block text-white">WORKSPACE</span>
                    <span class="block mt-1">
                        WITH
                        <span class="relative inline-block text-white">
                            COWORK
                            <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 200 12" fill="none">
                                <path d="M2 9C50 3 150 3 198 9" stroke="#E3733D" stroke-width="3.5" stroke-linecap="round"/>
                            </svg>
                        </span>
                    </span>
                </h1>

                <p class="text-gray-400 text-sm leading-relaxed max-w-md mb-5">
                    Find the ideal workspace that boosts productivity. Join more than
                    <span class="text-white font-semibold">1,150 professionals</span> every month.
                </p>

                <div class="flex flex-wrap items-center gap-4">
                    <a href="{{ route('peminjaman.create') }}"
                       class="bg-[#F7AD12] text-[#01031C] font-semibold px-6 py-3 rounded-full text-sm hover:brightness-110 transition-all shadow-lg shadow-[#F7AD12]/20">
                        Book Now
                    </a>
                    <a href="{{ route('ruangan.index') }}"
                       class="border border-[#71A2CF] text-[#71A2CF] font-semibold px-6 py-3 rounded-full text-sm hover:bg-[#71A2CF] hover:text-[#01031C] transition-all">
                        View Rooms
                    </a>
                </div>
            </div>

            {{-- RIGHT: Image + Floating Card --}}
            <div class="relative">
                <div class="relative rounded-2xl overflow-hidden h-64 md:h-[380px]">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80"
                         alt="EJSC Co-working Space"
                         class="w-full h-full object-cover"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#01031C]/60 via-transparent to-transparent"></div>
                </div>

                {{-- Floating Stats Card --}}
                <div class="absolute -bottom-4 -left-4 bg-[#020636] border border-[#123B7A]/40 rounded-xl p-3 shadow-xl">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-[#123B7A] rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 text-[#F7AD12]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[#F7AD12] font-bold text-sm leading-none">1150+</p>
                            <p class="text-gray-400 text-xs">Monthly Visitors</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- === INFO CARDS (di dalam hero, di bawah konten utama) === --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-8 relative z-10">

            {{-- Card 1: Status Hari Ini --}}
            <div class="bg-[#020636] border border-[#123B7A]/40 rounded-2xl p-5 relative overflow-hidden">
                <div class="absolute top-3 right-3 flex gap-1.5">
                    <span class="bg-gray-700 text-gray-300 text-xs px-2 py-0.5 rounded-full">Mo-Fr</span>
                    <span class="bg-[#F7AD12] text-[#01031C] text-xs font-bold px-2 py-0.5 rounded-full">Open</span>
                </div>
                <div class="w-10 h-10 bg-[#123B7A]/40 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-[#71A2CF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <p class="text-gray-400 text-xs mb-1">Today's Status</p>
                <p class="text-white font-bold text-lg leading-tight">We Are Open</p>
                <p class="text-[#71A2CF] text-xs mt-2">08:00 - 15:00 WIB</p>
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
                    </div>
                </div>

                @forelse($agendas->take(2) as $agenda)
                <div class="border-b border-[#123B7A]/30 py-2 last:border-0">
                    <p class="text-white text-xs font-medium truncate">{{ $agenda->nama_agenda }}</p>
                    <p class="text-gray-500 text-xs">{{ \Carbon\Carbon::parse($agenda->tanggal)->isoFormat('D MMM YYYY') }}</p>
                </div>
                @empty
                <p class="text-gray-400 text-xs leading-relaxed">
                    No scheduled agenda yet. Please check back later.
                </p>
                <div class="mt-3 flex items-center justify-between">
                    <span class="text-[#E3733D] text-xs font-medium">Upcoming Event</span>
                    <span class="text-[#F7AD12] text-xs">13-01-2026</span>
                </div>
                @endforelse

                <a href="{{ route('agenda.index') }}"
                   class="mt-3 text-xs text-[#71A2CF] hover:text-[#F7AD12] transition-colors inline-flex items-center gap-1">
                    View All
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            {{-- Card 3: Visitor Stats --}}
            <div class="bg-[#020636] border border-[#123B7A]/40 rounded-2xl p-5">
                <div class="flex items-center justify-between mb-4">
                    <p class="text-white font-semibold text-sm">Statistic Visitors</p>
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
                <div class="grid grid-cols-2 gap-2">
                    <div class="bg-[#F7AD12]/10 rounded-lg p-2 text-center">
                        <p class="text-[#F7AD12] text-l font-black leading-none">25</p>
                        <p class="text-gray-400 text-xs">Today</p>
                    </div>
                    <div class="bg-[#E3733D]/10 rounded-lg p-2 text-center">
                        <p class="text-[#E3733D] text-xs font-bold leading-tight">{{ now()->format('d M Y') }}</p>
                        <p class="text-gray-400 text-xs">Date</p>
                    </div>
                </div>
            </div>

        </div>
        {{-- === END INFO CARDS === --}}

    </div>
</section>
