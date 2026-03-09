<section id="video-profile" class="md:pb-12 max-w-7xl mx-auto px-4 md:px-1">

    {{-- Decorative Background Elements --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3/4 h-3/4 bg-[#123B7A]/20 blur-[100px] rounded-full point-events-none -z-10"></div>

    <div class="mb-10 text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-white" style="font-family: 'Poppins', sans-serif;">
            Profile <span class="opacity-50">EJSC</span>
        </h2>
        <p class="text-gray-400 mt-3 text-sm md:text-base max-w-2xl mx-auto">Take a closer look at our collaborative spaces, facilities, and the vibrant community that brings ideas to life.</p>
    </div>

    {{-- Video Container --}}
    <div class="max-w-3xl mx-auto relative group">

        {{-- Minimalist Glowing Border / Shadow Effect --}}
        <div class="absolute -inset-0.5 bg-gradient-to-r from-[#123B7A] via-[#71A2CF] to-[#F7AD12] rounded-[2rem] opacity-20 group-hover:opacity-40 blur-md transition duration-700"></div>

        {{-- Video Wrapper --}}
        <div class="relative bg-[#020636] rounded-xl md:rounded-xl border border-[#123B7A]/50 overflow-hidden shadow-2xl z-10 p-2 md:p-3">

            <div class="relative w-full aspect-video rounded-xl md:rounded-xl overflow-hidden bg-black/50">
                <iframe
                    class="w-full h-full object-cover"
                    src="https://www.youtube.com/embed/xHA7RlYVSWk?si=r7YOWZQRPqKPD3_a"
                    title="EJSC Bakorwil Malang Profile Video"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>

                {{-- Temporary Overlay if video is missing/loading (Optional, typically hidden by iframe) --}}
                <div class="absolute inset-0 flex items-center justify-center -z-10">
                    <svg class="w-12 h-12 text-[#71A2CF] animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>

        </div>
    </div>

</section>
