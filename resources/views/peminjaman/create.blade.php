@extends('layouts.app')

@section('content')
<main class="pt-[140px] pb-24 bg-[#0a0f1c] min-h-screen font-inter relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-600/10 rounded-full blur-[120px]"></div>
        <div class="absolute top-1/2 right-1/4 w-96 h-96 bg-cyan-500/10 rounded-full blur-[120px]"></div>
    </div>

    <!-- Enhanced Grid Pattern -->
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_0%,#000_70%,transparent_100%)] z-0"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full max-w-4xl">
        <!-- Header -->
        <div class="mb-10 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 text-sm font-semibold tracking-wider uppercase mb-4 shadow-[0_0_15px_rgba(59,130,246,0.2)]">Space Booking</span>
            <h1 class="text-2xl md:text-3xl font-bold text-white mb-4 tracking-tight">Room Booking <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Form</span></h1>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">Please fill out the form below to book a workspace for your event or activity.</p>
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

        <!-- Form Card -->
        <div class="bg-[#121827]/80 backdrop-blur-xl border border-gray-800 rounded-3xl p-6 md:p-10 shadow-2xl relative w-full">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-t-3xl"></div>

            <form action="{{ route('peminjaman.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8 block w-full">
                @csrf

                <!-- Event Section -->
                <div>
                    <h2 class="text-xl font-semibold text-white mb-5 flex items-center w-full">
                        <span class="w-8 h-8 rounded-lg bg-blue-500/20 text-blue-400 flex items-center justify-center mr-3 text-sm border border-blue-500/30">1</span>
                        Event Information
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
                        <!-- Event Name -->
                        <div class="md:col-span-2 space-y-2 relative w-full group">
                            <label for="nama_kegiatan" class="block text-sm font-medium text-gray-300">Name of Event <span class="text-red-400">*</span></label>
                            <input type="text" id="nama_kegiatan" name="nama_kegiatan" value="{{ old('nama_kegiatan') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-gray-500 transition-all duration-300 group-hover:border-gray-600 block pl-4"
                                placeholder="Enter Event Name">
                        </div>

                        <!-- Objective -->
                        <div class="space-y-2 relative w-full group">
                            <label for="tujuan_kegiatan" class="block text-sm font-medium text-gray-300">Event Objective <span class="text-red-400">*</span></label>
                            <input type="text" id="tujuan_kegiatan" name="tujuan_kegiatan" value="{{ old('tujuan_kegiatan') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-gray-500 transition-all duration-300 group-hover:border-gray-600 block pl-4"
                                placeholder="E.g., Workshop, Seminar, etc.">
                        </div>

                        <!-- Background -->
                        <div class="space-y-2 relative w-full group">
                            <label for="latar_belakang" class="block text-sm font-medium text-gray-300">Event Background <span class="text-red-400">*</span></label>
                            <input type="text" id="latar_belakang" name="latar_belakang" value="{{ old('latar_belakang') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-gray-500 transition-all duration-300 group-hover:border-gray-600 block pl-4"
                                placeholder="Brief context of the event">
                        </div>

                        <!-- Participants Info -->
                        <div class="space-y-2 relative w-full group">
                            <label for="sasaran_peserta" class="block text-sm font-medium text-gray-300">Target Participants <span class="text-red-400">*</span></label>
                            <input type="text" id="sasaran_peserta" name="sasaran_peserta" value="{{ old('sasaran_peserta') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-gray-500 transition-all duration-300 group-hover:border-gray-600 block pl-4"
                                placeholder="E.g., Students, Public, Creatives">
                        </div>

                        <!-- Number of Participants -->
                        <div class="space-y-2 relative w-full group">
                            <label for="jumlah_peserta" class="block text-sm font-medium text-gray-300">Number of Participants <span class="text-red-400">*</span></label>
                            <input type="number" id="jumlah_peserta" name="jumlah_peserta" min="1" value="{{ old('jumlah_peserta') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-gray-500 transition-all duration-300 group-hover:border-gray-600 block pl-4"
                                placeholder="Total expected attendees">
                        </div>

                        <!-- Speaker / Narasumber -->
                        <div class="md:col-span-2 space-y-2 relative w-full group">
                            <label for="narasumber" class="block text-sm font-medium text-gray-300">Speaker / Guest Star Name <span class="text-red-400">*</span></label>
                            <input type="text" id="narasumber" name="narasumber" value="{{ old('narasumber') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-gray-500 transition-all duration-300 group-hover:border-gray-600 block pl-4"
                                placeholder="Event speaker or guest info">
                        </div>
                    </div>
                </div>

                <div class="w-full h-px bg-gray-800 my-6 block"></div>

                <!-- Responsibility Section -->
                <div>
                    <h2 class="text-xl font-semibold text-white mb-5 flex items-center w-full">
                        <span class="w-8 h-8 rounded-lg bg-blue-500/20 text-blue-400 flex items-center justify-center mr-3 text-sm border border-blue-500/30">2</span>
                        Representative Info
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
                        <!-- PIC Name -->
                        <div class="space-y-2 relative w-full group">
                            <label for="pj_kegiatan" class="block text-sm font-medium text-gray-300">PIC Name <span class="text-red-400">*</span></label>
                            <input type="text" id="pj_kegiatan" name="pj_kegiatan" value="{{ old('pj_kegiatan') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-gray-500 transition-all duration-300 group-hover:border-gray-600 block pl-4"
                                placeholder="Full name of person in charge">
                        </div>

                        <!-- Phone Number -->
                        <div class="space-y-2 relative w-full group">
                            <label for="no_hp_pj" class="block text-sm font-medium text-gray-300">PIC Phone/WA <span class="text-red-400">*</span></label>
                            <input type="tel" id="no_hp_pj" name="no_hp_pj" value="{{ old('no_hp_pj') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-gray-500 transition-all duration-300 group-hover:border-gray-600 block pl-4"
                                placeholder="08xxxxxxxxxx">
                        </div>

                        <!-- Institution -->
                        <div class="space-y-2 relative w-full group">
                            <label for="instansi" class="block text-sm font-medium text-gray-300">Institution/Community <span class="text-red-400">*</span></label>
                            <input type="text" id="instansi" name="instansi" value="{{ old('instansi') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-gray-500 transition-all duration-300 group-hover:border-gray-600 block pl-4"
                                placeholder="Organization name">
                        </div>

                        <!-- Region/City -->
                        <div class="space-y-2 relative w-full group">
                            <label for="wilayah" class="block text-sm font-medium text-gray-300">Region/City <span class="text-red-400">*</span></label>
                            <div class="relative w-full">
                                <select id="wilayah" name="wilayah" required
                                    class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white appearance-none transition-all duration-300 group-hover:border-gray-600 block pl-4">
                                    <option value="" disabled selected class="text-gray-500">Select Region</option>
                                    <option value="Kota Malang" {{ old('wilayah') == 'Kota Malang' ? 'selected' : '' }}>Kota Malang</option>
                                    <option value="Kab. Malang" {{ old('wilayah') == 'Kab. Malang' ? 'selected' : '' }}>Kab. Malang</option>
                                    <option value="Kota Batu" {{ old('wilayah') == 'Kota Batu' ? 'selected' : '' }}>Kota Batu</option>
                                    <option value="Kota Pasuruan" {{ old('wilayah') == 'Kota Pasuruan' ? 'selected' : '' }}>Kota Pasuruan</option>
                                    <option value="Kab. Pasuruan" {{ old('wilayah') == 'Kab. Pasuruan' ? 'selected' : '' }}>Kab. Pasuruan</option>
                                    <option value="Kota Blitar" {{ old('wilayah') == 'Kota Blitar' ? 'selected' : '' }}>Kota Blitar</option>
                                    <option value="Kab. Blitar" {{ old('wilayah') == 'Kab. Blitar' ? 'selected' : '' }}>Kab. Blitar</option>
                                    <option value="Kab. Sidoarjo" {{ old('wilayah') == 'Kab. Sidoarjo' ? 'selected' : '' }}>Kab. Sidoarjo</option>
                                    <option value="Kota Surabaya" {{ old('wilayah') == 'Kota Surabaya' ? 'selected' : '' }}>Kota Surabaya</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-gray-400">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                </div>
                            </div>
                        </div>

                        <!-- Institution Address -->
                        <div class="md:col-span-2 space-y-2 relative w-full group">
                            <label for="alamat_instansi" class="block text-sm font-medium text-gray-300">Full Address of Institution <span class="text-red-400">*</span></label>
                            <input type="text" id="alamat_instansi" name="alamat_instansi" value="{{ old('alamat_instansi') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-gray-500 transition-all duration-300 group-hover:border-gray-600 block pl-4"
                                placeholder="Complete address detail">
                        </div>
                    </div>
                </div>

                <div class="w-full h-px bg-gray-800 my-6 block"></div>

                <!-- Booking Details Section -->
                <div>
                    <h2 class="text-xl font-semibold text-white mb-5 flex items-center w-full">
                        <span class="w-8 h-8 rounded-lg bg-blue-500/20 text-blue-400 flex items-center justify-center mr-3 text-sm border border-blue-500/30">3</span>
                        Booking Details
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
                        <!-- Select Room -->
                        <div class="space-y-2 relative w-full group">
                            <label for="ruangan_id" class="block text-sm font-medium text-gray-300">Room Selected <span class="text-red-400">*</span></label>
                            @php
                                $preselectedRoomId = '';
                                if(request('room')) {
                                    $roomMap = [
                                        'co-working-space' => 'Coworking Space',
                                        'command-center' => 'Command Center',
                                        'meeting-room' => 'Meeting Room',
                                        'classroom-playhard' => 'Class Room / Playhard'
                                    ];
                                    $targetRoomTerm = $roomMap[request('room')] ?? '';
                                    if($targetRoomTerm) {
                                        $fRoom = collect($ruangans)->first(function($r) use ($targetRoomTerm) {
                                            return stripos($r->nama_ruangan, $targetRoomTerm) !== false;
                                        });
                                        if($fRoom) $preselectedRoomId = $fRoom->id_ruangan;
                                    }
                                }
                            @endphp
                            <div class="relative w-full">
                                <select id="ruangan_id" name="ruangan_id" required
                                    class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white appearance-none transition-all duration-300 group-hover:border-gray-600 block pl-4">
                                    <option value="" disabled {{ old('ruangan_id', $preselectedRoomId) ? '' : 'selected' }} class="text-gray-500">Select Room</option>
                                    @foreach($ruangans as $ruangan)
                                        <option value="{{ $ruangan->id_ruangan }}" {{ old('ruangan_id', $preselectedRoomId) == $ruangan->id_ruangan ? 'selected' : '' }}>
                                            {{ $ruangan->nama_ruangan }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-gray-400">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                </div>
                            </div>
                        </div>

                        <!-- Date -->
                        <div class="space-y-2 relative w-full group">
                            <label for="tgl_penggunaan" class="block text-sm font-medium text-gray-300">Date of Use <span class="text-red-400">*</span></label>
                            <input type="date" id="tgl_penggunaan" name="tgl_penggunaan" value="{{ old('tgl_penggunaan') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white transition-all duration-300 group-hover:border-gray-600 block pl-4 [color-scheme:dark]">
                        </div>

                        <!-- Start Time -->
                        <div class="space-y-2 relative w-full group">
                            <label for="jam_mulai" class="block text-sm font-medium text-gray-300">Start Time <span class="text-red-400">*</span></label>
                            <input type="time" id="jam_mulai" name="jam_mulai" value="{{ old('jam_mulai') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white transition-all duration-300 group-hover:border-gray-600 block pl-4 [color-scheme:dark]">
                        </div>

                        <!-- End Time -->
                        <div class="space-y-2 relative w-full group">
                            <label for="jam_berakhir" class="block text-sm font-medium text-gray-300">End Time <span class="text-red-400">*</span></label>
                            <input type="time" id="jam_berakhir" name="jam_berakhir" value="{{ old('jam_berakhir') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white transition-all duration-300 group-hover:border-gray-600 block pl-4 [color-scheme:dark]">
                        </div>
                    </div>
                </div>

                <div class="w-full h-px bg-gray-800 my-6 block"></div>

                <!-- Facilities Selection Section -->
                <div class="space-y-4 w-full">
                    <label class="block text-sm font-medium text-gray-300 mb-4">Required Facilities <span class="text-red-400">*</span></label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 w-full">
                        @php
                            $facilitiesList = [
                                'LCD & Proyektor',
                                'Set Alat Zoom Meeting',
                                'Sound System & Mic',
                                'TV & set PC standart + Audio'
                            ];
                        @endphp

                        @foreach($facilitiesList as $index => $facility)
                            <label class="relative flex items-center p-4 cursor-pointer rounded-xl border border-gray-700/50 hover:bg-gray-800/40 hover:border-blue-500/50 transition-all group w-full">
                                <input type="checkbox" name="fasilitas_tambahan[]" value="{{ $facility }}" class="w-5 h-5 text-blue-500 bg-[#0a0f1c] border-gray-600 rounded focus:ring-blue-500 focus:ring-2 cursor-pointer transition-colors"
                                       {{ in_array($facility, old('fasilitas_tambahan', [])) ? 'checked' : '' }}>
                                <span class="ml-3 text-sm text-gray-300 group-hover:text-white transition-colors">{{ $facility }}</span>
                            </label>
                        @endforeach
                    </div>

                    <!-- Other Facility Textbox -->
                    <div class="mt-4 w-full group relative">
                        <label for="other_facility" class="block text-sm font-medium text-gray-400 mb-2">Other Requirements (optional)</label>
                        <input type="text" id="other_facility" name="fasilitas_tambahan[]" value="{{ collect(old('fasilitas_tambahan'))->last() && !in_array(collect(old('fasilitas_tambahan'))->last(), $facilitiesList) ? collect(old('fasilitas_tambahan'))->last() : '' }}"
                               class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-gray-500 transition-all duration-300 group-hover:border-gray-600 block pl-4"
                               placeholder="Specify other facilities needed...">
                    </div>
                </div>

                <div class="w-full h-px bg-gray-800 my-6 block"></div>

                <!-- Document Upload Section -->
                <div>
                     <h2 class="text-xl font-semibold text-white mb-5 flex items-center w-full">
                        <span class="w-8 h-8 rounded-lg bg-blue-500/20 text-blue-400 flex items-center justify-center mr-3 text-sm border border-blue-500/30">4</span>
                        Documents
                    </h2>

                    <div class="space-y-8 w-full">
                        <!-- Upload KTP -->
                        <div class="space-y-3 w-full">
                            <label class="block text-sm font-medium text-gray-300">Upload KTP of PIC <span class="text-red-400">*</span></label>
                            <p class="text-xs text-gray-500 mt-1 mb-2">Supported files. Max 10 MB.</p>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-700/50 border-dashed rounded-xl hover:border-blue-500/50 hover:bg-gray-800/30 transition-all group w-full">
                                <div class="space-y-1 text-center w-full">
                                    <svg class="mx-auto h-12 w-12 text-gray-500 group-hover:text-blue-400 transition-colors" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex flex-col text-sm text-gray-400">
                                            <div id="dropzone-ktp" class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                                            <label for="berkas_ktp" class="relative cursor-pointer rounded-md font-medium text-blue-500 hover:text-blue-400 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500 w-full block">
                                                <span>Upload a file</span>
                                                <input id="berkas_ktp" name="berkas_ktp" type="file" required class="sr-only" accept=".jpg,.jpeg,.png,.pdf">
                                            </label>
                                            <p class="pl-1 mt-1">or drag and drop</p>
                                            <div id="preview-wrapper" class="hidden mt-4 pt-4 border-t border-gray-200">
                                                <p class="text-xs text-gray-500 mb-2">Preview Dokumen:</p>
                                                <img id="img-preview" class="hidden mx-auto max-h-48 rounded shadow-md">
            
                                                <div id="pdf-preview-container" class="hidden">
                                                    <div class="flex items-center justify-center bg-gray-100 p-3 rounded">
                                                        <svg class="w-8 h-8 text-red-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"></path></svg>
                                                        <span id="pdf-name" class="text-gray-700 truncate max-w-xs"></span>
                                                    </div>
                                                    <p class="text-[10px] mt-1 text-gray-400 font-italic">*PDF terpilih</p>
                                                </div>
                                                <object id="pdf-embed-ktp" class="hidden w-full h-64 mt-3 rounded" type="application/pdf"></object>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-2 file-name-display">No file chosen</p>
                                </div>
                            </div>
                        </div>

                        <!-- Upload Surat Permohonan -->
                        <div class="space-y-3 w-full border-t border-gray-800/50 pt-6">
                            <label class="block text-sm font-medium text-gray-300">Upload Room Usage Request Letter <span class="text-red-400">*</span></label>
                            <p class="text-xs leading-relaxed text-gray-400 mb-2">The request letter should be addressed to the Head of Bakorwil III Malang, containing the request for EJSC Malang facility usage, event name, date and time, room name, and total participants.</p>
                            <p class="text-xs text-gray-500 mt-1 mb-2">Supported files. Max 10 MB.</p>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-700/50 border-dashed rounded-xl hover:border-blue-500/50 hover:bg-gray-800/30 transition-all group w-full">
                                <div class="space-y-1 text-center w-full">
                                    <svg class="mx-auto h-12 w-12 text-gray-500 group-hover:text-blue-400 transition-colors" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                            <div class="flex flex-col text-sm text-gray-400">
                                                <label for="berkas_surat" class="relative cursor-pointer rounded-md font-medium text-blue-500 hover:text-blue-400 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500 w-full block">
                                                    <span>Upload a file</span>
                                                    <input id="berkas_surat" name="berkas_surat" type="file" required class="sr-only" accept=".jpg,.jpeg,.png,.pdf">
                                                </label>
                                                <p class="pl-1 mt-1">or drag and drop</p>

                                                <div id="dropzone-surat" class="sr-only"></div>

                                                <div id="preview-wrapper-surat" class="hidden mt-4 pt-2 border-t border-gray-200">
                                                    <p class="text-xs text-gray-500 mb-2">Preview Dokumen:</p>
                                                    <img id="img-preview-surat" class="hidden mx-auto max-h-48 rounded shadow-md">
                                                    <div id="pdf-preview-surat" class="hidden">
                                                        <div class="flex items-center justify-center bg-gray-100 p-3 rounded">
                                                            <svg class="w-8 h-8 text-red-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"></path></svg>
                                                            <span id="pdf-name-surat" class="text-gray-700 truncate max-w-xs"></span>
                                                        </div>
                                                        <p class="text-[10px] mt-1 text-gray-400 font-italic">*PDF terpilih</p>
                                                    </div>
                                                    <object id="pdf-embed-surat" class="hidden w-full h-64 mt-3 rounded" type="application/pdf"></object>
                                                </div>
                                            </div>
                                    <p class="text-xs text-gray-500 mt-2 file-name-display">No file chosen</p>
                                </div>
                            </div>
                        </div>

                         <!-- Upload Poster -->
                        <div class="space-y-3 w-full border-t border-gray-800/50 pt-6">
                            <label class="block text-sm font-medium text-gray-300">Upload Event Poster <span class="text-gray-500 text-xs italic ml-1">(Optional)</span></label>
                            <p class="text-xs text-gray-500 mt-1 mb-2">Supported files. Max 10 MB.</p>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-700/50 border-dashed rounded-xl hover:border-blue-500/50 hover:bg-gray-800/30 transition-all group w-full">
                                <div class="space-y-1 text-center w-full">
                                    <svg class="mx-auto h-12 w-12 text-gray-500 group-hover:text-blue-400 transition-colors" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                            <div class="flex flex-col text-sm text-gray-400">
                                                <label for="berkas_poster" class="relative cursor-pointer rounded-md font-medium text-blue-500 hover:text-blue-400 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500 w-full block">
                                                    <span>Upload a file</span>
                                                    <input id="berkas_poster" name="berkas_poster" type="file" class="sr-only" accept=".jpg,.jpeg,.png,.pdf">
                                                </label>
                                                <p class="pl-1 mt-1">or drag and drop</p>

                                                <div id="dropzone-poster" class="sr-only"></div>

                                                <div id="preview-wrapper-poster" class="hidden mt-4 pt-2 border-t border-gray-200">
                                                    <p class="text-xs text-gray-500 mb-2">Preview Dokumen:</p>
                                                    <img id="img-preview-poster" class="hidden mx-auto max-h-48 rounded shadow-md">
                                                    <div id="pdf-preview-poster" class="hidden">
                                                        <div class="flex items-center justify-center bg-gray-100 p-3 rounded">
                                                            <svg class="w-8 h-8 text-red-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"></path></svg>
                                                            <span id="pdf-name-poster" class="text-gray-700 truncate max-w-xs"></span>
                                                        </div>
                                                        <p class="text-[10px] mt-1 text-gray-400 font-italic">*PDF terpilih</p>
                                                    </div>
                                                    <object id="pdf-embed-poster" class="hidden w-full h-64 mt-3 rounded" type="application/pdf"></object>
                                                </div>
                                            </div>
                                    <p class="text-xs text-gray-500 mt-2 file-name-display">No file chosen</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-6 border-t border-gray-800/50 w-full flex">
                    <button type="submit"
                        class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-500 hover:to-cyan-400 text-white font-semibold rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-[#121827] shadow-[0_0_20px_rgba(59,130,246,0.4)] transition-all duration-300 transform hover:-translate-y-1 block ml-auto">
                        Submit Booking Request
                    </button>
                </div>
            </form>
        </div>

        <!-- Info Alert -->
        <div class="mt-8 bg-blue-500/10 border border-blue-500/20 rounded-2xl p-5 text-gray-300 flex items-start gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
                <h4 class="font-medium text-white text-lg">Important Information</h4>
                <p class="mt-1 text-sm leading-relaxed text-gray-400">All submitted requests will be reviewed by the admin. The booking status will remain <span class="bg-yellow-500/20 text-yellow-500 py-0.5 px-2 rounded-md font-medium text-xs border border-yellow-500/30">PENDING</span> until approved. Make sure your Phone/WA number is active as we will notify you shortly.</p>
            </div>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    function updateFileDisplay(input) {
        if (!input) return;
        const file = input.files && input.files[0];
        // Try to find the nearest .file-name-display element
        let fileDisplay = input.closest('form')?.querySelectorAll('.file-name-display');
        if (fileDisplay && fileDisplay.length) {
            // Find the one that is visually closest (simple heuristic)
            for (const el of fileDisplay) {
                const parent = el.closest('div');
                if (parent && parent.contains(input)) {
                    el.innerText = file ? file.name : 'No file chosen';
                    return;
                }
            }
            // fallback: update first
            fileDisplay[0].innerText = file ? file.name : 'No file chosen';
        }
    }

    // KTP input uses existing preview markup (img-preview, pdf-preview-container, pdf-name, preview-wrapper)
    const ktpInput = document.getElementById('berkas_ktp');
    if (ktpInput) {
        ktpInput.addEventListener('change', function(event) {
            const file = event.target.files && event.target.files[0];
            const previewWrapper = document.getElementById('preview-wrapper');
            const imgPreview = document.getElementById('img-preview');
            const pdfPreview = document.getElementById('pdf-preview-container');
            const pdfName = document.getElementById('pdf-name');
            const pdfEmbed = document.getElementById('pdf-embed-ktp');

            if (previewWrapper) previewWrapper.classList.add('hidden');
            if (imgPreview) imgPreview.classList.add('hidden');
            if (pdfPreview) pdfPreview.classList.add('hidden');

            updateFileDisplay(ktpInput);

            if (file) {
                const fileType = file.type || '';
                const reader = new FileReader();
                reader.onload = function(e) {
                    if (previewWrapper) previewWrapper.classList.remove('hidden');
                    if (fileType.startsWith('image/') && imgPreview) {
                        imgPreview.src = e.target.result;
                        imgPreview.classList.remove('hidden');
                        if (pdfEmbed) pdfEmbed.classList.add('hidden');
                    } else if (fileType === 'application/pdf' && pdfPreview && pdfName) {
                        pdfName.innerText = file.name;
                        pdfPreview.classList.remove('hidden');
                        if (pdfEmbed) {
                            pdfEmbed.data = e.target.result;
                            pdfEmbed.classList.remove('hidden');
                        }
                    }
                };
                reader.readAsDataURL(file);
            }
        });
    }

    // Generic handlers for surat and poster: show filename, image/pdf preview, and drag-and-drop
    ['berkas_surat', 'berkas_poster'].forEach(function(id) {
        const input = document.getElementById(id);
        if (!input) return;
        input.addEventListener('change', function(e) {
            const file = e.target.files && e.target.files[0];
            updateFileDisplay(input);

            const isPoster = id === 'berkas_poster';
            const imgPreview = document.getElementById(isPoster ? 'img-preview-poster' : 'img-preview-surat');
            const pdfPreview = document.getElementById(isPoster ? 'pdf-preview-poster' : 'pdf-preview-surat');
            const pdfName = document.getElementById(isPoster ? 'pdf-name-poster' : 'pdf-name-surat');
            const previewWrapper = document.getElementById(isPoster ? 'preview-wrapper-poster' : 'preview-wrapper-surat');
            const pdfEmbed = document.getElementById(isPoster ? 'pdf-embed-poster' : 'pdf-embed-surat');

            if (previewWrapper) previewWrapper.classList.add('hidden');
            if (imgPreview) imgPreview.classList.add('hidden');
            if (pdfPreview) pdfPreview.classList.add('hidden');

            if (file) {
                const fileType = file.type || '';
                const reader = new FileReader();
                reader.onload = function(ev) {
                    if (previewWrapper) previewWrapper.classList.remove('hidden');
                    if (fileType.startsWith('image/') && imgPreview) {
                        imgPreview.src = ev.target.result;
                        imgPreview.classList.remove('hidden');
                    } else if (fileType === 'application/pdf' && pdfPreview && pdfName) {
                        pdfName.innerText = file.name;
                        pdfPreview.classList.remove('hidden');
                        if (pdfEmbed) {
                            pdfEmbed.data = ev.target.result;
                            pdfEmbed.classList.remove('hidden');
                        }
                    }
                };
                reader.readAsDataURL(file);
            }
        });

        // Setup drag & drop for this input
        const dropzoneId = id === 'berkas_poster' ? 'dropzone-poster' : 'dropzone-surat';
        const dropzone = document.getElementById(dropzoneId);
        const visibleDropzone = dropzone || input.closest('.mt-1');
        if (visibleDropzone) {
            ['dragenter', 'dragover'].forEach(evt => visibleDropzone.addEventListener(evt, function(ev) {
                ev.preventDefault(); ev.stopPropagation();
                visibleDropzone.classList?.add('ring-2', 'ring-blue-400');
            }));
            ['dragleave', 'drop'].forEach(evt => visibleDropzone.addEventListener(evt, function(ev) {
                ev.preventDefault(); ev.stopPropagation();
                visibleDropzone.classList?.remove('ring-2', 'ring-blue-400');
            }));
            visibleDropzone.addEventListener('drop', function(ev) {
                ev.preventDefault(); ev.stopPropagation();
                const files = ev.dataTransfer && ev.dataTransfer.files;
                if (files && files.length) {
                    // set files to input
                    try {
                        const dataTransfer = new DataTransfer();
                        dataTransfer.items.add(files[0]);
                        input.files = dataTransfer.files;
                        // trigger change handler
                        input.dispatchEvent(new Event('change', { bubbles: true }));
                    } catch (err) {
                        // fallback: just call handler with first file
                        const file = files[0];
                        updateFileDisplay(input);
                    }
                }
            });
        }
    });
});
</script>
@endsection
