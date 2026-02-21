{{-- Navbar --}}
<nav class="fixed top-0 left-0 right-0 z-50 bg-[#01031C]/90 backdrop-blur-md">
    <div class="max-w-7xl mx-auto px-4 md:px-8 py-3 flex items-center justify-between">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="{{ asset('images/LogoEJSC.png') }}" alt="EJSC Logo" class="h-14 w-auto object-contain">
        </a>

        {{-- Desktop Nav --}}
        <div class="hidden md:flex items-center gap-8">
            <a href="{{ route('home') }}"
               class="text-l font-medium transition-colors {{ request()->routeIs('home') ? 'text-[#F7AD12]' : 'text-gray-300 hover:text-white' }}">
                Home
            </a>

            {{-- Workspace Dropdown --}}
            <div class="relative group">
                <button class="text-gray-300 hover:text-white text-l font-medium transition-colors flex items-center gap-1">
                    Workspace
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="absolute top-full left-0 mt-2 w-44 bg-[#01031C]/90 backdrop-blur-md rounded-xl py-2
                            opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all shadow-xl">
                    <a href="{{ route('ruangan.index') }}"
                       class="block px-4 py-2 text-l text-gray-300 hover:text-[#F7AD12] hover:bg-white/5 transition-colors">
                        Ruangan
                    </a>
                    <a href="{{ route('fasilitas.index') }}"
                       class="block px-4 py-2 text-l text-gray-300 hover:text-[#F7AD12] hover:bg-white/5 transition-colors">
                        Fasilitas
                    </a>
                </div>
            </div>

            <a href="{{ route('agenda.index') }}"
               class="text-l font-medium transition-colors {{ request()->routeIs('agenda.*') ? 'text-[#F7AD12]' : 'text-gray-300 hover:text-white' }}">
                Agenda
            </a>

            <a href="{{ route('peminjaman.create') }}"
               class="bg-[#F7AD12] text-[#01031C] font-semibold px-5 py-2 rounded-full text-l hover:brightness-110 transition-all shadow-lg shadow-[#F7AD12]/20">
                Book Now
            </a>
        </div>

        {{-- Right Icons --}}
        <div class="flex items-center gap-1">
            {{-- Instagram --}}
            <a href="https://instagram.com" target="_blank"
               class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center text-gray-300 hover:text-white hover:bg-white/20 transition-all hidden sm:flex">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>

            {{-- YouTube --}}
            <a href="https://youtube.com" target="_blank"
               class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center text-gray-300 hover:text-white hover:bg-white/20 transition-all hidden sm:flex">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                </svg>
            </a>

            {{-- Email --}}
            <a href="mailto:info@ejsc.id"
               class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center text-gray-300 hover:text-white hover:bg-white/20 transition-all hidden sm:flex">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </a>

            {{-- Mobile Hamburger --}}
            <button id="mobile-menu-btn"
                    class="md:hidden w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center text-gray-300 hover:text-white transition-colors"
                    aria-label="Menu">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

    </div>
</nav>

{{-- Mobile Menu --}}
<div id="mobile-menu"
     class="fixed top-[68px] left-0 right-0 z-40 hidden md:hidden bg-[#01031C]/80 backdrop-blur-xl
            border-t border-white/5 px-4 py-4 space-y-1 shadow-2xl">
    <a href="{{ route('home') }}"
       class="flex items-center gap-2 text-[#F7AD12] text-sm font-semibold py-2.5 px-3 rounded-xl bg-white/5">
        Home
    </a>
    <a href="{{ route('ruangan.index') }}"
       class="flex items-center gap-2 text-gray-300 hover:text-white text-sm py-2.5 px-3 rounded-xl hover:bg-white/5 transition-colors">
        Ruangan
    </a>
    <a href="{{ route('fasilitas.index') }}"
       class="flex items-center gap-2 text-gray-300 hover:text-white text-sm py-2.5 px-3 rounded-xl hover:bg-white/5 transition-colors">
        Fasilitas
    </a>
    <a href="{{ route('agenda.index') }}"
       class="flex items-center gap-2 text-gray-300 hover:text-white text-sm py-2.5 px-3 rounded-xl hover:bg-white/5 transition-colors">
        Agenda
    </a>
    <div class="pt-2">
        <a href="{{ route('peminjaman.create') }}"
           class="block text-center bg-[#F7AD12] text-[#01031C] font-semibold px-5 py-2.5 rounded-full text-sm hover:brightness-110 transition-all">
            Book Now
        </a>
    </div>
</div>

@push('scripts')
<script>
    const btn  = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn?.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    // Tutup menu saat klik di luar
    document.addEventListener('click', (e) => {
        if (!btn.contains(e.target) && !menu.contains(e.target)) {
            menu.classList.add('hidden');
        }
    });
</script>
@endpush