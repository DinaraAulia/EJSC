<footer class="bg-[#020636] border-t border-[#123B7A]/20 mt-20">
    <div class="max-w-7xl mx-auto px-4 md:px-6 py-12 grid grid-cols-1 md:grid-cols-4 gap-8">

        {{-- Brand --}}
        <div class="md:col-span-2">
            <a href="{{ route('home') }}" class="flex items-center gap-2 mb-4 w-fit">
                <div class="w-9 h-9 bg-[#F7AD12] rounded-lg flex items-center justify-center">
                    <span class="text-[#01031C] font-black text-xs">EJSC</span>
                </div>
                <span class="font-bold text-white">EJSC Co-working Space</span>
            </a>
            <p class="text-gray-400 text-sm leading-relaxed max-w-xs">
                Ruang kerja modern yang dirancang untuk produktivitas optimal.<br>
                Bergabunglah bersama ribuan profesional setiap harinya.
            </p>
            {{-- Socials --}}
            <div class="flex items-center gap-3 mt-5">
                <a href="#" class="w-8 h-8 bg-[#123B7A]/30 border border-[#123B7A]/40 rounded-lg flex items-center justify-center text-gray-400 hover:text-[#F7AD12] hover:border-[#F7AD12]/40 transition-all">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="#" class="w-8 h-8 bg-[#123B7A]/30 border border-[#123B7A]/40 rounded-lg flex items-center justify-center text-gray-400 hover:text-[#F7AD12] hover:border-[#F7AD12]/40 transition-all">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
                <a href="mailto:info@ejsc.id" class="w-8 h-8 bg-[#123B7A]/30 border border-[#123B7A]/40 rounded-lg flex items-center justify-center text-gray-400 hover:text-[#F7AD12] hover:border-[#F7AD12]/40 transition-all">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </a>
            </div>
        </div>

        {{-- Navigasi --}}
        <div>
            <h4 class="text-[#F7AD12] font-semibold mb-4 text-xs uppercase tracking-widest">Navigasi</h4>
            <ul class="space-y-2.5">
                <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Home</a></li>
                <li><a href="{{ route('ruangan.index') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Ruangan</a></li>
                <li><a href="{{ route('fasilitas.index') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Fasilitas</a></li>
                <li><a href="{{ route('agenda.index') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Agenda</a></li>
                <li><a href="{{ route('peminjaman.create') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Peminjaman</a></li>
                <li><a href="{{ route('pengunjung.create') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Daftar Pengunjung</a></li>
            </ul>
        </div>

        {{-- Kontak --}}
        <div>
            <h4 class="text-[#F7AD12] font-semibold mb-4 text-xs uppercase tracking-widest">Kontak</h4>
            <ul class="space-y-3 text-sm text-gray-400">
                <li class="flex items-start gap-2.5">
                    <svg class="w-4 h-4 mt-0.5 shrink-0 text-[#71A2CF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span>Jl. Co-working No.1,<br>Kota Anda, Indonesia</span>
                </li>
                <li class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 shrink-0 text-[#71A2CF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <a href="mailto:info@ejsc.id" class="hover:text-white transition-colors">info@ejsc.id</a>
                </li>
                <li class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 shrink-0 text-[#71A2CF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Senin – Sabtu, 08:00 – 22:00</span>
                </li>
            </ul>
        </div>

    </div>

    {{-- Bottom Bar --}}
    <div class="border-t border-[#123B7A]/20 py-4">
        <div class="max-w-7xl mx-auto px-4 md:px-6 flex flex-col sm:flex-row items-center justify-between gap-2">
            <p class="text-gray-500 text-xs">© {{ date('Y') }} EJSC Co-working Space. All rights reserved.</p>
            <p class="text-gray-600 text-xs">Made with ❤️ for productivity</p>
        </div>
    </div>
</footer>
