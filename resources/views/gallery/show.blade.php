@extends('layouts.app')

@section('title', $galeri->judul . ' - EJSC Gallery')
@section('description', 'Detail dokumentasi acara: ' . $galeri->judul)

@section('content')
<main class="bg-[#0a0f1c] min-h-screen pt-24 pb-16 font-sans relative overflow-hidden">
    <!-- Background Glow -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-0 right-1/4 w-[30rem] h-[30rem] bg-[#123B7A]/30 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-1/4 left-1/4 w-[25rem] h-[25rem] bg-[#F7AD12]/10 rounded-full blur-[120px]"></div>
    </div>

    <!-- Enhanced Grid Pattern -->
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_0%,#000_80%,transparent_100%)] z-0 pointer-events-none"></div>

    <section class="max-w-7xl mx-auto px-4 md:px-6 relative z-10">

        <div class="text-center mt-5 md:text-left mb-12">
            <h1 class="text-2xl md:text-3xl font-black text-white mb-4" style="font-family: 'Poppins', sans-serif;">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">EJSC</span> Gallery
            </h1>
        </div>

        <!-- Penjelasan Kegiatan Layout -->
        <article class="bg-[#101524]/60 backdrop-blur-xl rounded-3xl border border-white/10 p-5 md:p-8 shadow-2xl mb-10">
            <header class="mb-8 border-b border-white/10 pb-6 flex flex-col md:flex-row gap-5 items-start md:items-center justify-between">
                <div class="flex-1">
                    <div class="flex items-center gap-3 text-sm text-[#71A2CF] font-semibold tracking-wider uppercase mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>{{ \Carbon\Carbon::parse($galeri->tanggal)->isoFormat('D MMMM YYYY') }}</span>
                    </div>
                    <h1 class="text-2xl md:text-3xl lg:text-4xl font-black text-white leading-tight" style="font-family: 'Poppins', sans-serif;">
                        {{ $galeri->judul }}
                    </h1>
                </div>

                <div class="w-full md:w-36 bg-[#020636]/50 rounded-2xl p-4 border border-white/5 text-left md:text-right shrink-0">
                    <p class="text-gray-400 text-xs mb-1">Total Dokumentasi</p>
                    <p class="text-[#123B7A] text-xl md:text-2xl font-bold">{{ count($galeri->album_fotos ?? []) }} <span class="text-sm font-medium text-gray-300">Foto</span></p>
                </div>
            </header>

            @if($galeri->deskripsi)
            <div class="prose prose-invert prose-lg max-w-none">
                <div class="bg-[#123B7A]/10 border-l-4 border-[#71A2CF] p-5 rounded-r-2xl mb-6">
                    <p class="text-gray-300 leading-relaxed text-sm md:text-base m-0">
                        {{ $galeri->deskripsi }}
                    </p>
                </div>
            </div>
            @endif
        </article>

        <h3 class="text-xl md:text-2xl font-bold text-white mb-6 flex items-center gap-3">
            <span class="w-8 h-1 bg-[#71A2CF] rounded-full inline-block"></span>
            Documentation Album
        </h3>

        {{-- Photos Masonry Style Grid --}}
        <div class="columns-2 sm:columns-3 lg:columns-4 gap-4 space-y-4">
            @forelse($galeri->album_fotos ?? [] as $index => $path)
                @php
                    $isExternal = \Illuminate\Support\Str::startsWith($path, 'http');
                    $imgSrc = $isExternal ? $path : asset('storage/' . $path);
                @endphp
                <div class="relative group rounded-xl overflow-hidden cursor-zoom-in break-inside-avoid border border-white/5 bg-[#020636] shadow-xl" onclick="openLightbox('{{ $imgSrc }}')">
                    <img src="{{ $imgSrc }}" alt="Dokumentasi {{ $galeri->judul }}" loading="lazy" class="w-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#01031C]/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center p-4">
                        <span class="text-white/90 font-medium text-sm border-b border-[#F7AD12] pb-0.5 pointer-events-none">Perbesar Gambar</span>
                    </div>
                </div>
            @empty
                <div class="col-span-1 sm:col-span-2 lg:col-span-3 text-center py-10 bg-white/5 rounded-2xl border border-white/10">
                    <p class="text-gray-400">Belum ada foto dokumentasi di dalam galeri ini.</p>
                </div>
            @endforelse
        </div>
    </section>

    {{-- Lightbox Modal --}}
    <div id="lightbox" class="fixed inset-0 z-[100] bg-[#01031c]/95 backdrop-blur-md hidden flex-col items-center justify-center">
        <button onclick="closeLightbox()" class="absolute top-6 right-6 text-white/50 hover:text-white bg-white/10 hover:bg-white/20 p-3 rounded-full transition-all focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
        <img id="lightbox-img" src="" class="max-w-[90vw] max-h-[85vh] object-contain rounded-xl shadow-2xl border border-white/10 transform scale-95 transition-transform duration-300" alt="Expanded image">
    </div>
</main>

<script>
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');

    function openLightbox(src) {
        lightboxImg.src = src;
        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex');
        document.body.style.overflow = 'hidden';

        setTimeout(() => {
            lightboxImg.classList.remove('scale-95');
            lightboxImg.classList.add('scale-100');
        }, 10);
    }

    function closeLightbox() {
        lightboxImg.classList.remove('scale-100');
        lightboxImg.classList.add('scale-95');

        setTimeout(() => {
            lightbox.classList.add('hidden');
            lightbox.classList.remove('flex');
            document.body.style.overflow = '';
        }, 200);
    }

    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) {
            closeLightbox();
        }
    });
</script>
@endsection
