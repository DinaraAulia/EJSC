{{--
    SECTION: Our Space (Gallery)
    Variables yang diharapkan: $galeris (Collection<Galeri> with fotos)
--}}
<section class="py-16 bg-[#020636]/20">
    <div class="max-w-7xl mx-auto px-4 md:px-6">

        <div class="flex items-end justify-between mb-10">
            <div>
                <p class="text-[#71A2CF] text-xs uppercase tracking-widest mb-2">Galeri</p>
                <h2 class="text-2xl md:text-3xl font-black text-white" style="font-family: 'Poppins', sans-serif;">
                    Our Space
                </h2>
            </div>
            <a href="{{ route('ruangan.index') }}"
               class="border border-[#71A2CF] text-[#71A2CF] font-semibold px-4 py-2 rounded-full text-xs hover:bg-[#71A2CF] hover:text-[#01031C] transition-all hidden sm:inline-flex items-center gap-1">
                Lihat Semua
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
            @forelse($galeris as $galeri)
            <div class="relative group rounded-xl overflow-hidden aspect-square cursor-pointer">
                @if($galeri->fotos->first())
                <img src="{{ asset('storage/' . $galeri->fotos->first()->path_foto) }}"
                     alt="{{ $galeri->judul }}"
                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                @else
                <div class="w-full h-full bg-[#123B7A]/30 flex items-center justify-center">
                    <svg class="w-8 h-8 text-[#123B7A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                @endif
                <div class="absolute inset-0 bg-gradient-to-t from-[#01031C]/80 via-transparent to-transparent
                            opacity-0 group-hover:opacity-100 transition-opacity p-4 flex flex-col justify-end">
                    <p class="text-white text-sm font-semibold">{{ $galeri->judul }}</p>
                    <p class="text-gray-300 text-xs">{{ \Carbon\Carbon::parse($galeri->tanggal)->isoFormat('D MMM YYYY') }}</p>
                </div>
            </div>
            @empty
            {{-- Placeholder 4 foto jika belum ada data --}}
            @php
            $placeholders = [
                ['img' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=400&q=80', 'label' => 'Co-working Area'],
                ['img' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=400&q=80', 'label' => 'Private Office'],
                ['img' => 'https://images.unsplash.com/photo-1497366811353-6870744d04b2?w=400&q=80', 'label' => 'Meeting Room'],
                ['img' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=400&q=80', 'label' => 'Event Space'],
            ];
            @endphp
            @foreach($placeholders as $item)
            <div class="relative group rounded-xl overflow-hidden aspect-square cursor-pointer">
                <img src="{{ $item['img'] }}"
                     alt="{{ $item['label'] }}"
                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-[#01031C]/80 via-[#01031C]/20 to-transparent p-3 flex flex-col justify-end">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-white text-xs font-semibold">{{ $item['label'] }}</p>
                            <p class="text-gray-400 text-xs">08:00 – 22:00</p>
                        </div>
                        <button class="w-6 h-6 bg-[#F7AD12] rounded-full flex items-center justify-center shrink-0
                                       opacity-0 group-hover:opacity-100 transition-opacity">
                            <svg class="w-3 h-3 text-[#01031C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
            @endforelse
        </div>

        {{-- Mobile: Tombol lihat semua --}}
        <div class="text-center mt-6 sm:hidden">
            <a href="{{ route('ruangan.index') }}"
               class="border border-[#71A2CF] text-[#71A2CF] font-semibold px-6 py-2.5 rounded-full text-sm hover:bg-[#71A2CF] hover:text-[#01031C] transition-all inline-flex items-center gap-1">
                Lihat Semua Ruangan
            </a>
        </div>

    </div>
</section>
