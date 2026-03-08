<footer class="bg-[#020636] relative overflow-hidden pt-10 pb-8 mt-20 border-t border-[#123B7A]/20">
    {{-- Bottom Glow Effect --}}
    <div class="absolute bottom-[-150px] left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-[#55aef7]/25 blur-[120px] rounded-[100%] pointer-events-none z-0"></div>

    <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10">
        {{-- Top Section --}}
        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 md:gap-8 mb-16">

            {{-- Brand Column (md:col-span-4) --}}
            <div class="md:col-span-4 md:pr-8">
                <a href="{{ route('home') }}" class="block mb-3">
                    <img src="{{ asset('images/LogoEJSC2.png') }}" alt="EJSC Logo" class="h-10 sm:h-10 lg:h-10 w-auto object-contain">
                </a>
                <p class="text-gray-400 text-sm leading-relaxed mb-5">
                    We explore every idea with curiosity and care, always looking for better ways to solve problems. Open minds for creative solutions within our collaborative workspace.
                </p>
                <a href="{{ route('pengunjung.create') }}" class="inline-flex items-center gap-4 bg-white/5 border border-white/10 rounded-full p-2 pr-6 hover:bg-white/10 transition-colors group">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-[#F7AD12] to-[#ec4848] flex items-center justify-center text-white group-hover:scale-105 transition-transform shadow-[0_0_15px_rgba(168,85,247,0.4)]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                    <div class="flex flex-col text-left">
                        <span class="text-white text-sm font-semibold leading-tight">Visitor Form</span>
                        <span class="text-gray-400 text-xs">Register Here</span>
                    </div>
                </a>
            </div>

            {{-- Links Columns (md:col-span-8) --}}
            <div class="md:col-span-8 grid grid-cols-2 lg:grid-cols-3 gap-8 md:gap-4 mt-4 md:mt-0">

                {{-- Col 1: Quick Links & Follow Us --}}
                <div class="flex flex-col gap-6">
                    <div>
                        <h4 class="text-white font-semibold mb-4 text-sm">Quick Links</h4>
                        <ul class="space-y-2">
                            <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Home</a></li>
                            <li><a href="{{ url('/#about') }}" class="text-gray-400 hover:text-white text-sm transition-colors">About</a></li>
                            <li><a href="{{ url('/#workspace') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Workspace</a></li>
                            <li><a href="{{ url('/#gallery') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Gallery</a></li>
                            <li><a href="{{ url('/#review') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Review</a></li>
                            <li><a href="{{ url('/#team') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Team</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold mb-4 text-sm">Follow Us</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Instagram</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">YouTube</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Gmail</a></li>
                        </ul>
                    </div>
                </div>

                {{-- Col 2: Services & Operation Hours --}}
                <div class="flex flex-col gap-6">
                    <div>
                        <h4 class="text-white font-semibold mb-4 text-sm">Programs</h4>
                        <ul class="space-y-2">
                            <li><span class="text-gray-400 text-sm">DPMPTSP Service</span></li>
                            <li><span class="text-gray-400 text-sm">EJSC Room</span></li>
                            <li><span class="text-gray-400 text-sm">Halal Clinic</span></li>
                            <li><span class="text-gray-400 text-sm">MJC Program</span></li>
                            <li><span class="text-gray-400 text-sm">Collaborations</span></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold mb-4 text-sm">Operating Hours</h4>
                        <ul class="space-y-2">
                            <li><span class="text-gray-400 text-sm">Monday - Friday</span></li>
                            <li><span class="text-gray-400 text-sm">08:00 AM - 04:00 PM</span></li>
                            <li><span class="text-gray-400 text-sm">Saturday & Sunday: Closed</span></li>
                        </ul>
                    </div>
                </div>

                {{-- Col 3: Contact --}}
                <div class="lg:col-span-1 col-span-2 sm:col-span-1">
                    <h4 class="text-white font-semibold mb-4 text-sm">Contact</h4>
                    <ul class="space-y-8">
                        <li>
                            <p class="text-white font-medium text-sm mb-1.5">+62 813-3080-6923</p>
                            <p class="text-gray-400 text-xs leading-relaxed">
                                Jl. Simpang Ijen No.2, Oro-oro Dowo,<br>Kec. Klojen, Kota Malang,<br>Jawa Timur 65119
                            </p>
                        </li>
                        <li>
                            <p class="text-white font-medium text-sm mb-1.5">ejscmalang@gmail.com</p>
                            <p class="text-gray-400 text-xs leading-relaxed">
                                Feel free to email us for any<br>collaborative inquiries.
                            </p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="pt-8 mt-4 border-t border-white/10 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <p class="text-gray-400 text-xs font-medium tracking-wide">All rights reserved @EJSCMalang</p>
            </div>
            <div class="flex items-center gap-6">
                <a href="#" class="text-gray-400 hover:text-white text-xs transition-colors">Payment Policy</a>
                <span class="text-gray-600 text-[10px]">✦</span>
                <a href="#" class="text-gray-400 hover:text-white text-xs transition-colors">T&C and Privacy Policies</a>
            </div>
        </div>

    </div>
</footer>
