{{--
    SECTION: Partners
    Variables yang diharapkan: $partners (Collection<Partner>)
--}}
<section class="py-12 border-y border-[#123B7A]/20 bg-[#020636]/30">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <h2 class="text-2xl font-bold text-white text-center mb-8" style="font-family: 'Poppins', sans-serif;">
            Our Partners
        </h2>

        <div class="flex flex-wrap items-center justify-center gap-8 md:gap-16">
            @forelse($partners as $partner)
            <div class="opacity-50 hover:opacity-100 transition-opacity">
                @if($partner->logo)
                    <img src="{{ asset('storage/' . $partner->logo) }}"
                         alt="{{ $partner->nama_mitra }}"
                         class="h-8 object-contain grayscale hover:grayscale-0 transition-all">
                @else
                    <div class="bg-[#123B7A]/20 border border-[#123B7A]/30 rounded-lg px-5 py-2">
                        <p class="text-gray-300 text-xs font-semibold">{{ $partner->nama_mitra }}</p>
                    </div>
                @endif
            </div>
            @empty
            {{-- Placeholder jika belum ada data --}}
            @foreach(['Partner A', 'Partner B', 'Partner C', 'Partner D', 'Partner E'] as $p)
            <div class="opacity-40 hover:opacity-80 transition-opacity bg-[#123B7A]/20 border border-[#123B7A]/30 rounded-lg px-5 py-2">
                <p class="text-gray-300 text-xs font-semibold">{{ $p }}</p>
            </div>
            @endforeach
            @endforelse
        </div>
    </div>
</section>
