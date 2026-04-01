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
               class="nav-scroll-link text-l font-medium transition-colors {{ request()->routeIs('home') ? 'text-[#F7AD12]' : 'text-gray-300 hover:text-white' }}">
                Home
            </a>

            <a href="{{ url('/#about') }}"
               class="nav-scroll-link text-l font-medium text-gray-300 hover:text-white transition-colors">
                About
            </a>

            {{-- Workspace Dropdown --}}
            <div class="relative group">
                <button class="text-gray-300 hover:text-white text-l font-medium transition-colors flex items-center gap-1">
                    Workspace
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="absolute top-full left-0 mt-2 w-52 bg-[#01031C]/90 backdrop-blur-md rounded-xl py-2
                            opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all shadow-xl">
                    <a href="{{ route('workspace.show', 'co-working-space') }}"
                       class="block px-4 py-2 text-l text-gray-300 hover:text-[#F7AD12] hover:bg-white/5 transition-colors">
                        Co-Working Space
                    </a>
                    <a href="{{ route('workspace.show', 'command-center') }}"
                       class="block px-4 py-2 text-l text-gray-300 hover:text-[#F7AD12] hover:bg-white/5 transition-colors">
                        Command Center
                    </a>
                    <a href="{{ route('workspace.show', 'meeting-room') }}"
                       class="block px-4 py-2 text-l text-gray-300 hover:text-[#F7AD12] hover:bg-white/5 transition-colors">
                        Meeting Room
                    </a>
                    <a href="{{ route('workspace.show', 'classroom-playhard') }}"
                       class="block px-4 py-2 text-l text-gray-300 hover:text-[#F7AD12] hover:bg-white/5 transition-colors">
                        Classroom / Playhard
                    </a>
                </div>
            </div>

            {{-- Ecosystem Dropdown --}}
            <div class="relative group">
                <button class="{{ request()->routeIs('talenta') || request()->routeIs('umkm') || request()->routeIs('achievement') ? 'text-[#F7AD12]' : 'text-gray-300 hover:text-white' }} text-l font-medium transition-colors flex items-center gap-1">
                    Ecosystem
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="absolute top-full left-0 mt-2 w-48 bg-[#01031C]/90 backdrop-blur-md rounded-xl py-2
                            opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all shadow-xl">
                    <a href="{{ route('talenta') }}"
                       class="block px-4 py-2 text-l {{ request()->routeIs('talenta') ? 'text-[#F7AD12] font-semibold bg-white/5' : 'text-gray-300' }} hover:text-[#F7AD12] hover:bg-white/5 transition-colors">
                        Talent
                    </a>
                    <a href="{{ route('umkm') }}"
                       class="block px-4 py-2 text-l {{ request()->routeIs('umkm') ? 'text-[#F7AD12] font-semibold bg-white/5' : 'text-gray-300' }} hover:text-[#F7AD12] hover:bg-white/5 transition-colors">
                        Partner SMEs
                    </a>
                    <a href="{{ route('achievement') }}"
                       class="block px-4 py-2 text-l {{ request()->routeIs('achievement') ? 'text-[#F7AD12] font-semibold bg-white/5' : 'text-gray-300' }} hover:text-[#F7AD12] hover:bg-white/5 transition-colors">
                        Achievement
                    </a>
                </div>
            </div>


            <a href="{{ url('/#gallery') }}"
               class="nav-scroll-link text-l font-medium text-gray-300 hover:text-white transition-colors">
                Gallery
            </a>

            <a href="{{ url('/#review') }}"
               class="nav-scroll-link text-l font-medium text-gray-300 hover:text-white transition-colors">
                Review
            </a>

            <a href="{{ url('/#team') }}"
               class="nav-scroll-link text-l font-medium text-gray-300 hover:text-white transition-colors">
                Team
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
            border-t border-white/5 px-4 py-4 space-y-1 shadow-2xl overflow-y-auto max-h-[calc(100vh-68px)]">
    <a href="{{ route('home') }}"
       class="nav-scroll-link flex items-center gap-2 text-[#F7AD12] text-sm font-semibold py-2.5 px-3 rounded-xl bg-white/5 hover:bg-white/5 transition-colors">
        Home
    </a>
    <a href="{{ url('/#about') }}"
       class="nav-scroll-link flex items-center gap-2 text-gray-300 hover:text-white text-sm py-2.5 px-3 rounded-xl hover:bg-white/5 transition-colors">
        About
    </a>

    {{-- Workspace Group --}}
    <div class="py-2.5 px-3">
        <p class="text-xs text-gray-500 uppercase tracking-widest font-bold mb-2">Workspace</p>
        <div class="flex flex-col space-y-1 pl-2 border-l-2 border-[#123B7A]/30">
            <a href="{{ route('workspace.show', 'co-working-space') }}"
               class="text-gray-400 hover:text-white text-sm py-1.5 px-2 rounded-lg hover:bg-white/5 transition-colors">
                Co-Working Space
            </a>
            <a href="{{ route('workspace.show', 'command-center') }}"
               class="text-gray-400 hover:text-white text-sm py-1.5 px-2 rounded-lg hover:bg-white/5 transition-colors">
                Command Center
            </a>
            <a href="{{ route('workspace.show', 'meeting-room') }}"
               class="text-gray-400 hover:text-white text-sm py-1.5 px-2 rounded-lg hover:bg-white/5 transition-colors">
                Meeting Room
            </a>
            <a href="{{ route('workspace.show', 'classroom-playhard') }}"
               class="text-gray-400 hover:text-white text-sm py-1.5 px-2 rounded-lg hover:bg-white/5 transition-colors">
                Classroom / Playhard
            </a>
        </div>
    </div>

    {{-- Ecosystem Group --}}
    <div class="py-2.5 px-3">
        <p class="text-xs text-gray-500 uppercase tracking-widest font-bold mb-2">Ecosystem</p>
        <div class="flex flex-col space-y-1 pl-2 border-l-2 border-[#123B7A]/30">
            <a href="{{ route('talenta') }}"
               class="{{ request()->routeIs('talenta') ? 'text-[#F7AD12] font-semibold bg-white/5' : 'text-gray-400 hover:text-white' }} text-sm py-1.5 px-2 rounded-lg hover:bg-white/5 transition-colors">
                Talent
            </a>
            <a href="{{ route('umkm') }}"
               class="{{ request()->routeIs('umkm') ? 'text-[#F7AD12] font-semibold bg-white/5' : 'text-gray-400 hover:text-white' }} text-sm py-1.5 px-2 rounded-lg hover:bg-white/5 transition-colors">
                Partner SMEs
            </a>
            <a href="{{ route('achievement') }}"
               class="{{ request()->routeIs('achievement') ? 'text-[#F7AD12] font-semibold bg-white/5' : 'text-gray-400 hover:text-white' }} text-sm py-1.5 px-2 rounded-lg hover:bg-white/5 transition-colors">
                Achievement
            </a>
        </div>
    </div>

    <a href="{{ url('/#gallery') }}"
       class="nav-scroll-link flex items-center gap-2 text-gray-300 hover:text-white text-sm py-2.5 px-3 rounded-xl hover:bg-white/5 transition-colors">
        Gallery
    </a>
    <a href="{{ url('/#review') }}"
       class="nav-scroll-link flex items-center gap-2 text-gray-300 hover:text-white text-sm py-2.5 px-3 rounded-xl hover:bg-white/5 transition-colors">
        Review
    </a>
    <a href="{{ url('/#team') }}"
       class="nav-scroll-link flex items-center gap-2 text-gray-300 hover:text-white text-sm py-2.5 px-3 rounded-xl hover:bg-white/5 transition-colors">
        Team
    </a>

    {{-- Social Icons (Mobile) --}}
    <div class="flex items-center justify-center gap-4 pt-4 pb-2 mt-4 border-t border-white/10">
        {{-- Instagram --}}
        <a href="https://instagram.com" target="_blank"
           class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center text-gray-300 hover:text-white hover:bg-[#F7AD12]/80 transition-all border border-white/5">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
            </svg>
        </a>

        {{-- YouTube --}}
        <a href="https://youtube.com" target="_blank"
           class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center text-gray-300 hover:text-white hover:bg-[#F7AD12]/80 transition-all border border-white/5">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
            </svg>
        </a>

        {{-- Email --}}
        <a href="mailto:info@ejsc.id"
           class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center text-gray-300 hover:text-white hover:bg-[#F7AD12]/80 transition-all border border-white/5">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
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

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!btn.contains(e.target) && !menu.contains(e.target)) {
            menu.classList.add('hidden');
        }
    });

    // Active Links on Click
    document.addEventListener('DOMContentLoaded', () => {
        const navLinks = document.querySelectorAll('.nav-scroll-link');

        function setActiveLink(clickedHref) {
            navLinks.forEach(link => {
                const currentHref = link.getAttribute('href');

                // Determine if this specific link matches the clicked href
                if (currentHref === clickedHref) {
                    // Activate styling
                    link.classList.remove('text-gray-300', 'hover:text-white');
                    link.classList.add('text-[#F7AD12]');
                    if (link.closest('#mobile-menu')) {
                        link.classList.add('bg-white/5');
                    }
                } else {
                    // Deactivate styling
                    link.classList.remove('text-[#F7AD12]');
                    link.classList.add('text-gray-300', 'hover:text-white');
                    if (link.closest('#mobile-menu')) {
                        link.classList.remove('bg-white/5');
                    }
                }
            });
        }

        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // We do NOT prevent default, we want the browser to scroll natively
                setActiveLink(this.getAttribute('href'));
            });
        });

        // Set active state on initial load if there's a hash in the URL
        const currentHash = window.location.hash;
        if (currentHash) {
            const initialLink = Array.from(navLinks).find(l => l.getAttribute('href').endsWith(currentHash));
            if (initialLink) {
                setActiveLink(initialLink.getAttribute('href'));
            }
        }
    });
</script>

<style>
    html {
        scroll-behavior: smooth;
    }
</style>
@endpush
