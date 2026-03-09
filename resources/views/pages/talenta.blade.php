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
            <p class="text-gray-400 text-sm">Showing <span class="text-[#71A2CF] font-bold">12</span> of <span class="text-[#71A2CF] font-bold">1060</span> Data</p>

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

            {{-- Array of mockup talent data matching the reference --}}
            @php
                $mockTalents = [
                    ['name' => 'Fauzi Rahman', 'portfolio' => 30, 'city' => 'Pamekasan'],
                    ['name' => 'Muchammad Syahrial Akbar', 'portfolio' => 30, 'city' => 'Malang'],
                    ['name' => 'Edwinda Mardiana', 'portfolio' => 29, 'city' => 'Malang'],
                    ['name' => 'Hermawan', 'portfolio' => 27, 'city' => 'Pasuruan'],
                    ['name' => 'Ilman Hendrawan Saputra', 'portfolio' => 24, 'city' => 'Kediri'],
                    ['name' => 'Moh. Syamsul Arifin', 'portfolio' => 24, 'city' => 'Pamekasan'],
                    ['name' => 'Fatony Akbar', 'portfolio' => 23, 'city' => 'Malang'],
                    ['name' => 'Deby Anggara Pratama', 'portfolio' => 23, 'city' => 'Malang'],
                    ['name' => 'Ichsan As\'hari', 'portfolio' => 19, 'city' => 'Sidoarjo'],
                    ['name' => 'Imam Ariadi', 'portfolio' => 19, 'city' => 'Lamongan'],
                    ['name' => 'Rifaldi Saputra', 'portfolio' => 18, 'city' => 'Jember'],
                    ['name' => 'Ahmad Adib', 'portfolio' => 17, 'city' => 'Pamekasan'],
                ];
            @endphp

            @foreach($mockTalents as $talent)
            <div class="bg-transparent backdrop-blur-sm border border-white/10 rounded-2xl p-6 flex flex-col items-center text-center hover:bg-white/5 transition-colors group">
                {{-- Avatar --}}
                <div class="w-20 h-20 rounded-full bg-[#d9d9d9] flex justify-center items-center overflow-hidden mb-5 shrink-0 shadow-inner group-hover:scale-105 transition-transform duration-300">
                    {{-- Default placeholder icon matching reference --}}
                    <svg class="w-12 h-12 text-[#999999] mt-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                </div>

                {{-- Details --}}
                <div class="flex-grow flex flex-col items-center justify-between w-full h-[120px]">
                    <div class="w-full">
                        <h3 class="text-white font-bold text-sm md:text-[15px] leading-tight mb-2 line-clamp-2" style="font-family: 'Inter', sans-serif;">
                            {{ $talent['name'] }}
                        </h3>
                        <div class="inline-flex bg-[#3b1c1c] rounded-full px-2.5 py-0.5">
                            <span class="text-[#fca5a5] text-[10px] font-medium">{{ $talent['portfolio'] }} Portfolios</span>
                        </div>
                    </div>

                    <div class="w-full mt-auto pt-3">
                        <p class="text-gray-500 text-xs mb-0.5">Domicile</p>
                        <p class="text-white font-bold text-sm">{{ $talent['city'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        {{-- Pagination Mockup --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mt-12 bg-transparent backdrop-blur-sm p-4 rounded-xl border border-white/10">
            <p class="text-gray-500 text-sm">Page 1 of 140</p>
            <div class="flex items-center gap-1.5 font-medium text-xs">
                {{-- Prev button --}}
                <button class="px-3 py-1.5 rounded-lg text-gray-500 cursor-not-allowed">Prev</button>

                <button class="w-8 h-8 rounded-lg bg-[#71A2CF] text-black font-bold flex items-center justify-center">1</button>
                <button class="w-8 h-8 rounded-lg text-gray-400 hover:bg-white/5 hover:text-white transition-colors flex items-center justify-center">2</button>
                <span class="w-8 h-8 rounded-lg text-gray-500 flex items-center justify-center">...</span>
                <button class="w-8 h-8 rounded-lg text-gray-400 hover:bg-white/5 hover:text-white transition-colors flex items-center justify-center">139</button>
                <button class="w-8 h-8 rounded-lg text-gray-400 hover:bg-white/5 hover:text-white transition-colors flex items-center justify-center">140</button>

                {{-- Next button --}}
                <button class="px-3 py-1.5 rounded-lg text-gray-300 hover:text-white hover:bg-white/5 transition-colors">Next</button>
            </div>
        </div>

    </section>
</main>
@endsection
