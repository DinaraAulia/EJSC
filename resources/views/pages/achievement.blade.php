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

        {{-- Filters/Categories --}}
        <div class="flex flex-wrap items-center justify-center gap-3 mb-12">
            <a href="{{ route('achievement.index') }}" class="px-5 py-2 rounded-full {{ !request('category') ? 'bg-[#F7AD12] text-black font-bold' : 'bg-white/5 border border-white/10 text-gray-400 font-medium hover:text-white hover:bg-white/10' }} text-sm transition-all duration-300">
                All Awards
            </a>
            <a href="{{ route('achievement.index', ['category' => 'provincial']) }}" class="px-5 py-2 rounded-full {{ request('category') === 'provincial' ? 'bg-[#F7AD12] text-black font-bold' : 'bg-white/5 border border-white/10 text-gray-400 font-medium hover:text-white hover:bg-white/10' }} text-sm transition-all duration-300">
                Provincial
            </a>
            <a href="{{ route('achievement.index', ['category' => 'national']) }}" class="px-5 py-2 rounded-full {{ request('category') === 'national' ? 'bg-[#F7AD12] text-black font-bold' : 'bg-white/5 border border-white/10 text-gray-400 font-medium hover:text-white hover:bg-white/10' }} text-sm transition-all duration-300">
                National
            </a>
        </div>

        {{-- Certificates Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @forelse($achievements ?? [] as $ach)
            <div class="group relative rounded-3xl overflow-hidden bg-[#101524]/60 backdrop-blur-md border border-white/10 hover:border-[#F7AD12]/40 transition-all duration-500 shadow-lg hover:shadow-[0_0_30px_rgba(247,173,18,0.15)] flex flex-col h-full transform hover:-translate-y-2">
                {{-- Diagonal glowing accent inside the card --}}
                <div class="absolute inset-0 bg-gradient-to-tr from-[#F7AD12]/5 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

                {{-- Certificate Preview Container --}}
                <div class="relative w-full aspect-[4/3] overflow-hidden bg-[#020636] p-4 shrink-0">
                    <div class="absolute top-2 right-2 bg-[#F7AD12] px-3 py-1 rounded-full z-10 shadow-lg">
                        <span class="text-black text-xs font-black">{{ $ach->year }}</span>
                    </div>

                    {{-- Document/Certificate Visual --}}
                    <div class="w-full h-full rounded-2xl overflow-hidden relative shadow-[0_4px_20px_rgba(0,0,0,0.5)] border border-white/5 bg-[#123B7A]/20 transition-all duration-500">
                        @if($ach->image && \Illuminate\Support\Str::endsWith($ach->image, '.pdf'))
                            {{-- PDF Preview --}}
                            <div class="w-full h-full relative group/pdf">
                                <iframe src="{{ asset('storage/' . $ach->image) }}#toolbar=0&navpanes=0&scrollbar=0" class="w-full h-full pointer-events-none scale-110" frameborder="0"></iframe>
                                <div class="absolute inset-0 bg-gradient-to-t from-[#020636]/80 via-transparent to-transparent opacity-60"></div>
                            </div>
                        @else
                            {{-- Fallback image if it's not a PDF --}}
                            <img src="{{ asset('storage/' . $ach->image) }}" class="w-full h-full object-cover rounded-xl grayscale-[20%] group-hover:grayscale-0 transition-all duration-500">
                        @endif

                        {{-- Subtle inner glow on image --}}
                        <div class="absolute inset-0 shadow-[inset_0_0_40px_rgba(0,0,0,0.4)] pointer-events-none"></div>
                    </div>
                </div>

                {{-- Content Details --}}
                <div class="p-8 flex-grow flex flex-col justify-between">
                    <div>
                        <div class="inline-flex items-center gap-2 text-[10px] text-[#71A2CF] font-black uppercase tracking-widest mb-4">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            {{ $ach->category }}
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4 group-hover:text-[#F7AD12] transition-colors leading-tight" style="font-family: 'Poppins', sans-serif;">
                            {{ $ach->title }}
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed mb-6 line-clamp-3">
                            {{ $ach->description }}
                        </p>
                    </div>

                    <div class="mt-auto pt-6 border-t border-white/5">
                        <a href="{{ asset('storage/' . $ach->image) }}" target="_blank" class="flex items-center justify-between text-sm text-gray-300 hover:text-[#F7AD12] transition-all group/btn w-full">
                            <span class="font-bold tracking-tight">View Certificate</span>
                            <div class="w-8 h-8 rounded-full border border-white/10 flex items-center justify-center group-hover/btn:border-[#F7AD12]/50 group-hover/btn:bg-[#F7AD12]/10 transform transition-all">
                                <svg class="w-4 h-4 transform group-hover/btn:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-20 text-center bg-[#101524]/60 rounded-3xl border border-white/10">
                <p class="text-gray-400 font-medium">No accomplishments recorded yet. We're still building our track record!</p>
            </div>
            @endforelse

        </div>

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
