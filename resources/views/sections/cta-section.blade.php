{{--
    SECTION: CTA (Call to Action)
    Variables yang diharapkan: (tidak ada, statis)
--}}
<section class="py-16 mx-4 md:mx-auto max-w-7xl">
    <div class="bg-gradient-to-br from-[#123B7A] to-[#020636] border border-[#71A2CF]/30 rounded-3xl p-10 md:p-16 text-center relative overflow-hidden">

        {{-- Background glows --}}
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 right-0 w-64 h-64 bg-[#F7AD12]/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-[#E3733D]/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative z-10">
            <p class="text-[#71A2CF] text-xs uppercase tracking-widest mb-3">Mulai Sekarang</p>
            <h2 class="text-3xl md:text-4xl font-black mb-4 text-white" style="font-family: 'Poppins', sans-serif;">
                Siap Tingkatkan<br>
                <span class="text-[#F7AD12]">Produktivitas Anda?</span>
            </h2>
            <p class="text-gray-300 text-sm md:text-base mb-8 max-w-md mx-auto leading-relaxed">
                Daftarkan diri sebagai pengunjung atau langsung booking ruangan favoritmu sekarang juga.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('peminjaman.create') }}"
                   class="bg-[#F7AD12] text-[#01031C] font-semibold px-8 py-3 rounded-full text-sm hover:brightness-110 transition-all shadow-xl shadow-[#F7AD12]/20 w-full sm:w-auto">
                    Book Ruangan Sekarang
                </a>
                <a href="{{ route('pengunjung.create') }}"
                   class="border border-[#71A2CF] text-[#71A2CF] font-semibold px-8 py-3 rounded-full text-sm hover:bg-[#71A2CF] hover:text-[#01031C] transition-all w-full sm:w-auto">
                    Daftar Pengunjung
                </a>
            </div>
        </div>

    </div>
</section>
