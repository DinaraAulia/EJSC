{{--
    SECTION: Testimoni
    Variables yang diharapkan: $testimonis (Collection<Testimoni>)
--}}
<section class="py-16 max-w-7xl mx-auto px-4 md:px-6">

    <div class="mb-10 text-center">
        <p class="text-[#71A2CF] text-xs uppercase tracking-widest mb-2">Review</p>
        <h2 class="text-2xl md:text-3xl font-black text-white" style="font-family: 'Poppins', sans-serif;">
            What They Say
        </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @forelse($testimonis as $t)
        <div class="bg-[#020636] border border-[#123B7A]/40 rounded-2xl p-5">
            {{-- Rating stars --}}
            <div class="flex items-center gap-1 mb-3">
                @for($s = 1; $s <= 5; $s++)
                <svg class="w-4 h-4 {{ (int)$t->rating >= $s ? 'text-[#F7AD12]' : 'text-gray-600' }}"
                     fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                @endfor
            </div>
            <p class="text-gray-300 text-sm leading-relaxed mb-4">"{{ $t->detail_ulasan }}"</p>
            <div class="flex items-center gap-2 pt-3 border-t border-[#123B7A]/20">
                <div class="w-7 h-7 bg-[#123B7A] rounded-full flex items-center justify-center text-xs font-bold text-white">
                    {{ strtoupper(substr($t->nama_pengulas, 0, 1)) }}
                </div>
                <div>
                    <p class="text-white font-semibold text-xs">{{ $t->nama_pengulas }}</p>
                    <p class="text-gray-500 text-xs">{{ \Carbon\Carbon::parse($t->tgl_ulasan)->isoFormat('D MMM YYYY') }}</p>
                </div>
            </div>
        </div>
        @empty
        {{-- Placeholder testimoni --}}
        @foreach([
            ['name' => 'Budi Santoso', 'rating' => 5, 'text' => 'EJSC adalah tempat terbaik untuk bekerja. Fasilitas lengkap dan suasananya mendukung produktivitas tinggi.'],
            ['name' => 'Siti Rahma', 'rating' => 5, 'text' => 'Sangat merekomendasikan untuk acara perusahaan. Event space yang luas dan tim yang profesional.'],
            ['name' => 'Ahmad Fauzi', 'rating' => 4, 'text' => 'Hot desk yang nyaman dengan koneksi internet super cepat. Rekomendasi untuk para remote worker!'],
        ] as $t)
        <div class="bg-[#020636] border border-[#123B7A]/40 rounded-2xl p-5">
            <div class="flex items-center gap-1 mb-3">
                @for($s = 1; $s <= 5; $s++)
                <svg class="w-4 h-4 {{ $t['rating'] >= $s ? 'text-[#F7AD12]' : 'text-gray-600' }}" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                @endfor
            </div>
            <p class="text-gray-300 text-sm leading-relaxed mb-4">"{{ $t['text'] }}"</p>
            <div class="flex items-center gap-2 pt-3 border-t border-[#123B7A]/20">
                <div class="w-7 h-7 bg-[#123B7A] rounded-full flex items-center justify-center text-xs font-bold text-white">
                    {{ strtoupper(substr($t['name'], 0, 1)) }}
                </div>
                <p class="text-white font-semibold text-xs">{{ $t['name'] }}</p>
            </div>
        </div>
        @endforeach
        @endforelse
    </div>

</section>
