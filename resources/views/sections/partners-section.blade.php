{{--
    SECTION: Partners
    Diubah menggunakan logo statis Logo1 - Logo14 dengan efek marquee/continuous scroll.
--}}
<section class="py-12 border-y border-[#123B7A]/20 bg-[#020636]/30 overflow-hidden relative">
    <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10">
        <h2 class="text-2xl md:text-3xl font-bold text-white text-center mb-8" style="font-family: 'Poppins', sans-serif;">
            Our <span class="opacity-50">Partners</span>
        </h2>
    </div>

    {{-- Marquee Wrapper --}}
    <div class="relative flex overflow-x-hidden group">
        {{-- Seamless continuous loop track --}}
        <div class="animate-marquee flex items-center gap-12 sm:gap-16 w-max whitespace-nowrap pl-12 sm:pl-16 group-hover:pause">
            
            {{-- Original List --}}
            @foreach(range(1, 14) as $i)
                <img src="{{ asset('images/Logo' . $i . '.png') }}" 
                     alt="Partner {{ $i }}" 
                     loading="lazy"
                     class="h-12 md:h-16 w-auto object-contain max-w-[150px]
                            grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
            @endforeach
            
            {{-- Duplicated List for seamless effect --}}
            @foreach(range(1, 14) as $i)
                <img src="{{ asset('images/Logo' . $i . '.png') }}" 
                     alt="Partner {{ $i }}" 
                     loading="lazy"
                     class="h-12 md:h-16 w-auto object-contain max-w-[150px]
                            grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
            @endforeach
            
        </div>
    </div>
</section>

<style>
    /* CSS for auto-scrolling seamless marquee */
    @keyframes scroll-left {
        0% { transform: translateX(0%); }
        100% { transform: translateX(-50%); } 
        /* Bergerak minus 50% dari total width kontainer yang berisi dua list agar transisinya persis mulus karena konten duplikat menutupi ruang kosong yang ditinggalkan konten ori. */
    }
    .animate-marquee {
        animation: scroll-left 45s linear infinite;
    }
    .pause {
        animation-play-state: paused;
    }
</style>
