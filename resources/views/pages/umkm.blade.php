@extends('layouts.app')

@section('title', 'UMKM Partner EJSC Bakorwil III Malang')
@section('description', 'Daftar UMKM bersinergi dan berkolaborasi di wilayah kerja EJSC Bakorwil Malang')

@section('content')
<main class="bg-[#0a0f1c] min-h-screen pt-24 pb-16 font-sans relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-[#F7AD12]/10 rounded-full blur-[120px]"></div>
        <div class="absolute top-1/2 right-1/4 w-96 h-96 bg-blue-600/10 rounded-full blur-[120px]"></div>
    </div>

    <!-- Enhanced Grid Pattern -->
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_0%,#000_70%,transparent_100%)] z-0"></div>

    {{-- Header Section: What is UMKM & How to Join --}}
    <section class="max-w-7xl mx-auto px-4 md:px-6 mb-16 relative z-10">

        <div class="text-center mt-5 md:text-left mb-12">
            <h1 class="text-2xl md:text-3xl font-black text-white mb-4" style="font-family: 'Poppins', sans-serif;">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#F7AD12] to-yellow-300">EJSC Partner</span> SMEs
            </h1>
            <p class="text-gray-400 text-sm md:text-base max-w-3xl leading-relaxed">
                EJSC Partner SMEs are micro, small, and medium enterprises in the Bakorwil III Malang work area that have been curated and fostered by the East Java Super Corridor team. We help facilitate legality, branding, and digital market access to encourage the growth of local products.
            </p>
        </div>

        {{-- How to Join Steps --}}
        {{-- SME Partnership Flow --}}
