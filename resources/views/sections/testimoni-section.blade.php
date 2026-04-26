<style>
    /* Memastikan wrapper menggunakan flexbox */
    .testimoniSwiper .swiper-wrapper {
        display: flex;
    }

    /* Memastikan setiap slide memiliki tinggi yang sama sesuai slide tertinggi */
    .testimoniSwiper .swiper-slide {
        height: auto !important; /* Gunakan !important jika tertimpa style default swiper */
        display: flex;
    }
    
    /* Warna pagination agar senada dengan EJSC */
    .testimoniSwiper .swiper-pagination-bullet {
        background: #123B7A;
        opacity: 0.5;
    }
    .testimoniSwiper .swiper-pagination-bullet-active {
        background: #F7AD12;
        opacity: 1;
    }
</style>

<section id="review" class="py-16 bg-[#020636]/10">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        
        <div class="mb-10 text-center">
            <p class="text-[#71A2CF] px-3 py-5 text-xs uppercase tracking-widest font-bold">Review</p>
            <h2 class="text-2xl md:text-3xl font-bold text-white" style="font-family: 'Poppins', sans-serif;">
                What They <span class="opacity-50">Say</span>
            </h2>
        </div>

        {{-- Swiper Container --}}
        <div class="swiper testimoniSwiper overflow-hidden">
            <div class="swiper-wrapper mb-12">
                @forelse($testimonis as $t)
                <div class="swiper-slide"> {{-- Hapus h-auto di sini --}}
                    <div class="bg-[#020636] border border-[#123B7A]/40 rounded-2xl p-6 w-full flex flex-col">
                        {{-- Rating stars --}}
                        <div class="flex items-center gap-1 mb-4">
                            @for($s = 1; $s <= 5; $s++)
                            <svg class="w-4 h-4 {{ (int)$t->rating >= $s ? 'text-[#F7AD12]' : 'text-gray-600' }}" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            @endfor
                        </div>

                        {{-- Isi Ulasan - flex-grow sangat penting di sini --}}
                        <p class="text-gray-300 text-sm leading-relaxed mb-6 flex-grow italic">
                            "{{ $t->detail_ulasan }}"
                        </p>

                        {{-- Footer Kartu --}}
                        <div class="flex items-center gap-3 pt-4 border-t border-[#123B7A]/30">
                            <div class="w-9 h-9 bg-[#123B7A] rounded-full flex items-center justify-center text-sm font-bold text-white shrink-0">
                                {{ strtoupper(substr($t->nama_pengulas, 0, 1)) }}
                            </div>
                            <div class="overflow-hidden">
                                <p class="text-white font-semibold text-sm truncate">{{ $t->nama_pengulas }}</p>
                                <p class="text-gray-500 text-xs">{{ \Carbon\Carbon::parse($t->tgl_ulasan)->isoFormat('D MMM YYYY') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                {{-- Placeholder loop sama seperti di atas, gunakan struktur slide yang sama --}}
                @foreach([
                    ['name' => 'Budi Santoso', 'rating' => 5, 'text' => 'EJSC adalah tempat terbaik untuk bekerja. Ruangannya nyaman dan suasananya mendukung produktivitas tinggi.'],
                    ['name' => 'Siti Rahma', 'rating' => 5, 'text' => 'Sangat merekomendasikan untuk acara perusahaan. Event space yang luas dan tim yang profesional.'],
                    ['name' => 'Ahmad Fauzi', 'rating' => 4, 'text' => 'Hot desk yang nyaman dengan koneksi internet super cepat.'],
                    ['name' => 'Dewi Lestari', 'rating' => 5, 'text' => 'Tempatnya keren banget buat meeting santai.']
                ] as $t)
                <div class="swiper-slide h-auto">
                    <div class="bg-[#020636] border border-[#123B7A]/40 rounded-2xl p-6 h-full flex flex-col">
                        <div class="flex items-center gap-1 mb-4">
                            @for($s = 1; $s <= 5; $s++)
                            <svg class="w-4 h-4 {{ $t['rating'] >= $s ? 'text-[#F7AD12]' : 'text-gray-600' }}" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            @endfor
                        </div>
                        <p class="text-gray-300 text-sm leading-relaxed mb-6 flex-grow italic">"{{ $t['text'] }}"</p>
                        <div class="flex items-center gap-3 pt-4 border-t border-[#123B7A]/30">
                            <div class="w-9 h-9 bg-[#123B7A] rounded-full flex items-center justify-center text-sm font-bold text-white shrink-0">
                                {{ strtoupper(substr($t['name'], 0, 1)) }}
                            </div>
                            <p class="text-white font-semibold text-sm">{{ $t['name'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforelse
            </div>
            
            {{-- Pagination Dot --}}
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var testimoniSwiper = new Swiper(".testimoniSwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            // Responsive breakpoints
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    });
</script>