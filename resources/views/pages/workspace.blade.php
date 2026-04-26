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

                <div class="flex flex-wrap items-center gap-6 text-sm">
                    @if($ruangan->kapasitas)
                    <div class="flex items-center gap-2 text-gray-400">
                        <svg class="w-5 h-5 text-[#71A2CF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>Capacity: <strong class="text-white">{{ $ruangan->kapasitas }} Seats</strong></span>
                    </div>
                    @endif

                    @if($ruangan->wifi_speed)
                    <div class="flex items-center gap-2 text-gray-400">
                        <svg class="w-5 h-5 text-[#F7AD12]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.906 14.142 0M1.394 9.393c5.857-5.857 15.355-5.858 21.213 0" />
                        </svg>
                        <span>Wi-Fi: <strong class="text-white">{{ $ruangan->wifi_speed }}</strong></span>
                    </div>
                    @endif

                    @if($ruangan->luas)
                    <div class="flex items-center gap-2 text-gray-400">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                        </svg>
                        <span>Area: <strong class="text-white">{{ $ruangan->luas }} m²</strong></span>
                    </div>
                    @endif
                </div>
            </div>

            {{-- Right Image --}}
            <div class="relative h-64 md:h-80 rounded-2xl overflow-hidden border border-[#123B7A]/50 shadow-2xl">
                <img src="{{ $ruangan->gambar ? Storage::disk('public')->url($ruangan->gambar) : 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800&q=80' }}" alt="{{ $ruangan->nama_ruangan }}" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
            </div>
        </div>

        {{-- Full Description Section --}}
        @if($ruangan->deskripsi_panjang)
        <div class="bg-[#123B7A]/10 border border-[#123B7A]/30 rounded-2xl p-6 md:p-8 mb-16 backdrop-blur-sm ProseMirror prose prose-invert max-w-none prose-p:text-gray-300 prose-headings:text-white prose-a:text-[#F7AD12]">
            <h3 class="text-xl font-bold text-white mb-6 uppercase tracking-wider flex items-center gap-2">
                <svg class="w-6 h-6 text-[#71A2CF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Room Details
            </h3>
            <div class="text-gray-300 text-sm leading-relaxed">
                {!! $ruangan->deskripsi_panjang !!}
            </div>
        </div>
        @endif

        {{-- Booking History Section --}}
        <div class="bg-[#020636] border border-[#123B7A]/40 rounded-2xl overflow-hidden">
            <div class="px-6 py-5 border-b border-[#123B7A]/40 flex flex-wrap items-center justify-between gap-4">
                <h3 class="text-xl font-bold text-white uppercase tracking-wider">Booking History</h3>
                <a href="{{ route('peminjaman.create') }}" target="_blank" class="bg-[#F7AD12] text-[#01031C] text-xs font-bold px-4 py-2 rounded-full hover:brightness-110 transition-colors">
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
                                if ($peminjaman->status === 'approved') {
                                    $statusClass = 'bg-green-500/10 text-green-400 border border-green-500/20';
                                    $statusText = 'Approved';
                                } elseif ($peminjaman->status === 'rejected') {
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
