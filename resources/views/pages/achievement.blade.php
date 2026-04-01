@extends('layouts.app')

@section('title', 'Achievement EJSC Bakorwil III Malang')
@section('description', 'Prestasi dan penghargaan yang telah diraih oleh East Java Super Corridor Bakorwil III Malang')

@section('content')
<main class="bg-[#0a0f1c] min-h-screen pt-24 pb-16 font-sans relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-[#F7AD12]/10 rounded-full blur-[120px]"></div>
        <div class="absolute top-1/2 right-1/4 w-96 h-96 bg-[#123B7A]/20 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-1/4 left-1/3 w-[30rem] h-[30rem] bg-blue-600/10 rounded-full blur-[150px]"></div>
    </div>

    <!-- Enhanced Grid Pattern -->
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_0%,#000_70%,transparent_100%)] z-0"></div>

    {{-- Header Section --}}
    <section class="max-w-7xl mx-auto px-4 md:px-6 mb-16 relative z-10">
        <div class="text-center mt-8 mb-16">
            <h1 class="text-3xl md:text-5xl font-black text-white mb-6" style="font-family: 'Poppins', sans-serif;">
                Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#F7AD12] to-yellow-300">Achievements</span>
            </h1>
            <p class="text-gray-400 text-sm md:text-base max-w-2xl mx-auto leading-relaxed">
                A collection of milestones, awards, and recognitions earned through the dedication and hard work of the East Java Super Corridor (EJSC) team in fostering innovation and collaboration.
            </p>
        </div>
    </section>

    {{-- Achievements Gallery Section --}}
    <section class="max-w-7xl mx-auto px-4 md:px-6 relative z-10">

        {{-- Filters/Categories (Optional, for visual flair) --}}
        <div class="flex flex-wrap items-center justify-center gap-3 mb-12">
            <button class="px-5 py-2 rounded-full bg-[#F7AD12]/20 border border-[#F7AD12]/50 text-[#F7AD12] text-sm font-medium hover:bg-[#F7AD12]/30 transition-colors">
                All Awards
            </button>
            <button class="px-5 py-2 rounded-full bg-white/5 border border-white/10 text-gray-400 text-sm font-medium hover:text-white hover:bg-white/10 transition-colors">
                Provincial
            </button>
            <button class="px-5 py-2 rounded-full bg-white/5 border border-white/10 text-gray-400 text-sm font-medium hover:text-white hover:bg-white/10 transition-colors">
                National
            </button>
        </div>

        {{-- Certificates Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Mockup Data for Certificates --}}
            @php
                $achievements = [
                    [
                        'title' => 'Best Co-Working Space Innovation',
                        'year' => '2025',
                        'issuer' => 'Government of East Java',
                        'description' => 'Awarded for exceptional contribution to providing modern, free public collaborative spaces for youth and creatives.',
                        'image' => 'https://images.unsplash.com/photo-1589330694653-ded6df03f754?q=80&w=600&auto=format&fit=crop' // Placeholder certificate-like image
                    ],
                    [
                        'title' => 'Excellence in SME Fostering',
                        'year' => '2024',
                        'issuer' => 'Ministry of Cooperatives and SMEs',
                        'description' => 'Recognition for successfully incubating over 300+ local MSMEs towards digital transformation in the Bakorwil Malang region.',
                        'image' => 'https://images.unsplash.com/photo-1523726496-e261f234f9a0?q=80&w=600&auto=format&fit=crop'
                    ],
                    [
                        'title' => 'Top Regional Creative Hub',
                        'year' => '2024',
                        'issuer' => 'Creative Economy Agency (Bekraf)',
                        'description' => 'Honored as the most active creative hub in East Java facilitating young talents and local startups.',
                        'image' => 'https://images.unsplash.com/photo-1606326608606-aa0b62935f2b?q=80&w=600&auto=format&fit=crop'
                    ],
                    [
                        'title' => 'Outstanding Public Service App',
                        'year' => '2023',
                        'issuer' => 'Governor of East Java',
                        'description' => 'Awarded for the efficient digital booking system utilized by the public for accessing EJSC facilities.',
                        'image' => 'https://images.unsplash.com/photo-1589829085413-56de8ae18c73?q=80&w=600&auto=format&fit=crop'
                    ],
                    [
                        'title' => 'Community Engagement Leader',
                        'year' => '2023',
                        'issuer' => 'Malang City Government',
                        'description' => 'Acknowledged for organizing 50+ impactful workshops, seminars, and networking events in a single year.',
                        'image' => 'https://images.unsplash.com/photo-1546422904-90eab23c3d7e?q=80&w=600&auto=format&fit=crop'
                    ],
                    [
                        'title' => 'Best Creative Documentation',
                        'year' => '2022',
                        'issuer' => 'East Java Information Agency',
                        'description' => 'An award for outstanding content creation, reporting, and documentation of local youth movements.',
                        'image' => 'https://images.unsplash.com/photo-1563804447971-6e113ab80713?q=80&w=600&auto=format&fit=crop'
                    ],
                ];
            @endphp

            @foreach($achievements as $ach)
            <div class="group relative rounded-2xl overflow-hidden bg-[#101524]/60 backdrop-blur-md border border-white/10 hover:border-[#F7AD12]/40 transition-all duration-500 shadow-lg hover:shadow-[0_0_30px_rgba(247,173,18,0.15)] flex flex-col h-full transform hover:-translate-y-2">
                {{-- Diagonal glowing accent inside the card --}}
                <div class="absolute inset-0 bg-gradient-to-tr from-[#F7AD12]/5 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

                {{-- Image Container (The Certificate) --}}
                <div class="relative w-full aspect-[4/3] overflow-hidden bg-black/40 p-4 shrink-0">
                    <div class="absolute top-2 right-2 bg-black/60 backdrop-blur-sm px-3 py-1 rounded-full border border-white/10 z-10 flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5 text-[#F7AD12]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <span class="text-white text-xs font-bold">{{ $ach['year'] }}</span>
                    </div>

                    {{-- Image styling to look slightly like a framed document or creative image --}}
                    <div class="w-full h-full rounded-xl overflow-hidden relative shadow-[0_4px_20px_rgba(0,0,0,0.5)] border border-white/5 transition-transform duration-700 group-hover:scale-105">
                        <img src="{{ $ach['image'] }}" alt="Certificate {{ $ach['title'] }}" class="w-full h-full object-cover object-center grayscale-[20%] group-hover:grayscale-0 transition-all duration-500">
                        {{-- Subtle inner glow on image --}}
                        <div class="absolute inset-0 shadow-[inset_0_0_20px_rgba(0,0,0,0.6)] pointer-events-none"></div>
                    </div>
                </div>

                {{-- Content Details --}}
                <div class="p-6 flex-grow flex flex-col justify-between">
                    <div>
                        <div class="inline-flex items-center gap-1.5 text-xs text-[#71A2CF] font-medium mb-3">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            {{ $ach['issuer'] }}
                        </div>

                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-[#F7AD12] transition-colors leading-tight" style="font-family: 'Poppins', sans-serif;">
                            {{ $ach['title'] }}
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed mb-6 line-clamp-3">
                            {{ $ach['description'] }}
                        </p>
                    </div>

                    <div class="mt-auto pt-4 border-t border-white/5">
                        <button class="flex items-center gap-2 text-sm text-gray-300 hover:text-white transition-colors group/btn w-full">
                            <span class="font-medium">View Certificate</span>
                            <svg class="w-4 h-4 transform group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        {{-- Call to action bottom --}}
        <div class="mt-20 text-center bg-gradient-to-br from-[#123B7A]/20 to-[#020636] border border-[#123B7A]/30 rounded-3xl p-8 md:p-12 backdrop-blur-sm relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-[#F7AD12]/5 rounded-full blur-[80px]"></div>
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-4" style="font-family: 'Poppins', sans-serif;">Continue Growing With Us</h2>
            <p class="text-gray-400 max-w-2xl mx-auto mb-8 text-sm md:text-base">We're committed to creating more impact. Join our collaborative space to foster your ideas, talents, and business potential.</p>
            <a href="{{ url('/#about') }}" class="inline-flex items-center justify-center gap-2px-8 py-3 px-8 rounded-full bg-gradient-to-r from-[#F7AD12] to-yellow-500 text-black font-bold text-sm tracking-wide shadow-[0_0_20px_rgba(247,173,18,0.3)] hover:shadow-[0_0_30px_rgba(247,173,18,0.5)] transform hover:-translate-y-1 transition-all duration-300">
                Discover EJSC
            </a>
        </div>

    </section>
</main>
@endsection
