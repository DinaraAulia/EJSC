<section class="py-16 md:py-24 max-w-7xl mx-auto px-4 md:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-start">
        
        {{-- Left Column: About EJSC --}}
        <div class="lg:col-span-5 space-y-6">
            <p class="text-[#71A2CF] text-xs uppercase tracking-widest font-semibold mb-2">Tentang Kami</p>
            <h2 class="text-3xl md:text-5xl font-black text-white leading-tight" style="font-family: 'Poppins', sans-serif;">
                Kenali <br/>
                <span class="text-[#F7AD12]">EJSC Bakorwil III Malang</span>
            </h2>
            <p class="text-gray-300 leading-relaxed text-sm md:text-base text-justify">
                East Java Super Corridor (EJSC) adalah wadah kolaborasi inovatif yang disediakan oleh Pemerintah Provinsi Jawa Timur untuk mendukung kreativitas, kewirausahaan, dan pengembangan keterampilan generasi muda. Kami menjadi pusat inkubasi ide-ide cemerlang, mempertemukan talenta lokal dengan fasilitas modern untuk mewujudkan visi besar mereka.
            </p>
            <div class="flex items-center gap-4 pt-4 border-t border-[#123B7A]/30">
                <div class="w-12 h-12 rounded-xl bg-[#F7AD12]/10 flex items-center justify-center border border-[#F7AD12]/30">
                    <svg class="w-6 h-6 text-[#F7AD12]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <div>
                    <h4 class="text-white font-bold font-poppins">Kolaborasi Terbuka</h4>
                    <p class="text-xs text-gray-400">Gratis untuk masyarakat umum</p>
                </div>
            </div>
        </div>

        {{-- Right Column: Facilities & Borrowing --}}
        <div class="lg:col-span-7 grid grid-cols-1 md:grid-cols-2 gap-6">
            
            {{-- Facilities Card --}}
            <div class="bg-[#123B7A]/10 border border-[#123B7A]/30 rounded-2xl p-6 md:p-8 backdrop-blur-sm hover:border-[#71A2CF]/50 transition-colors duration-300">
                <div class="w-12 h-12 rounded-xl bg-[#71A2CF]/10 flex items-center justify-center mb-6 border border-[#71A2CF]/30">
                    <svg class="w-6 h-6 text-[#71A2CF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4" style="font-family: 'Poppins', sans-serif;">Fasilitas Tersedia</h3>
                <ul class="space-y-3">
                    @foreach(['Internet Super Cepat (Wi-Fi 50Mbps)', 'Ruang Rapat & Co-Working', 'Area Kelas & Playhard', 'AC & Lingkungan Nyaman', 'Ruang Ibadah & Toilet Bersih'] as $facility)
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-sm text-gray-300">{{ $facility }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Borrowing Card --}}
            <div class="bg-[#F7AD12]/5 border border-[#F7AD12]/20 rounded-2xl p-6 md:p-8 backdrop-blur-sm hover:border-[#F7AD12]/50 transition-colors duration-300">
                <div class="w-12 h-12 rounded-xl bg-[#F7AD12]/10 flex items-center justify-center mb-6 border border-[#F7AD12]/30">
                    <svg class="w-6 h-6 text-[#F7AD12]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4" style="font-family: 'Poppins', sans-serif;">Layanan Peminjaman</h3>
                <p class="text-xs text-gray-400 mb-4">Dukung kegiatan event atau rapat Anda dengan meminjam peralatan kami secara gratis.</p>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Smart TV', 'Proyektor & Layar', 'Sound System', 'Kabel Roll', 'Papan Tulis (Whiteboard)', 'Meja & Kursi Tambahan'] as $item)
                    <span class="inline-flex items-center px-3 py-1.5 rounded-lg text-[11px] font-medium bg-[#123B7A]/20 text-gray-200 border border-[#123B7A]/30">
                        {{ $item }}
                    </span>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
