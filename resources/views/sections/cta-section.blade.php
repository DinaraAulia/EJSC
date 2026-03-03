<section class="py-16 md:py-24 max-w-7xl mx-auto px-4 md:px-6">
    <div class="bg-[#0F1115] border border-gray-800 rounded-3xl md:min-h-[400px] flex flex-col md:flex-row overflow-hidden relative">

        {{-- Left Content --}}
        <div class="w-full md:w-1/2 p-10 md:p-16 flex flex-col justify-center relative z-10">
            <h2 class="text-3xl md:text-4xl lg:text-[40px] font-bold mb-5 text-white leading-tight" style="font-family: 'Poppins', sans-serif;">
                Ready to Level Up <br> Your Productivity?
            </h2>
            <p class="text-gray-400 text-sm md:text-base mb-10 max-w-md leading-relaxed">
                Register as a visitor or book your favorite room right now.
            </p>
            <div class="flex flex-col sm:flex-row items-center gap-4">
                <a href="{{ route('peminjaman.create') }}"
                   class="bg-[#F7AD12] text-[#01031C] font-medium px-6 py-3 rounded-full text-sm hover:brightness-110 transition-all w-full sm:w-auto text-center shadow-lg shadow-[#F7AD12]/20">
                    Book Now
                </a>
                <a href="{{ route('pengunjung.create') }}"
                   class="bg-transparent border border-[#71A2CF] text-[#71A2CF] font-medium px-6 py-3 rounded-full text-sm hover:bg-[#71A2CF] hover:text-[#01031C] transition-all w-full sm:w-auto text-center">
                    Visitor Form
                </a>
            </div>
        </div>

        {{-- Right Visual --}}
        <div class="w-full md:w-1/2 relative min-h-[350px] md:min-h-full overflow-hidden flex items-center justify-center">

            {{-- Background glow --}}
            <div class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 w-[400px] h-[400px] bg-blue-600/10 blur-[100px] rounded-full pointer-events-none"></div>

            {{-- Concentric Circles --}}
            <div class="absolute right-0 top-1/2 translate-x-[30%] -translate-y-1/2 w-[700px] h-[700px] rounded-full border border-gray-700/40"></div>
            <div class="absolute right-0 top-1/2 translate-x-[30%] -translate-y-1/2 w-[500px] h-[500px] rounded-full border border-gray-700/60"></div>
            <div class="absolute right-0 top-1/2 translate-x-[30%] -translate-y-1/2 w-[300px] h-[300px] rounded-full border border-gray-600/60"></div>
            <div class="absolute right-0 top-1/2 translate-x-[30%] -translate-y-1/2 w-[100px] h-[100px] rounded-full border border-gray-500/60"></div>

            {{-- Floating Elements --}}

            {{-- Laptop Icon --}}
            <div class="absolute top-[12%] right-[42%] bg-[#1E293B] p-2.5 rounded-xl border border-gray-700 shadow-lg -rotate-[10deg] z-20 hover:scale-110 transition-transform cursor-pointer">
                <svg class="w-5 h-5 text-[#22C55E]" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M20 18c1.1 0 1.99-.9 1.99-2L22 5c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2H0c0 1.1.9 2 2 2h20c1.1 0 2-.9 2-2h-4zM4 5h16v11H4V5z"/>
                </svg>
            </div>

            {{-- Document --}}
            <div class="absolute top-[40%] right-[55%] bg-[#1E293B] p-2.5 rounded-xl border border-gray-700 shadow-lg rotate-[15deg] z-20 hover:scale-110 transition-transform cursor-pointer">
                <svg fill="currentColor" class="w-5 h-5 text-[#3B82F6]" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path></svg>
            </div>

            {{-- Coffee Icon --}}
            <div class="absolute bottom-[15%] right-[44%] bg-[#1E293B] p-2.5 rounded-xl border border-gray-700 shadow-lg rotate-[5deg] z-20 hover:scale-110 transition-transform cursor-pointer">
                <svg class="w-5 h-5 text-[#F7AD12]" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M2 21h18v-2H2v2zm15-4h2.5c1.38 0 2.5-1.12 2.5-2.5S20.88 12 19.5 12H17V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v10c0 2.21 1.79 4 4 4h8zm0-12h2.5c.28 0 .5.22.5.5s-.22.5-.5.5H17V5z"/>
                </svg>
            </div>

            {{-- Wifi Icon --}}
            <div class="absolute bottom-[10%] right-[15%] bg-[#1E293B] p-2 rounded-xl border border-gray-700 shadow-lg -rotate-[15deg] z-20 hover:scale-110 transition-transform cursor-pointer">
                <svg class="w-4 h-4 text-[#A855F7]" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M1 9l2 2c5-5 13-5 18 0l2-2C16.93 2.93 7.08 2.93 1 9zm4 4l2 2c2.76-2.76 7.24-2.76 10 0l2-2C15.14 9.14 8.87 9.14 5 13zm4 4l3 3 3-3c-1.65-1.66-4.34-1.66-6 0z"/>
                </svg>
            </div>

            {{-- Avatar Top Right --}}
            <div class="absolute top-[20%] right-[22%] w-10 h-10 rounded-full border-2 border-[#0F1115] bg-gray-800 overflow-hidden z-20 shadow-lg relative group cursor-pointer transition-transform hover:scale-110">
                <img src="https://i.pravatar.cc/100?u=12" alt="User" class="w-full h-full object-cover">
            </div>

            {{-- Avatar Far Right --}}
            <div class="absolute bottom-[18%] left-[20%] w-11 h-11 rounded-full border-2 border-[#0F1115] bg-gray-800 overflow-hidden z-20 shadow-lg relative cursor-pointer transition-transform hover:scale-110">
                <img src="https://i.pravatar.cc/100?u=22" alt="User" class="w-full h-full object-cover">
            </div>

            {{-- Avatar Multi Group (Bottom Center) --}}
            <div class="absolute bottom-[40%] right-[30%] flex -space-x-2 z-20 cursor-pointer transition-transform hover:scale-105">
                <div class="w-9 h-9 rounded-full border-2 border-[#0F1115] bg-gray-800 overflow-hidden shadow-lg z-30">
                    <img src="https://i.pravatar.cc/100?u=32" alt="User" class="w-full h-full object-cover">
                </div>
                <div class="w-9 h-9 rounded-full border-2 border-[#0F1115] bg-gray-800 overflow-hidden shadow-lg z-20">
                    <img src="https://i.pravatar.cc/100?u=42" alt="User" class="w-full h-full object-cover">
                </div>
                <div class="w-9 h-9 rounded-full border-2 border-[#0F1115] bg-gray-800 overflow-hidden shadow-lg z-10 flex items-center justify-center bg-[#1E293B] text-xs font-bold text-gray-300">
                    +7
                </div>
            </div>

            {{-- Let's get started green bubble --}}
            <div class="absolute bottom-[20%] right-[12%] z-30 animate-bounce">
                <div class="relative flex items-center gap-2">
                    {{-- Cursor icon --}}
                    <svg class="w-5 h-5 text-white drop-shadow-md -rotate-12 absolute -left-5 -top-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l7.07 16.97 2.51-7.39 7.39-2.51L3 3z" />
                    </svg>
                    <div class="bg-[#71A2CF] text-[#01031C] text-xs font-bold px-4 py-2.5 rounded-full shadow-[0_0_15px_rgba(113,162,207,0.3)] whitespace-nowrap">
                        Let's get started
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
