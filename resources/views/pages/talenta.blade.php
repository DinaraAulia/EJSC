@extends('layouts.app')

@section('title', 'Talent EJSC Bakorwil III Malang')
@section('description', 'List of talents and portfolios in the EJSC Bakorwil Malang work area')

@section('content')
<main class="bg-[#0a0f1c] min-h-screen pt-24 pb-16 font-sans relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-600/10 rounded-full blur-[120px]"></div>
        <div class="absolute top-1/2 right-1/4 w-96 h-96 bg-cyan-500/10 rounded-full blur-[120px]"></div>
    </div>

    <!-- Enhanced Grid Pattern -->
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_0%,#000_70%,transparent_100%)] z-0"></div>

    {{-- Header Section: What is Talenta & How to Join --}}
    <section class="max-w-7xl mx-auto px-4 md:px-6 mb-16 relative z-10">

        <div class="text-center mt-5 md:text-left mb-12">
            <h1 class="text-2xl md:text-3xl font-black text-white mb-4" style="font-family: 'Poppins', sans-serif;">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">EJSC Malang</span> Talent
            </h1>
            <p class="text-gray-400 text-sm md:text-base max-w-3xl leading-relaxed">
                EJSC Talent refers to creative individuals, freelancers, and professionals in the Bakorwil III Malang work area who have joined the East Java Super Corridor ecosystem. They are ready to collaborate to advance East Java's digital economy and creative industry.
            </p>
        </div>

        {{-- How to Join Steps --}}
        <div class="mb-8">
            <h2 class="text-xl font-bold text-white mb-6 border-b border-white/10 pb-4">Talent Registration Flow</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 relative">
                {{-- Decorative connecting line --}}
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-gradient-to-r from-[#123B7A] via-[#71A2CF] to-[#F7AD12] -z-10 opacity-30"></div>

                {{-- Step 1 --}}
                <div class="bg-[#020636]/80 backdrop-blur border border-[#123B7A]/50 rounded-2xl p-6 text-center hover:border-[#71A2CF]/50 transition-colors">
                    <div class="w-14 h-14 rounded-full bg-[#123B7A]/50 flex items-center justify-center mx-auto mb-4 border border-[#71A2CF]/30 shadow-[0_0_20px_rgba(113,162,207,0.2)]">
                        <span class="text-xl font-black text-white">1</span>
                    </div>
                    <h3 class="text-white font-bold mb-2">Registration Form</h3>
                    <p class="text-gray-400 text-xs leading-relaxed">Visit the registration link and fill in your personal data, main skills, and domicile area.</p>
                </div>

                {{-- Step 2 --}}
                <div class="bg-[#020636]/80 backdrop-blur border border-[#123B7A]/50 rounded-2xl p-6 text-center hover:border-[#71A2CF]/50 transition-colors transform md:-translate-y-4">
                    <div class="w-14 h-14 rounded-full bg-[#123B7A]/50 flex items-center justify-center mx-auto mb-4 border border-[#71A2CF]/30 shadow-[0_0_20px_rgba(113,162,207,0.2)]">
                        <span class="text-xl font-black text-white">2</span>
                    </div>
                    <h3 class="text-white font-bold mb-2">Portfolio Curation</h3>
                    <p class="text-gray-400 text-xs leading-relaxed">The validator team will review the work or project history you attach.</p>
                </div>

                {{-- Step 3 --}}
                <div class="bg-[#020636]/80 backdrop-blur border border-[#123B7A]/50 rounded-2xl p-6 text-center hover:border-[#71A2CF]/50 transition-colors">
                    <div class="w-14 h-14 rounded-full bg-[#123B7A]/50 flex items-center justify-center mx-auto mb-4 border border-[#71A2CF]/30 shadow-[0_0_20px_rgba(113,162,207,0.2)]>">
                        <span class="text-xl font-black text-white">3</span>
                    </div>
                    <h3 class="text-white font-bold mb-2">Onboarding</h3>
                    <p class="text-gray-400 text-xs leading-relaxed">Your profile will be published in the Talent list and ready to receive collaboration offers.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Main Talenta Area (Search + Grid) --}}
    <section class="max-w-7xl mx-auto px-4 md:px-6">

        {{-- Search & Info Header --}}
        <div class="flex flex-col md:flex-row items-center justify-between gap-4 mb-8 bg-transparent backdrop-blur-sm p-4 rounded-xl border border-white/10">
            <p class="text-gray-400 text-sm">Showing <span class="text-[#71A2CF] font-bold">{{ $talentas->firstItem() ?? 0 }}</span> to <span class="text-[#71A2CF] font-bold">{{ $talentas->lastItem() ?? 0 }}</span> of <span class="text-[#71A2CF] font-bold">{{ $talentas->total() }}</span> Talents</p>

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

        {{-- Talent Grid --}}
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-5">

            @forelse($talentas as $talent)
            <div class="bg-[#101524]/40 backdrop-blur-md border border-white/10 rounded-2xl p-6 flex flex-col items-center text-center hover:bg-white/5 hover:border-blue-500/50 transition-all duration-300 group shadow-lg">
                {{-- Avatar --}}
                <div class="w-24 h-24 rounded-full bg-gradient-to-br from-[#123B7A] to-blue-900/50 flex justify-center items-center overflow-hidden mb-5 shrink-0 border-2 border-white/5 group-hover:border-blue-400/30 transition-all duration-500 relative">
                    @if($talent->avatar)
                        @php
                            $isExternal = \Illuminate\Support\Str::startsWith($talent->avatar, ['http://', 'https://']);
                            $avatarSrc = $isExternal ? $talent->avatar : asset('storage/' . $talent->avatar);
                        @endphp
                        <img src="{{ $avatarSrc }}" class="w-full h-full object-cover">
                    @else
                        {{-- Default placeholder icon matching reference --}}
                        <svg class="w-12 h-12 text-white/20 mt-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    @endif
                </div>

                {{-- Details --}}
                <div class="flex-grow flex flex-col items-center justify-between w-full min-h-[140px]">
                    <div class="w-full">
                        <h3 class="text-white font-bold text-sm md:text-base leading-tight mb-3 line-clamp-2" style="font-family: 'Poppins', sans-serif;">
                            {{ $talent->name }}
                        </h3>
                        
                        @if($talent->portfolio)
                        <a href="{{ asset('storage/' . $talent->portfolio) }}" target="_blank" class="inline-flex items-center gap-2 bg-blue-600/20 hover:bg-blue-600/40 text-blue-300 text-[10px] font-bold px-3 py-1 rounded-full border border-blue-500/30 transition-colors uppercase tracking-wider mb-2">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            View Portfolio (PDF)
                        </a>
                        @else
                        <div class="inline-flex bg-white/5 text-gray-500 text-[10px] font-medium px-3 py-1 rounded-full border border-white/5">
                            No Portfolio
                        </div>
                        @endif
                    </div>

                    <div class="w-full mt-auto pt-4 border-t border-white/5">
                        <p class="text-gray-500 text-[10px] uppercase tracking-widest mb-1">Domicile</p>
                        <p class="text-gray-200 font-bold text-sm">{{ $talent->city }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-20 text-center bg-white/5 rounded-3xl border border-white/10">
                <p class="text-gray-400">No talents found. Be the first to join!</p>
            </div>
            @endforelse

        </div>

        {{-- Laravel Real Pagination --}}
        <div class="mt-12 flex justify-center">
            {{ $talentas->links() }}
        </div>

    </section>
</main>
@endsection
