<section class="py-16 max-w-7xl mx-auto px-4 md:px-6">
    {{-- Header --}}
    <div class="flex items-end justify-between mb-10">
        <div>
            <p class="text-[#71A2CF] text-xs uppercase tracking-widest font-bold mb-2">Space Options</p>
            <h2 class="text-2xl md:text-4xl font-black text-white leading-tight" style="font-family: 'Poppins', sans-serif;">
                Explore <span class="text-[#F7AD12]">Space</span>
            </h2>
        </div>
    </div>

    {{-- Cards Grid --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

        {{-- Card 1: Co-Working Space --}}
        <a href="{{ route('workspace.show', 'co-working-space') }}" class="group block cursor-pointer">
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
                        30 Seats
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
        </a>

        {{-- Card 2: Command Center --}}
        <a href="{{ route('workspace.show', 'command-center') }}" class="group block cursor-pointer">
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
                        15 Seats
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
        </a>

        {{-- Card 3: Meeting Room --}}
        <a href="{{ route('workspace.show', 'meeting-room') }}" class="group block cursor-pointer">
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
                        12 Seats
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
        </a>

        {{-- Card 4: Classroom / Playhard --}}
        <a href="{{ route('workspace.show', 'classroom-playhard') }}" class="group block cursor-pointer">
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
                        50 Seats
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
        </a>

    </div>

</section>
