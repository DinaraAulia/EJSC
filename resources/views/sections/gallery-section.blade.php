{{--
    SECTION: Our Space (Gallery)
    Variables yang diharapkan: $galeris (Collection<Galeri> with fotos)
--}}
<section class="py-8 bg-[#020636]/20">
    <div class="max-w-7xl mx-auto px-4 md:px-6">

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .swiper-container {
            width: 100%;
            padding-top: 30px;
            padding-bottom: 30px;
            overflow: hidden;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 250px;
            height: 320px;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease;
        }

        @media (min-width: 768px) {
            .swiper-slide {
                width: 320px;
                height: 380px;
            }
        }

        /* Hover Overlay styles */
        .slide-overlay {
            position: absolute;
            bottom: -100%;
            left: 0;
            width: 100%;
            padding: 2rem;
            background: linear-gradient(to top, rgba(1, 3, 28, 0.95) 0%, rgba(1, 3, 28, 0.7) 40%, transparent 100%);
            transition: bottom 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            text-align: center;
            height: 100%;
            pointer-events: none;
        }

        /* ONLY show hover effect if the slide is the ACTIVE (center) slide */
        .swiper-slide-active:hover .slide-overlay {
            bottom: 0;
            pointer-events: auto;
        }

        .swiper-slide-active {
            cursor: pointer;
        }
    </style>
@endpush

        <div class="flex items-end justify-between mb-1 md:mb-6"></div>
             <div class="w-full text-center">
                <p class="text-[#71A2CF] text-xs uppercase tracking-widest font-bold mb-2">GALLERY</p>
                <h2 class="text-2xl md:text-4xl font-black text-white" style="font-family: 'Poppins', sans-serif;">
                    My Visual Diary
                </h2>
                <p class="text-gray-400 mt-2 text-sm max-w-lg mx-auto">
                    See the world through our lens: adventures and events in photos
                </p>
        </div>

        {{-- Swiper Carousel --}}
        <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">

                @forelse($galeris as $galeri)
                <div class="swiper-slide group">
                    @if($galeri->fotos->first())
                    <img src="{{ asset('storage/' . $galeri->fotos->first()->path_foto) }}" class="w-full h-full object-cover">
                    @else
                    <div class="w-full h-full flex items-center justify-center bg-[#123B7A]/30">
                        <svg class="w-9 h-9 text-[#71A2CF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    @endif

                    {{-- Hidden Overlay (Fades up on active hover) --}}
                    <div class="slide-overlay">
                        <h3 class="text-xl md:text-2xl font-bold text-white mb-2">{{ $galeri->judul }}</h3>
                        <p class="text-[#F7AD12] text-xs font-semibold uppercase tracking-widest">{{ \Carbon\Carbon::parse($galeri->tanggal)->isoFormat('D MMM YYYY') }}</p>
                    </div>
                </div>
                @empty

                {{-- Fallback Placeholders --}}
                @php
                $placeholders = [
                    ['img' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&q=80', 'title' => 'Startup Networking Night'],
                    ['img' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=600&q=80', 'title' => 'Digital Marketing Workshop'],
                    ['img' => 'https://images.unsplash.com/photo-1497366811353-6870744d04b2?w=600&q=80', 'title' => 'UI/UX Design Bootcamp'],
                    ['img' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&q=80', 'title' => 'Web Development Seminar'],
                    ['img' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600&q=80', 'title' => 'Co-working Collaboration'],
                    ['img' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=600&q=80', 'title' => 'Creative Pitch Deck'],
                    ['img' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&q=80', 'title' => 'Leadership Masterclass'],
                    ['img' => 'https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=600&q=80', 'title' => 'Annual Strategy Meeting'],
                ];
                @endphp
                @foreach($placeholders as $item)
                <div class="swiper-slide group">
                    <img src="{{ $item['img'] }}" class="w-full h-full object-cover">

                    <div class="slide-overlay">
                        <h3 class="text-lg md:text-xl font-bold text-white mb-2">{{ $item['title'] }}</h3>
                        <p class="text-[#F7AD12] text-xs font-semibold uppercase tracking-widest">{{ now()->subDays(rand(1,60))->format('d M Y') }}</p>
                        <p class="text-gray-300 text-xs mt-3 opacity-0 group-hover:opacity-100 transition-opacity duration-700 delay-100">Click to explore the gallery</p>
                    </div>
                </div>
                @endforeach
                @endforelse

            </div>
        </div>

        {{-- Navigation / Pagination Area --}}
        <div class="flex items-center justify-center gap-5 mt-4">
            <button class="swiper-button-prev-custom w-12 h-12 rounded-full border-2 border-white flex items-center justify-center text-white hover:bg-white hover:text-black transition-colors focus:outline-none focus:ring-2 focus:ring-[#F7AD12]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
            </button>
            <button class="swiper-button-next-custom w-12 h-12 rounded-full border-2 border-white flex items-center justify-center text-white hover:bg-white hover:text-black transition-colors focus:outline-none focus:ring-2 focus:ring-[#F7AD12]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            </button>
        </div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper(".mySwiper", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                coverflowEffect: {
                    rotate: 0,
                    stretch: 0,
                    depth: 100,
                    modifier: 2,
                    slideShadows: true,
                },
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true, // Pauses sliding when hovering providing time to read
                },
                loop: true,
                navigation: {
                    nextEl: ".swiper-button-next-custom",
                    prevEl: ".swiper-button-prev-custom",
                },
            });
        });
    </script>
@endpush

    </div>
</section>
