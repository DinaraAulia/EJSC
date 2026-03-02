@extends('layouts.app')

@section('title', $ruangan->nama_ruangan . ' - EJSC Bakorwil III Malang')

@section('content')
<div class="bg-[#01031C] min-h-screen pt-24 pb-16 relative">
    {{-- Background glows --}}
    <div class="absolute inset-0 pointer-events-none opacity-50">
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-[#123B7A]/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 left-1/4 w-64 h-64 bg-[#F7AD12]/5 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10">

        {{-- Back Link --}}
        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-[#71A2CF] hover:text-[#F7AD12] text-sm font-medium transition-colors mb-8">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Home
        </a>

        {{-- Workspace Header --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center mb-16">
            <div>
                <span class="inline-flex items-center gap-2 bg-[#F7AD12]/10 border border-[#F7AD12]/30 text-[#F7AD12] text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-4">
                    Workspace Detail
                </span>
                <h1 class="text-3xl md:text-5xl font-black text-white leading-tight uppercase mb-4" style="font-family: 'Poppins', sans-serif;">
                    {{ $ruangan->nama_ruangan }}
                </h1>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-6">
                    {{ $ruangan->deskripsi ?? 'No description available for this workspace.' }}
                </p>

                <div class="flex items-center gap-6 text-sm">
                    <div class="flex items-center gap-2 text-gray-400">
                        <svg class="w-5 h-5 text-[#71A2CF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>Capacity: <strong class="text-white">{{ $ruangan->kapasitas }} Seats</strong></span>
                    </div>
                </div>
            </div>

            {{-- Right Image --}}
            <div class="relative h-64 md:h-80 rounded-2xl overflow-hidden border border-[#123B7A]/50 shadow-2xl">
                {{-- Fallback image just to look nice --}}
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800&q=80" alt="{{ $ruangan->nama_ruangan }}" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
            </div>
        </div>

        {{-- Facilities Section --}}
        @if($ruangan->fasilitas && $ruangan->fasilitas->count() > 0)
        <div class="bg-[#123B7A]/10 border border-[#123B7A]/30 rounded-2xl p-6 md:p-8 mb-16 backdrop-blur-sm">
            <h3 class="text-xl font-bold text-white mb-6 uppercase tracking-wider">Facilities</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                @foreach($ruangan->fasilitas as $fasilitas)
                <div class="flex items-center gap-3 bg-[#01031C]/50 border border-white/5 p-3 rounded-xl">
                    <div class="w-8 h-8 rounded-lg bg-[#71A2CF]/10 flex items-center justify-center flex-shrink-0 text-[#71A2CF]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <span class="text-xs font-medium text-gray-300">{{ $fasilitas->nama_fasilitas }}</span>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        {{-- Booking History Section --}}
        <div class="bg-[#020636] border border-[#123B7A]/40 rounded-2xl overflow-hidden">
            <div class="px-6 py-5 border-b border-[#123B7A]/40 flex flex-wrap items-center justify-between gap-4">
                <h3 class="text-xl font-bold text-white uppercase tracking-wider">Booking History</h3>
                <a href="{{ route('peminjaman.create') }}" class="bg-[#F7AD12] text-[#01031C] text-xs font-bold px-4 py-2 rounded-full hover:brightness-110 transition-colors">
                    Book This Space
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-400">
                    <thead class="text-xs text-[#71A2CF] uppercase bg-[#123B7A]/20 border-b border-[#123B7A]/40">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-semibold">Event Name</th>
                            <th scope="col" class="px-6 py-4 font-semibold">Institution</th>
                            <th scope="col" class="px-6 py-4 font-semibold">Date</th>
                            <th scope="col" class="px-6 py-4 font-semibold">Time</th>
                            <th scope="col" class="px-6 py-4 font-semibold">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($ruangan->peminjamans as $peminjaman)
                            @php
                                $statusClass = '';
                                $statusText = '';
                                if ($peminjaman->status === true || $peminjaman->status === 1) {
                                    $statusClass = 'bg-green-500/10 text-green-400 border border-green-500/20';
                                    $statusText = 'Approved';
                                } elseif ($peminjaman->status === false || $peminjaman->status === 0) {
                                    $statusClass = 'bg-red-500/10 text-red-400 border border-red-500/20';
                                    $statusText = 'Rejected';
                                } else {
                                    $statusClass = 'bg-[#F7AD12]/10 text-[#F7AD12] border border-[#F7AD12]/20';
                                    $statusText = 'Pending';
                                }
                            @endphp
                        <tr class="border-b border-[#123B7A]/20 hover:bg-[#123B7A]/10 transition-colors">
                            <td class="px-6 py-4 font-medium text-white">
                                {{ $peminjaman->nama_kegiatan }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $peminjaman->instansi }}
                            </td>
                            <td class="px-6 py-4">
                                {{ \Carbon\Carbon::parse($peminjaman->tgl_penggunaan)->format('d M Y') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ \Carbon\Carbon::parse($peminjaman->jam_mulai)->format('H:i') }} -
                                {{ \Carbon\Carbon::parse($peminjaman->jam_berakhir)->format('H:i') }}
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-2.5 py-1 text-xs font-semibold rounded-full {{ $statusClass }}">
                                    {{ $statusText }}
                                </span>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                                <div class="flex flex-col items-center justify-center">
                                    <svg class="w-8 h-8 mb-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <p>No booking history found for this workspace.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