<div class="mb-8">
    <h2 class="text-xl font-bold text-white mb-6 border-b border-white/10 pb-4">
        SME Partnership Flow
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 relative">
        {{-- Decorative connecting line --}}
        <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-gradient-to-r from-[#F7AD12] via-yellow-400 to-orange-500 -z-10 opacity-30"></div>

        {{-- Step 1 --}}
        <div class="bg-[#382600]/80 backdrop-blur border border-[#8B5E00]/50 rounded-2xl p-6 text-center hover:border-[#F7AD12]/50 transition-colors">
            <div class="w-14 h-14 rounded-full bg-[#8B5E00]/50 flex items-center justify-center mx-auto mb-4 border border-[#F7AD12]/30 shadow-[0_0_20px_rgba(247,173,18,0.2)]">
                <span class="text-xl font-black text-white">1</span>
            </div>

            <h3 class="text-white font-bold mb-2">Registration</h3>

            <p class="text-gray-400 text-xs leading-relaxed mb-3">
                Fill out the form with your business data, owner information, and upload required documents (KTP & product photos).
            </p>

            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdY20LQVp0Dd_hdZhm4ZmeP1mSBTcKNCLMDT4zjX1rUa65gfA/viewform"
               target="_blank"
               class="inline-block text-xs font-semibold text-[#F7AD12] hover:text-yellow-300 transition-colors">
               Register Now →
            </a>
        </div>

        {{-- Step 2 --}}
        <div class="bg-[#382600]/80 backdrop-blur border border-[#8B5E00]/50 rounded-2xl p-6 text-center hover:border-[#F7AD12]/50 transition-colors transform md:-translate-y-4">
            <div class="w-14 h-14 rounded-full bg-[#8B5E00]/50 flex items-center justify-center mx-auto mb-4 border border-[#F7AD12]/30 shadow-[0_0_20px_rgba(247,173,18,0.2)]">
                <span class="text-xl font-black text-white">2</span>
            </div>

            <h3 class="text-white font-bold mb-2">Review</h3>

            <p class="text-gray-400 text-xs leading-relaxed">
                The EJSC team will review your business data, products, and selected facilitation needs.
            </p>
        </div>

        {{-- Step 3 --}}
        <div class="bg-[#382600]/80 backdrop-blur border border-[#8B5E00]/50 rounded-2xl p-6 text-center hover:border-[#F7AD12]/50 transition-colors">
            <div class="w-14 h-14 rounded-full bg-[#8B5E00]/50 flex items-center justify-center mx-auto mb-4 border border-[#F7AD12]/30 shadow-[0_0_20px_rgba(247,173,18,0.2)]">
                <span class="text-xl font-black text-white">3</span>
            </div>

            <h3 class="text-white font-bold mb-2">Onboarding</h3>

            <p class="text-gray-400 text-xs leading-relaxed">
                Selected SMEs will receive support and opportunities for product development and promotion through EJSC programs.
            </p>
        </div>
    </div>
</div>
    </section>

    {{-- Main UMKM Area (Search + Grid) --}}
    <section class="max-w-7xl mx-auto px-4 md:px-6 relative z-10">

        {{-- Search & Info Header --}}
        <div class="flex flex-col md:flex-row items-center justify-between gap-4 mb-8 bg-transparent backdrop-blur-sm p-4 rounded-xl border border-white/10">
            <p class="text-gray-400 text-sm">
                @if($search)
                    Found <span class="text-[#F7AD12] font-bold">{{ $umkms->total() }}</span> result(s) for "<span class="text-white font-semibold">{{ $search }}</span>"
                @else
                    Showing <span class="text-[#F7AD12] font-bold">{{ $umkms->firstItem() ?? 0 }}</span> to <span class="text-[#F7AD12] font-bold">{{ $umkms->lastItem() ?? 0 }}</span> of <span class="text-[#F7AD12] font-bold">{{ $umkms->total() }}</span> Partner SMEs
                @endif
            </p>

            <form action="{{ route('umkm') }}" method="GET" class="relative w-full md:w-64 flex">
                <input type="text" name="search" value="{{ $search ?? '' }}"
                       placeholder="Search by name or city..."
                       class="w-full bg-[#101215] border border-white/10 text-white text-sm rounded-lg pl-4 pr-10 py-2.5 focus:outline-none focus:border-[#F7AD12]/50 focus:ring-1 focus:ring-[#F7AD12]/50 transition-colors placeholder-gray-600">
                <button type="submit" class="absolute inset-y-0 right-0 flex items-center pr-3 group">
                    <svg class="w-4 h-4 text-gray-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </form>
        </div>

        {{-- UMKM Grid --}}
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-5">

            @forelse($umkms as $umkm)
            <div class="bg-[#1a140a]/40 backdrop-blur-md border border-white/10 rounded-2xl p-6 flex flex-col items-center text-center hover:bg-white/5 hover:border-[#F7AD12]/50 transition-all duration-300 group shadow-lg">
                {{-- Product Image --}}
                <div class="w-24 h-24 rounded-full bg-gradient-to-br from-[#F7AD12] to-[#B47D0B]/50 flex justify-center items-center overflow-hidden mb-5 shrink-0 border-2 border-white/5 group-hover:border-[#F7AD12]/30 transition-all duration-500 relative">
                    @if($umkm->image)
                        @php
                            $isExternal = \Illuminate\Support\Str::startsWith($umkm->image, ['http://', 'https://']);
                            $imageSrc = $isExternal ? $umkm->image : asset('storage/' . $umkm->image);
                        @endphp
                        <img src="{{ $imageSrc }}" class="w-full h-full object-cover">
                    @else
                        <svg class="w-12 h-12 text-white/20 mt-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/>
                        </svg>
                    @endif
                </div>

                {{-- Details --}}
                <div class="flex-grow flex flex-col items-center justify-between w-full min-h-[140px]">
                    <div class="w-full">
                        <h3 class="text-white font-bold text-sm md:text-base leading-tight mb-3 line-clamp-2" style="font-family: 'Poppins', sans-serif;">
                            {{ $umkm->name }}
                        </h3>
                        <div class="inline-flex border border-[#F7AD12]/30 bg-[#F7AD12]/10 rounded-full px-3 py-1">
                            <span class="text-[#F7AD12] text-[10px] font-bold uppercase tracking-wider">{{ $umkm->category_name }}</span>
                        </div>

                        {{-- Contact & Social Icons --}}
                        @if($umkm->phone || $umkm->instagram)
                        <div class="flex items-center justify-center gap-3 mt-3">
                            @if($umkm->phone)
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $umkm->phone) }}" target="_blank" title="WhatsApp"
                               class="w-8 h-8 rounded-full bg-green-500/10 border border-green-500/30 flex items-center justify-center text-green-400 hover:bg-green-500/30 hover:scale-110 transition-all">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            </a>
                            @endif
                            @if($umkm->instagram)
                            <a href="{{ $umkm->instagram }}" target="_blank" title="Instagram"
                               class="w-8 h-8 rounded-full bg-pink-500/10 border border-pink-500/30 flex items-center justify-center text-pink-400 hover:bg-pink-500/30 hover:scale-110 transition-all">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                            </a>
                            @endif
                        </div>
                        @endif
                    </div>

                    <div class="w-full mt-auto pt-4 border-t border-white/5">
                        <p class="text-gray-500 text-[10px] uppercase tracking-widest mb-1">Origin</p>
                        <p class="text-gray-200 font-bold text-sm">{{ $umkm->city_name }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-20 text-center bg-white/5 rounded-3xl border border-white/10">
                <svg class="mx-auto w-12 h-12 text-gray-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                @if($search)
                    <p class="text-white font-semibold text-lg mb-1">No results found</p>
                    <p class="text-gray-400 text-sm">We couldn't find any SME matching "<span class="text-white font-medium">{{ $search }}</span>".</p>
                    <p class="text-gray-500 text-xs mt-1">Try a different name or city.</p>
                    <a href="{{ route('umkm') }}" class="inline-block mt-5 px-5 py-2 rounded-full bg-[#F7AD12]/20 border border-[#F7AD12]/30 text-[#F7AD12] text-sm hover:bg-[#F7AD12]/30 transition-colors">Clear Search</a>
                @else
                    <p class="text-gray-400">No partner SMEs found yet.</p>
                @endif
            </div>
            @endforelse

        </div>

        {{-- Laravel Real Pagination --}}
        <div class="mt-12 flex justify-center">
            {{ $umkms->links() }}
        </div>

    </section>
</main>
@endsection
