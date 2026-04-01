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
        <div class="mb-8">
            <h2 class="text-xl font-bold text-white mb-6 border-b border-white/10 pb-4">SME Partnership Flow</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 relative">
                {{-- Decorative connecting line --}}
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-gradient-to-r from-[#F7AD12] via-yellow-400 to-orange-500 -z-10 opacity-30"></div>

                {{-- Step 1 --}}
                <div class="bg-[#382600]/80 backdrop-blur border border-[#8B5E00]/50 rounded-2xl p-6 text-center hover:border-[#F7AD12]/50 transition-colors">
                    <div class="w-14 h-14 rounded-full bg-[#8B5E00]/50 flex items-center justify-center mx-auto mb-4 border border-[#F7AD12]/30 shadow-[0_0_20px_rgba(247,173,18,0.2)]">
                        <span class="text-xl font-black text-white">1</span>
                    </div>
                    <h3 class="text-white font-bold mb-2">Initial Registration</h3>
                    <p class="text-gray-400 text-xs leading-relaxed">Fill out the partnership form online and complete business legality data (NIB, PIRT, etc).</p>
                </div>

                {{-- Step 2 --}}
                <div class="bg-[#382600]/80 backdrop-blur border border-[#8B5E00]/50 rounded-2xl p-6 text-center hover:border-[#F7AD12]/50 transition-colors transform md:-translate-y-4">
                    <div class="w-14 h-14 rounded-full bg-[#8B5E00]/50 flex items-center justify-center mx-auto mb-4 border border-[#F7AD12]/30 shadow-[0_0_20px_rgba(247,173,18,0.2)]">
                        <span class="text-xl font-black text-white">2</span>
                    </div>
                    <h3 class="text-white font-bold mb-2">Curation & Fostering</h3>
                    <p class="text-gray-400 text-xs leading-relaxed">The validator team assists in product refinement, packaging standardization, and product photography.</p>
                </div>

                {{-- Step 3 --}}
                <div class="bg-[#382600]/80 backdrop-blur border border-[#8B5E00]/50 rounded-2xl p-6 text-center hover:border-[#F7AD12]/50 transition-colors">
                    <div class="w-14 h-14 rounded-full bg-[#8B5E00]/50 flex items-center justify-center mx-auto mb-4 border border-[#F7AD12]/30 shadow-[0_0_20px_rgba(247,173,18,0.2)]">
                        <span class="text-xl font-black text-white">3</span>
                    </div>
                    <h3 class="text-white font-bold mb-2">Go Digital</h3>
                    <p class="text-gray-400 text-xs leading-relaxed">Products are displayed in the EJSC catalog and receive marketing facilitation at various exhibitions.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Main UMKM Area (Search + Grid) --}}
    <section class="max-w-7xl mx-auto px-4 md:px-6 relative z-10">

        {{-- Search & Info Header --}}
        <div class="flex flex-col md:flex-row items-center justify-between gap-4 mb-8 bg-transparent backdrop-blur-sm p-4 rounded-xl border border-white/10">
            <p class="text-gray-400 text-sm">Showing <span class="text-[#F7AD12] font-bold">{{ $umkms->firstItem() ?? 0 }}</span> to <span class="text-[#F7AD12] font-bold">{{ $umkms->lastItem() ?? 0 }}</span> of <span class="text-[#F7AD12] font-bold">{{ $umkms->total() }}</span> Partner SMEs</p>

            <div class="relative w-full md:w-64">
                <input type="text" placeholder="Search..."
                       class="w-full bg-[#101215] border border-white/10 text-white text-sm rounded-lg pl-4 pr-10 py-2.5 focus:outline-none focus:border-[#71A2CF]/50 focus:ring-1 focus:ring-[#71A2CF]/50 transition-colors placeholder-gray-600">
                <button class="absolute inset-y-0 right-0 flex items-center pr-3 group">
                    <svg class="w-4 h-4 text-gray-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </div>
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
                            <span class="text-[#F7AD12] text-[10px] font-bold uppercase tracking-wider">{{ $umkm->category }}</span>
                        </div>
                    </div>

                    <div class="w-full mt-auto pt-4 border-t border-white/5">
                        <p class="text-gray-500 text-[10px] uppercase tracking-widest mb-1">Origin</p>
                        <p class="text-gray-200 font-bold text-sm">{{ $umkm->city }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-20 text-center bg-white/5 rounded-3xl border border-white/10">
                <p class="text-gray-400">No partner SMEs found yet.</p>
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
