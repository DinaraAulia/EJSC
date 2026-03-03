@extends('layouts.app')

@section('title', 'Visitor Form - EJSC Malang')

@section('content')
<main class="pt-[140px] pb-24 bg-[#0a0f1c] min-h-screen font-inter relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-[#F7AD12]/10 rounded-full blur-[120px]"></div>
        <div class="absolute top-1/2 right-1/4 w-96 h-96 bg-blue-600/10 rounded-full blur-[120px]"></div>
    </div>

    <!-- Enhanced Grid Pattern -->
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_0%,#000_70%,transparent_100%)] z-0"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full max-w-4xl">

        <!-- Header Section -->
        <div class="mb-10 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-[#F7AD12]/10 border border-[#F7AD12]/20 text-[#F7AD12] text-sm font-semibold tracking-wider uppercase mb-4 shadow-[0_0_15px_rgba(247,173,18,0.2)]">Registration</span>
            <h1 class="text-3xl md:text-5xl font-bold text-white mb-4 tracking-tight">Visitor <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#F7AD12] to-yellow-300">Form</span></h1>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg leading-relaxed">
                Please fill out this form before entering the East Java Super Corridor (EJSC) Malang. <br class="hidden sm:block"> Your data helps us improve our services.
            </p>
        </div>

        @if(session('success'))
            <div class="bg-green-500/10 border border-green-500/20 rounded-2xl p-4 mb-8 text-green-400 flex items-start gap-3 w-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-500/10 border border-red-500/20 rounded-2xl p-4 mb-8 text-red-400 flex items-start gap-3 w-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div class="w-full">
                    <p class="font-medium mb-1">Please fix the following errors:</p>
                    <ul class="list-disc list-inside text-sm mt-1 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        {{-- Form Card --}}
        <div class="bg-[#121827]/80 backdrop-blur-xl border border-gray-800 rounded-3xl p-6 md:p-10 shadow-2xl relative w-full overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-[#F7AD12] to-yellow-200 rounded-t-3xl"></div>

            <form action="{{ route('pengunjung.store') }}" method="POST" class="space-y-8 block w-full relative z-10">
                @csrf

                <div>
                    <h2 class="text-xl font-semibold text-white mb-5 flex items-center w-full">
                        <span class="w-8 h-8 rounded-lg bg-[#F7AD12]/20 text-[#F7AD12] flex items-center justify-center mr-3 text-sm border border-[#F7AD12]/30">1</span>
                        Personal Information
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
                        {{-- 1. Name --}}
                        <div class="md:col-span-2 space-y-2 relative w-full group">
                            <label for="nama" class="block text-sm font-medium text-gray-300">Name <span class="text-red-400">*</span></label>
                            <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required placeholder="Enter your full name"
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-[#F7AD12] focus:border-[#F7AD12] text-white placeholder-gray-500 transition-all duration-300 group-hover:border-gray-600 block pl-4">
                            @error('nama') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        {{-- 2. Age --}}
                        <div class="space-y-2 relative w-full group">
                            <label for="usia" class="block text-sm font-medium text-gray-300">Age <span class="text-red-400">*</span></label>
                            <input type="number" name="usia" id="usia" value="{{ old('usia') }}" required placeholder="Ex: 24" min="1" max="100"
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-[#F7AD12] focus:border-[#F7AD12] text-white placeholder-gray-500 transition-all duration-300 group-hover:border-gray-600 block pl-4">
                            @error('usia') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        {{-- 3. Gender --}}
                        <div class="space-y-2 relative w-full group">
                            <label class="block text-sm font-medium text-gray-300 mb-3">Gender <span class="text-red-400">*</span></label>
                            <div class="flex gap-6 h-full items-center">
                                <label class="flex items-center gap-2 cursor-pointer group/radio">
                                    <input type="radio" name="jenis_kelamin" value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'checked' : '' }} required class="w-5 h-5 text-[#F7AD12] bg-[#0a0f1c] border-gray-600 focus:ring-[#F7AD12]">
                                    <span class="text-gray-400 group-hover/radio:text-white transition-colors text-sm font-medium">Male</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group/radio">
                                    <input type="radio" name="jenis_kelamin" value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }} required class="w-5 h-5 text-[#F7AD12] bg-[#0a0f1c] border-gray-600 focus:ring-[#F7AD12]">
                                    <span class="text-gray-400 group-hover/radio:text-white transition-colors text-sm font-medium">Female</span>
                                </label>
                            </div>
                            @error('jenis_kelamin') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        {{-- 4. Phone Number --}}
                        <div class="space-y-2 relative w-full group">
                            <label for="no_hp" class="block text-sm font-medium text-gray-300">Phone Number <span class="text-red-400">*</span></label>
                            <input type="tel" name="no_hp" id="no_hp" value="{{ old('no_hp') }}" required placeholder="Ex: 081234567890"
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-[#F7AD12] focus:border-[#F7AD12] text-white placeholder-gray-500 transition-all duration-300 group-hover:border-gray-600 block pl-4">
                            @error('no_hp') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        {{-- 5. Social Media --}}
                        <div class="space-y-2 relative w-full group">
                            <label for="sosmed" class="block text-sm font-medium text-gray-300">Social Media Account <span class="text-red-400">*</span></label>
                            <input type="text" name="sosmed" id="sosmed" value="{{ old('sosmed') }}" required placeholder="E.g., Instagram, @username"
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-[#F7AD12] focus:border-[#F7AD12] text-white placeholder-gray-500 transition-all duration-300 group-hover:border-gray-600 block pl-4">
                            @error('sosmed') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>
                </div>

                <div class="w-full h-px bg-gray-800 my-6 block"></div>

                <div>
                    <h2 class="text-xl font-semibold text-white mb-5 flex items-center w-full">
                        <span class="w-8 h-8 rounded-lg bg-[#F7AD12]/20 text-[#F7AD12] flex items-center justify-center mr-3 text-sm border border-[#F7AD12]/30">2</span>
                        Background Details
                    </h2>

                    {{-- 6. Profession --}}
                    <div class="mb-8">
                        <label for="profesi" class="block text-sm font-medium text-gray-300 mb-1">Profession <span class="text-red-400">*</span></label>
                        <p class="text-gray-500 text-xs mb-4">Please choose "Citizen" if you have no profession at the moment.</p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 w-full">
                            @php
                                $professions = [
                                    'Mahasiswa/Pelajar (Student)',
                                    'Aparatur Sipil Negara (Civil Servant/Employee)',
                                    'Karyawan (Corporate Employee)',
                                    'Mentor EJSC/MJC',
                                    'Talenta MJC',
                                    'Wirausahawan/Wiraswasta (Entrepreneur)',
                                    'Umum (Citizen)',
                                    'UMKM'
                                ];
                            @endphp
                            @foreach($professions as $prof)
                            <label class="relative flex items-center p-3 sm:p-4 cursor-pointer rounded-xl border border-gray-700/50 hover:bg-gray-800/40 hover:border-[#F7AD12]/50 transition-all w-full group">
                                <input type="radio" name="profesi" value="{{ $prof }}" {{ old('profesi') == $prof ? 'checked' : '' }} required class="w-5 h-5 text-[#F7AD12] bg-[#0a0f1c] border-gray-600 focus:ring-[#F7AD12]">
                                <span class="ml-3 text-sm text-gray-400 group-hover:text-white transition-colors flex-1">{{ $prof }}</span>
                            </label>
                            @endforeach
                        </div>
                        @error('profesi') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    {{-- 7. Domicile --}}
                    <div class="space-y-2 relative w-full group">
                        <label for="domisili" class="block text-sm font-medium text-gray-300 mb-1">Domicile <span class="text-red-400">*</span></label>
                        <p class="text-gray-500 text-xs mb-3">If you are not originally from East Java, please choose "Other" and write down manually.</p>

                        <div class="relative w-full">
                            <select name="domisili" id="domisili" required class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-[#F7AD12] focus:border-[#F7AD12] text-white appearance-none transition-all duration-300 group-hover:border-gray-600 block pl-4 cursor-pointer">
                                <option value="" disabled selected class="text-gray-500">Select your domicile...</option>
                                @php
                                    $domiciles = [
                                        "Kabupaten Bangkalan", "Kabupaten Banyuwangi", "Kabupaten Blitar", "Kabupaten Bojonegoro",
                                        "Kabupaten Bondowoso", "Kabupaten Gresik", "Kabupaten Jember", "Kabupaten Jombang",
                                        "Kabupaten Kediri", "Kabupaten Lamongan", "Kabupaten Lumajang", "Kabupaten Madiun",
                                        "Kabupaten Magetan", "Kabupaten Malang", "Kabupaten Mojokerto", "Kabupaten Nganjuk",
                                        "Kabupaten Ngawi", "Kabupaten Pacitan", "Kabupaten Pamekasan", "Kabupaten Pasuruan",
                                        "Kabupaten Ponorogo", "Kabupaten Probolinggo", "Kabupaten Sampang", "Kabupaten Sidoarjo",
                                        "Kabupaten Situbondo", "Kabupaten Sumenep", "Kabupaten Trenggalek", "Kabupaten Tuban",
                                        "Kabupaten Tulungagung", "Kota Batu", "Kota Blitar", "Kota Kediri", "Kota Madiun",
                                        "Kota Malang", "Kota Mojokerto", "Kota Pasuruan", "Kota Probolinggo", "Kota Surabaya",
                                        "Other"
                                    ];
                                @endphp
                                @foreach($domiciles as $dom)
                                    <option value="{{ $dom }}" {{ old('domisili') == $dom || old('domisili_select') == $dom ? 'selected' : '' }} class="bg-[#0F1115] text-white">{{ $dom }}</option>
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-gray-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                        </div>

                        {{-- Input for Other Domisili --}}
                        <div id="other_domicile_wrapper" class="{{ old('domisili_select') == 'Other' ? '' : 'hidden' }} mt-3">
                            <input type="text" name="domisili_other" id="domisili_other" value="{{ old('domisili_other') ?: old('domisili') }}" placeholder="Write your domicile here"
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-[#F7AD12] focus:border-[#F7AD12] text-white placeholder-gray-500 transition-all duration-300 block pl-4">
                        </div>
                        @error('domisili') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="w-full h-px bg-gray-800 my-6 block"></div>

                <div>
                    <h2 class="text-xl font-semibold text-white mb-5 flex items-center w-full">
                        <span class="w-8 h-8 rounded-lg bg-[#F7AD12]/20 text-[#F7AD12] flex items-center justify-center mr-3 text-sm border border-[#F7AD12]/30">3</span>
                        Visit Details
                    </h2>

                    {{-- 8. Source of Information --}}
                    <div class="mb-8">
                        <label for="sumber_info" class="block text-sm font-medium text-gray-300 mb-4">How did you know about East Java Super Corridor (EJSC)? <span class="text-red-400">*</span></label>

                        <div class="grid grid-cols-1 gap-4 w-full">
                            @php
                                $sources = [
                                    'Sosial Media (Instagram, Twitter, Facebook, etc)',
                                    'Publication Media (Posters, Brochures, Pamphlets, etc)',
                                    'Friend/Colleague Recommendation',
                                    'Invitation'
                                ];
                            @endphp
                            @foreach($sources as $src)
                            <label class="relative flex items-center p-3 sm:p-4 cursor-pointer rounded-xl border border-gray-700/50 hover:bg-gray-800/40 hover:border-[#F7AD12]/50 transition-all w-full group">
                                <input type="radio" name="sumber_info" value="{{ $src }}" {{ old('sumber_info') == $src ? 'checked' : '' }} required class="w-5 h-5 text-[#F7AD12] bg-[#0a0f1c] border-gray-600 focus:ring-[#F7AD12]">
                                <span class="ml-3 text-sm text-gray-400 group-hover:text-white transition-colors flex-1">{{ $src }}</span>
                            </label>
                            @endforeach
                        </div>
                        @error('sumber_info') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    {{-- 9. Purpose --}}
                    <div>
                        <label for="keperluan" class="block text-sm font-medium text-gray-300 mb-4">What is the purpose of your visit to EJSC? <span class="text-red-400">*</span></label>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 w-full">
                            @php
                                $purposes = [
                                    'Workshop',
                                    'Konsultasi UKM (Micro Business Consultation)',
                                    'Mengurus Legalitas (Legality Requirement)',
                                    'Bekerja/WFH/Freelance/Internship',
                                    'Meeting/Virtual Meeting',
                                    'Belajar (Study)',
                                    'Mengerjakan Tugas/Skripsi/Proposal (Doing Assignments/Thesis)',
                                    'Mengerjakan Project (Deadline Project)',
                                    'Kegiatan Komunitas/Organisasi (Community Event)',
                                    'Kunjungan Dinas/Instansi (Agency Visit)',
                                    'Berdiskusi/Mengobrol (Chit Chat/Discussion)'
                                ];
                            @endphp
                            @foreach($purposes as $purp)
                            <label class="relative flex items-start p-3 sm:p-4 cursor-pointer rounded-xl border border-gray-700/50 hover:bg-gray-800/40 hover:border-[#F7AD12]/50 transition-all w-full group">
                                <input type="radio" name="keperluan" value="{{ $purp }}" {{ old('keperluan') == $purp ? 'checked' : '' }} required class="mt-0.5 w-5 h-5 text-[#F7AD12] bg-[#0a0f1c] border-gray-600 focus:ring-[#F7AD12] shrink-0">
                                <span class="ml-3 text-sm text-gray-400 group-hover:text-white transition-colors leading-relaxed flex-1">{{ $purp }}</span>
                            </label>
                            @endforeach
                        </div>
                        @error('keperluan') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-6 border-t border-gray-800/50 w-full flex">
                    <button type="submit"
                        class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-[#F7AD12] to-blue-600 hover:from-yellow-400 hover:to-blue-500 text-white font-semibold rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F7AD12] focus:ring-offset-2 focus:ring-offset-[#121827] shadow-[0_0_20px_rgba(247,173,18,0.3)] transition-all duration-300 transform hover:-translate-y-1 block ml-auto">
                        Submit Registration
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const domisiliSelect = document.getElementById('domisili');
        const otherWrapper = document.getElementById('other_domicile_wrapper');
        const otherInput = document.getElementById('domisili_other');

        // Check initial state (useful if returning with validation errors)
        if (domisiliSelect.value === 'Other') {
            otherWrapper.classList.remove('hidden');
            otherInput.required = true;
            otherInput.name = 'domisili';
            domisiliSelect.name = 'domisili_select';
        }

        domisiliSelect.addEventListener('change', function() {
            if (this.value === 'Other') {
                otherWrapper.classList.remove('hidden');
                otherInput.required = true;
                // Rename select name so backend accepts input's value
                otherInput.name = 'domisili';
                this.name = 'domisili_select';
            } else {
                otherWrapper.classList.add('hidden');
                otherInput.required = false;
                otherInput.name = 'domisili_other'; // Ignore this value
                this.name = 'domisili'; // Submit the select value
            }
        });
    });
</script>
@endpush
