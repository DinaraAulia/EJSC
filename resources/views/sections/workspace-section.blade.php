{{--
    SECTION: Workspace Solutions
    Variables yang diharapkan: (tidak ada, statis)
--}}
<section class="py-16 max-w-7xl mx-auto px-4 md:px-6">

    <div class="mb-10">
        <p class="text-[#71A2CF] text-xs uppercase tracking-widest mb-2">Pilihan Ruangan</p>
        <h2 class="text-2xl md:text-3xl font-black text-white leading-tight" style="font-family: 'Poppins', sans-serif;">
            Choose Your Perfect Work<br>
            <span class="text-[#F7AD12]">Space Solution</span>
        </h2>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-6">

        {{-- Left: Stacked images --}}
        <div class="lg:col-span-2 space-y-3">
            <div class="rounded-xl overflow-hidden h-36">
                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=600&q=80"
                     alt="Private Office"
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
            </div>
            <div class="rounded-xl overflow-hidden h-36">
                <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?w=600&q=80"
                     alt="Hot Desk"
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
            </div>
            <div class="rounded-xl overflow-hidden h-36">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&q=80"
                     alt="Event Space"
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
            </div>
        </div>

        {{-- Right: Solution cards --}}
        <div class="lg:col-span-3 space-y-4">

            {{-- Private Office --}}
            <div class="bg-[#020636] border border-[#123B7A]/40 rounded-2xl p-5 flex items-start gap-4 group hover:border-[#F7AD12]/40 transition-colors">
                <div class="flex-1 min-w-0">
                    <h3 class="text-white font-bold text-base mb-1">Private Office</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-3">
                        Ruang kantor pribadi yang eksklusif dengan privasi penuh. Cocok untuk tim kecil yang membutuhkan konsentrasi tinggi.
                    </p>
                    <a href="{{ route('ruangan.index') }}"
                       class="bg-[#F7AD12] text-[#01031C] font-semibold px-4 py-1.5 rounded-full text-xs hover:brightness-110 transition-all inline-flex items-center gap-1">
                        Selengkapnya
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
                <div class="w-24 h-20 rounded-xl overflow-hidden shrink-0">
                    <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=300&q=80"
                         alt="Private Office"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>

            {{-- Hot Desk --}}
            <div class="bg-[#020636] border border-[#123B7A]/40 rounded-2xl p-5 flex items-start gap-4 group hover:border-[#F7AD12]/40 transition-colors">
                <div class="flex-1 min-w-0">
                    <h3 class="text-white font-bold text-base mb-1">Hot Desk</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-3">
                        Meja kerja fleksibel tanpa reservasi. Ideal untuk freelancer dan remote worker yang menginginkan suasana kolaboratif.
                    </p>
                    <a href="{{ route('ruangan.index') }}"
                       class="bg-[#F7AD12] text-[#01031C] font-semibold px-4 py-1.5 rounded-full text-xs hover:brightness-110 transition-all inline-flex items-center gap-1">
                        Selengkapnya
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
                <div class="w-24 h-20 rounded-xl overflow-hidden shrink-0">
                    <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?w=300&q=80"
                         alt="Hot Desk"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>

            {{-- Event Space --}}
            <div class="bg-[#020636] border border-[#123B7A]/40 rounded-2xl p-5 flex items-start gap-4 group hover:border-[#F7AD12]/40 transition-colors">
                <div class="flex-1 min-w-0">
                    <h3 class="text-white font-bold text-base mb-1">Event Space</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-3">
                        Ruang acara kapasitas besar untuk seminar, workshop, dan gathering. Dilengkapi peralatan AV profesional.
                    </p>
                    <a href="{{ route('peminjaman.create') }}"
                       class="bg-[#F7AD12] text-[#01031C] font-semibold px-4 py-1.5 rounded-full text-xs hover:brightness-110 transition-all inline-flex items-center gap-1">
                        Book Now
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
                <div class="w-24 h-20 rounded-xl overflow-hidden shrink-0">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=300&q=80"
                         alt="Event Space"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>

        </div>
    </div>
</section>
