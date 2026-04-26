<section id="team" class="py-16 md:py-24 max-w-7xl mx-auto px-4 md:px-6">

    <div class="mb-10 text-center">
        <p class="text-[#71A2CF] px-3 py-5 text-xs uppercase tracking-widest font-bold">Team</p>
        <h2 class="text-2xl md:text-3xl font-bold text-white" style="font-family: 'Poppins', sans-serif;">
            Meet The <span class="opacity-50">Team EJSC</span>
        </h2>
    </div>

    {{-- Team Grid --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 md:gap-6 mt-12 max-w-5xl mx-auto">

        {{-- Member 1: Andhi Prasetyo --}}
        <div class="group relative rounded-2xl md:rounded-[2rem] overflow-hidden aspect-[3/4] sm:aspect-auto sm:h-[320px] lg:h-[360px] bg-[#020636] border border-[#123B7A]/40 hover:border-[#71A2CF]/50 transition-all duration-500">
            {{-- Background Gradient & Blur Effect --}}
            <div class="absolute inset-0 opacity-40 group-hover:opacity-60 transition-opacity duration-500 flex items-center justify-center">
                <div class="w-2/3 h-2/3 bg-[#F7AD12] rounded-full blur-[80px] mix-blend-screen opacity-30 transform group-hover:scale-110 group-hover:translate-x-4 transition-transform duration-700"></div>
                <div class="absolute w-1/2 h-1/2 bg-[#71A2CF] rounded-full blur-[60px] mix-blend-screen opacity-40 -translate-x-1/4 translate-y-1/4 group-hover:-translate-y-4 transition-transform duration-700"></div>
            </div>

            <div class="absolute inset-0 z-10 transition-transform duration-500 group-hover:scale-105 origin-bottom">
                 <img src="{{ asset('images/Team/AndhiPrasetyo.jpeg') }}" alt="Andhi Prasetyo" class="object-cover object-top w-full h-full">
            </div>

            {{-- Glassmorphism overlay for content --}}
            <div class="absolute inset-x-0 bottom-0 p-4 sm:p-5 md:p-6 z-20 bg-gradient-to-t from-[#020636] via-[#020636]/80 to-transparent">
                <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                    <h3 class="text-base sm:text-lg md:text-xl text-white mb-1 drop-shadow-lg leading-tight" style="font-family: 'Inter', sans-serif;">Andhi Prasetyo</h3>
                    <p class="text-gray-400 text-xs leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-200 line-clamp-2">Advisor EJSC Malang</p>
                </div>
            </div>
        </div>

        {{-- Member 2: Alief Zul Helmy --}}
        <div class="group relative rounded-2xl md:rounded-[2rem] overflow-hidden aspect-[3/4] sm:aspect-auto sm:h-[320px] lg:h-[360px] bg-[#020636] border border-[#123B7A]/40 hover:border-[#71A2CF]/50 transition-all duration-500">
            <div class="absolute inset-0 opacity-40 group-hover:opacity-60 transition-opacity duration-500 flex items-center justify-center">
                <div class="w-3/4 h-3/4 bg-[#123B7A] rounded-full blur-[80px] mix-blend-screen opacity-50 transform group-hover:scale-110 group-hover:-translate-x-4 transition-transform duration-700"></div>
                <div class="absolute w-1/2 h-1/2 bg-[#71A2CF] rounded-full blur-[60px] mix-blend-screen opacity-40 translate-x-1/4 -translate-y-1/4 group-hover:translate-y-4 transition-transform duration-700"></div>
            </div>

            <div class="absolute inset-0 z-10 transition-transform duration-500 group-hover:scale-105 origin-bottom">
                 <img src="{{ asset('images/Team/AliefZulHelmy.jpeg') }}" alt="Alief Zul Helmy" class="object-cover object-top w-full h-full">
            </div>

            <div class="absolute inset-x-0 bottom-0 p-4 sm:p-5 md:p-6 z-20 bg-gradient-to-t from-[#020636] via-[#020636]/80 to-transparent">
                <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                    <h3 class="text-base sm:text-lg md:text-xl text-white mb-1 drop-shadow-lg leading-tight" style="font-family: 'Inter', sans-serif;">Alief Zul Helmy</h3>
                    <p class="text-gray-400 text-xs leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-200 line-clamp-2">Penata Layanan Operasional</p>
                </div>
            </div>
        </div>

        {{-- Member 3: M. Ferdiansyah --}}
        <div class="group relative rounded-2xl md:rounded-[2rem] overflow-hidden aspect-[3/4] sm:aspect-auto sm:h-[320px] lg:h-[360px] bg-[#020636] border border-[#123B7A]/40 hover:border-[#71A2CF]/50 transition-all duration-500">
            <div class="absolute inset-0 opacity-40 group-hover:opacity-60 transition-opacity duration-500 flex items-center justify-center">
                <div class="w-2/3 h-2/3 bg-[#71A2CF] rounded-full blur-[80px] mix-blend-screen opacity-40 transform group-hover:scale-110 group-hover:translate-x-4 transition-transform duration-700"></div>
                <div class="absolute w-1/2 h-1/2 bg-[#F7AD12] rounded-full blur-[60px] mix-blend-screen opacity-30 -translate-x-1/2 translate-y-1/4 group-hover:-translate-y-2 transition-transform duration-700"></div>
            </div>

            <div class="absolute inset-0 z-10 transition-transform duration-500 group-hover:scale-105 origin-bottom">
                 <img src="{{ asset('images/Team/MFerdiansyah.jpeg') }}" alt="M. Ferdiansyah" class="object-cover object-top w-full h-full">
            </div>

            <div class="absolute inset-x-0 bottom-0 p-4 sm:p-5 md:p-6 z-20 bg-gradient-to-t from-[#020636] via-[#020636]/80 to-transparent">
                <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                    <h3 class="text-base sm:text-lg md:text-xl text-white mb-1 drop-shadow-lg leading-tight" style="font-family: 'Inter', sans-serif;">M. Ferdiansyah</h3>
                    <p class="text-gray-400 text-xs leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-200 line-clamp-2">Penata Layanan Operasional</p>
                </div>
            </div>
        </div>

        {{-- Member 4: Rizka Amalia --}}
        <div class="group relative rounded-2xl md:rounded-[2rem] overflow-hidden aspect-[3/4] sm:aspect-auto sm:h-[320px] lg:h-[360px] bg-[#020636] border border-[#123B7A]/40 hover:border-[#71A2CF]/50 transition-all duration-500">
            <div class="absolute inset-0 opacity-40 group-hover:opacity-60 transition-opacity duration-500 flex items-center justify-center">
                <div class="w-3/4 h-3/4 bg-[#71A2CF] rounded-full blur-[80px] mix-blend-screen opacity-50 transform group-hover:scale-110 group-hover:-translate-y-4 transition-transform duration-700"></div>
                <div class="absolute w-1/2 h-1/2 bg-[#123B7A] rounded-full blur-[60px] mix-blend-screen opacity-60 translate-x-1/3 translate-y-1/3 group-hover:-translate-x-2 transition-transform duration-700"></div>
            </div>

            <div class="absolute inset-0 z-10 transition-transform duration-500 group-hover:scale-105 origin-bottom">
                 <img src="{{ asset('images/Team/RizkaAmalia.jpeg') }}" alt="Rizka Amalia" class="object-cover object-top w-full h-full">
            </div>

            <div class="absolute inset-x-0 bottom-0 p-4 sm:p-5 md:p-6 z-20 bg-gradient-to-t from-[#020636] via-[#020636]/80 to-transparent">
                <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                    <h3 class="text-base sm:text-lg md:text-xl text-white mb-1 drop-shadow-lg leading-tight" style="font-family: 'Inter', sans-serif;">Rizka Amalia</h3>
                    <p class="text-gray-400 text-xs leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-200 line-clamp-2">Social Media Specialist</p>
                </div>
            </div>
        </div>

    </div>

</section>
