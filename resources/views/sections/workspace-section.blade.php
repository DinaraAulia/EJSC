<section class="py-16 max-w-7xl mx-auto px-4 md:px-6">
    {{-- Header --}}
    <div class="flex items-end justify-between mb-10">
        <div>
            <p class="text-[#71A2CF] text-xs uppercase tracking-widest mb-2">Pilihan Ruangan</p>
            <h2 class="text-2xl md:text-4xl font-black text-white leading-tight" style="font-family: 'Poppins', sans-serif;">
                Explore <span class="text-[#F7AD12]">Space</span>
            </h2>
        </div>
        <a href="#" class="hidden md:flex items-center gap-2 text-white font-semibold text-sm hover:text-[#F7AD12] transition-colors group">
            See More
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-white/30 group-hover:border-[#F7AD12] group-hover:bg-[#F7AD12]/10 transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </span>
        </a>
    </div>

    {{-- Cards Grid --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

        {{-- Card 1: Co-Working Space --}}
        <div class="group cursor-pointer">
            <div class="relative rounded-2xl overflow-hidden h-96 md:h-[420px]">
                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=600&q=80"
                     alt="Co-Working Space"
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                {{-- Gradient overlay --}}
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-black/20"></div>
                {{-- Badge row (top) --}}
                <div class="absolute top-3 left-3 right-3 flex flex-wrap gap-1.5">
                    <span class="flex items-center gap-1 bg-white/90 backdrop-blur-sm text-gray-800 text-[10px] font-semibold px-2.5 py-1 rounded-full shadow">
                        <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.14 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                        </svg>
                        50 Mbps
                    </span>
                    <span class="flex items-center gap-1 bg-white/90 backdrop-blur-sm text-gray-800 text-[10px] font-semibold px-2.5 py-1 rounded-full shadow">
                        <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        30 Seat
                    </span>
                    <span class="flex items-center gap-1 bg-white/90 backdrop-blur-sm text-gray-800 text-[10px] font-semibold px-2.5 py-1 rounded-full shadow">
                        <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
                        </svg>
                        80 m²
                    </span>
                </div>
                {{-- Bottom: Name + Arrow --}}
                <div class="absolute bottom-0 left-0 right-0 p-4 flex items-end justify-between">
                    <h3 class="text-white font-black text-sm uppercase leading-tight tracking-wide" style="font-family: 'Poppins', sans-serif;">
                        Co-Working<br>Space
                    </h3>
                    <div class="flex-shrink-0 w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center group-hover:bg-white/30 transition-colors">
                        <svg class="w-4 h-4 text-gray-300 -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 2: Command Center --}}
        <div class="group cursor-pointer">
            <div class="relative rounded-2xl overflow-hidden h-96 md:h-[420px]">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600&q=80"
                     alt="Command Center"
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-black/20"></div>
                <div class="absolute top-3 left-3 right-3 flex flex-wrap gap-1.5">
                    <span class="flex items-center gap-1 bg-white/90 backdrop-blur-sm text-gray-800 text-[10px] font-semibold px-2.5 py-1 rounded-full shadow">
                        <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.14 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                        </svg>
                        50 Mbps
                    </span>
                    <span class="flex items-center gap-1 bg-white/90 backdrop-blur-sm text-gray-800 text-[10px] font-semibold px-2.5 py-1 rounded-full shadow">
                        <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        15 Seat
                    </span>
                    <span class="flex items-center gap-1 bg-white/90 backdrop-blur-sm text-gray-800 text-[10px] font-semibold px-2.5 py-1 rounded-full shadow">
                        <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
                        </svg>
                        40 m²
                    </span>
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-4 flex items-end justify-between">
                    <h3 class="text-white font-black text-sm uppercase leading-tight tracking-wide" style="font-family: 'Poppins', sans-serif;">
                        Command<br>Center
                    </h3>
                    <div class="flex-shrink-0 w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center group-hover:bg-white/30 transition-colors">
                        <svg class="w-4 h-4 text-gray-300 -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 3: Meeting Room --}}
        <div class="group cursor-pointer">
            <div class="relative rounded-2xl overflow-hidden h-96 md:h-[420px]">
                <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?w=600&q=80"
                     alt="Meeting Room"
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-black/20"></div>
                <div class="absolute top-3 left-3 right-3 flex flex-wrap gap-1.5">
                    <span class="flex items-center gap-1 bg-white/90 backdrop-blur-sm text-gray-800 text-[10px] font-semibold px-2.5 py-1 rounded-full shadow">
                        <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.14 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                        </svg>
                        50 Mbps
                    </span>
                    <span class="flex items-center gap-1 bg-white/90 backdrop-blur-sm text-gray-800 text-[10px] font-semibold px-2.5 py-1 rounded-full shadow">
                        <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        12 Seat
                    </span>
                    <span class="flex items-center gap-1 bg-white/90 backdrop-blur-sm text-gray-800 text-[10px] font-semibold px-2.5 py-1 rounded-full shadow">
                        <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
                        </svg>
                        30 m²
                    </span>
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-4 flex items-end justify-between">
                    <h3 class="text-white font-black text-sm uppercase leading-tight tracking-wide" style="font-family: 'Poppins', sans-serif;">
                        Meeting<br>Room
                    </h3>
                    <div class="flex-shrink-0 w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center group-hover:bg-white/30 transition-colors">
                        <svg class="w-4 h-4 text-gray-300 -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 4: Classroom / Playhard --}}
        <div class="group cursor-pointer">
            <div class="relative rounded-2xl overflow-hidden h-96 md:h-[420px]">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&q=80"
                     alt="Classroom / Playhard"
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-black/20"></div>
                <div class="absolute top-3 left-3 right-3 flex flex-wrap gap-1.5">
                    <span class="flex items-center gap-1 bg-white/90 backdrop-blur-sm text-gray-800 text-[10px] font-semibold px-2.5 py-1 rounded-full shadow">
                        <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.14 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                        </svg>
                        50 Mbps
                    </span>
                    <span class="flex items-center gap-1 bg-white/90 backdrop-blur-sm text-gray-800 text-[10px] font-semibold px-2.5 py-1 rounded-full shadow">
                        <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        50 Seat
                    </span>
                    <span class="flex items-center gap-1 bg-white/90 backdrop-blur-sm text-gray-800 text-[10px] font-semibold px-2.5 py-1 rounded-full shadow">
                        <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
                        </svg>
                        120 m²
                    </span>
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-4 flex items-end justify-between">
                    <h3 class="text-white font-black text-sm uppercase leading-tight tracking-wide" style="font-family: 'Poppins', sans-serif;">
                        Classroom /<br>Playhard
                    </h3>
                    <div class="flex-shrink-0 w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center group-hover:bg-white/30 transition-colors">
                        <svg class="w-4 h-4 text-gray-300 -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
