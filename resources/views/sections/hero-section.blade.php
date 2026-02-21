<section class="min-h-screen pt-20 relative overflow-hidden bg-[#01031C]">

    {{-- Background glow --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-[#123B7A]/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-64 h-64 bg-[#F7AD12]/5 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 md:px-6 pt-8 pb-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center min-h-[calc(100vh-5rem)]">

            {{-- LEFT: Headline --}}
            <div class="relative z-10">
                <div class="inline-flex items-center gap-2 bg-[#123B7A]/30 border border-[#123B7A]/40 rounded-full px-3 py-1.5 mb-6">
                    <span class="w-2 h-2 bg-[#F7AD12] rounded-full animate-pulse"></span>
                    <span class="text-xs text-[#71A2CF] font-medium">Co-working Space Terbaik</span>
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black uppercase leading-tight tracking-tight mb-4"
                    style="font-family: 'Poppins', sans-serif;">
                    ELEVATE YOUR
                    <span class="block text-white">WORKSPACE</span>
                    <span class="block mt-1">
                        WITH
                        <span class="relative inline-block text-[#F7AD12]">
                            COWORK
                            <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 200 12" fill="none">
                                <path d="M2 9C50 3 150 3 198 9" stroke="#E3733D" stroke-width="3.5" stroke-linecap="round"/>
                            </svg>
                        </span>
                    </span>
                </h1>

                <p class="text-gray-400 text-sm md:text-base leading-relaxed max-w-md mb-8">
                    Temukan ruang kerja ideal yang mendorong produktivitas. Bergabunglah bersama lebih dari
                    <span class="text-[#F7AD12] font-semibold">1.150 profesional</span> setiap bulannya.
                </p>

                <div class="flex flex-wrap items-center gap-4">
                    <a href="{{ route('peminjaman.create') }}"
                       class="bg-[#F7AD12] text-[#01031C] font-semibold px-6 py-3 rounded-full text-sm hover:brightness-110 transition-all shadow-lg shadow-[#F7AD12]/20">
                        Book Sekarang
                    </a>
                    <a href="{{ route('ruangan.index') }}"
                       class="border border-[#71A2CF] text-[#71A2CF] font-semibold px-6 py-3 rounded-full text-sm hover:bg-[#71A2CF] hover:text-[#01031C] transition-all">
                        Lihat Ruangan
                    </a>
                </div>
            </div>

            {{-- RIGHT: Image + Floating Card --}}
            <div class="relative">
                <div class="relative rounded-2xl overflow-hidden h-64 md:h-[420px]">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80"
                         alt="EJSC Co-working Space"
                         class="w-full h-full object-cover"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#01031C]/60 via-transparent to-transparent"></div>
                    <div class="absolute top-4 right-4 bg-[#F7AD12] text-[#01031C] text-xs font-bold px-3 py-1.5 rounded-full">
                        OPEN TODAY
                    </div>
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
    </div>
</section>
