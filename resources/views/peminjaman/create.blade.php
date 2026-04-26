@extends('layouts.app')

@section('title', 'Room Booking - EJSC Bakorwil III Malang')

@section('content')
<main class="pt-[120px] pb-24 bg-[#0a0f1c] min-h-screen relative overflow-hidden">
    {{-- Background --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-600/10 rounded-full blur-[120px]"></div>
        <div class="absolute top-1/2 right-1/4 w-96 h-96 bg-cyan-500/10 rounded-full blur-[120px]"></div>
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 max-w-4xl">

        {{-- Page Title --}}
        <div class="mb-8 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-[#F7AD12]/10 border border-[#F7AD12]/20 text-[#F7AD12] text-xs font-semibold tracking-wider uppercase mb-3">Space Booking</span>
            <h1 class="text-2xl md:text-3xl font-bold text-white mb-2">Room Booking <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#F7AD12] to-[#E3733D]">Form</span></h1>
            <p class="text-gray-400 text-sm">Bakorwil III Malang Building Room Loan Form</p>
        </div>

        {{-- Terms & Conditions Card --}}
        <div class="bg-[#123B7A]/10 border border-[#123B7A]/40 rounded-2xl p-5 mb-6">
            <h3 class="text-sm font-bold text-[#F7AD12] uppercase tracking-wider mb-3 flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Terms & Conditions
            </h3>
            <ul class="space-y-2 text-xs text-gray-300 list-none">
                <li class="flex items-start gap-2"><span class="text-[#F7AD12] mt-0.5">•</span>Reservation must be made at least <strong class="text-white">1 week</strong> before the activity.</li>
                <li class="flex items-start gap-2"><span class="text-[#F7AD12] mt-0.5">•</span>The applicant must submit an official request letter from the relevant institution.</li>
                <li class="flex items-start gap-2"><span class="text-[#F7AD12] mt-0.5">•</span>All participants must complete the Public Satisfaction Survey (SKM) and maintain order during the activity.</li>
                <li class="flex items-start gap-2"><span class="text-[#F7AD12] mt-0.5">•</span>The applicant is obliged to maintain the cleanliness and condition of the facilities used.</li>
                <li class="flex items-start gap-2"><span class="text-[#F7AD12] mt-0.5">•</span>Must comply with the terms and conditions of room use within the Bakorwil III Malang environment.</li>
            </ul>
            <div class="mt-4 bg-[#F7AD12]/10 border border-[#F7AD12]/30 rounded-xl p-4">
                <p class="text-xs text-[#F7AD12] font-semibold">📌 After filling out the form, applicants MUST contact the Bakorwil III Malang Contact Person to confirm the room booking.</p>
                <p class="text-xs text-gray-400 mt-1">(Messages will be replied on working days: Monday–Friday, 08:00–16:00 WIB)</p>
                <div class="mt-3 flex flex-col gap-1 text-xs text-white">
                    <span class="font-medium">Contact Person:</span>
                    <span>📞 Pak Minarno – <strong>0816 1567 9629</strong> (Bakorwil III Malang)</span>
                    <span>📞 Alief – <strong>0813 3080 6923</strong> (EJSC)</span>
                </div>
            </div>
        </div>

        {{-- Conflict Alert (shown via JS) --}}
        <div id="conflict-alert" class="hidden bg-red-500/10 border border-red-500/30 rounded-2xl p-4 mb-6 text-red-400 flex items-start gap-3">
            <svg class="h-6 w-6 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <div>
                <p class="font-semibold">Room Already Booked!</p>
                <p id="conflict-message" class="text-sm mt-1"></p>
            </div>
        </div>

        @if(session('success'))
            <div class="bg-green-500/10 border border-green-500/20 rounded-2xl p-4 mb-6 text-green-400 flex items-start gap-3">
                <svg class="h-6 w-6 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <div>
                    <p class="font-semibold">Booking Submitted!</p>
                    <p class="text-sm mt-1">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-500/10 border border-red-500/20 rounded-2xl p-4 mb-6 text-red-400 flex items-start gap-3">
                <svg class="h-6 w-6 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <div>
                    <p class="font-medium mb-1">Please fix the following errors:</p>
                    <ul class="list-disc list-inside text-sm space-y-1">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        {{-- Form Card --}}
        <div class="bg-[#121827]/80 backdrop-blur-xl border border-gray-800 rounded-3xl p-6 md:p-10 shadow-2xl relative">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-[#F7AD12] to-[#E3733D] rounded-t-3xl"></div>

            <form id="booking-form" action="{{ route('peminjaman.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf

                {{-- Section 1: Institution Type --}}
                <div>
                    <h2 class="text-lg font-semibold text-white mb-5 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-[#F7AD12]/20 text-[#F7AD12] flex items-center justify-center text-sm border border-[#F7AD12]/30 font-bold">1</span>
                        Institution / Organization Type
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        @php $types = ['INSTANSI' => 'Institution', 'UMUM (LEMBAGA/ORGANISASI)' => 'General (Agency/Organization)', 'EVENT (PERORANGAN)' => 'Event (Individual)']; @endphp
                        @foreach($types as $val => $label)
                        <label class="cursor-pointer">
                            <input type="radio" name="kategori_instansi" value="{{ $val }}" required
                                {{ old('kategori_instansi') == $val ? 'checked' : '' }}
                                class="sr-only peer">
                            <div class="flex flex-col items-center gap-2 p-4 rounded-xl border border-gray-700 peer-checked:border-[#F7AD12] peer-checked:bg-[#F7AD12]/10 hover:border-gray-500 transition-all text-center">
                                <span class="text-sm font-medium text-gray-300 peer-checked:text-[#F7AD12]">{{ $label }}</span>
                            </div>
                        </label>
                        @endforeach
                    </div>
                </div>

                <div class="w-full h-px bg-gray-800"></div>

                {{-- Section 2: Organization Info --}}
                <div>
                    <h2 class="text-lg font-semibold text-white mb-5 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-[#F7AD12]/20 text-[#F7AD12] flex items-center justify-center text-sm border border-[#F7AD12]/30 font-bold">2</span>
                        Institution Information
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="instansi" class="block text-sm font-medium text-gray-300">Institution / Organization Name <span class="text-red-400">*</span></label>
                            <input type="text" id="instansi" name="instansi" value="{{ old('instansi') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-[#F7AD12] focus:border-[#F7AD12] text-white placeholder-gray-500 transition-all"
                                placeholder="E.g., Universitas Brawijaya">
                        </div>
                        <div class="space-y-2">
                            <label for="nama_kegiatan" class="block text-sm font-medium text-gray-300">Name of Event <span class="text-red-400">*</span></label>
                            <input type="text" id="nama_kegiatan" name="nama_kegiatan" value="{{ old('nama_kegiatan') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-[#F7AD12] focus:border-[#F7AD12] text-white placeholder-gray-500 transition-all"
                                placeholder="E.g., Annual Leadership Workshop">
                        </div>
                        <div class="space-y-2">
                            <label for="jumlah_peserta" class="block text-sm font-medium text-gray-300">Number of Participants <span class="text-red-400">*</span></label>
                            <input type="number" id="jumlah_peserta" name="jumlah_peserta" value="{{ old('jumlah_peserta') }}" min="1" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-[#F7AD12] focus:border-[#F7AD12] text-white placeholder-gray-500 transition-all"
                                placeholder="Total expected attendees">
                        </div>
                        <div class="md:col-span-2 space-y-2">
                            <label for="alamat_instansi" class="block text-sm font-medium text-gray-300">Address of Institution <span class="text-red-400">*</span></label>
                            <input type="text" id="alamat_instansi" name="alamat_instansi" value="{{ old('alamat_instansi') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-[#F7AD12] focus:border-[#F7AD12] text-white placeholder-gray-500 transition-all"
                                placeholder="Complete address">
                        </div>
                    </div>
                </div>

                <div class="w-full h-px bg-gray-800"></div>

                {{-- Section 3: Booking Details --}}
                <div>
                    <h2 class="text-lg font-semibold text-white mb-5 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-[#F7AD12]/20 text-[#F7AD12] flex items-center justify-center text-sm border border-[#F7AD12]/30 font-bold">3</span>
                        Booking Details
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        {{-- Room Select --}}
                        <div class="md:col-span-2 space-y-2">
                            <label for="ruangan_id" class="block text-sm font-medium text-gray-300">Room to Use <span class="text-red-400">*</span></label>
                            <p class="text-xs text-gray-500">Room details can be viewed on the EJSC Bakorwil III Malang website. *For additional facilities, please contact the room booking CP.</p>
                            <div class="relative">
                                <select id="ruangan_id" name="ruangan_id" required
                                    class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-[#F7AD12] focus:border-[#F7AD12] text-white appearance-none transition-all">
                                    <option value="" disabled {{ old('ruangan_id') ? '' : 'selected' }} class="text-gray-500">Select Room</option>
                                    @foreach($ruangans as $ruangan)
                                        <option value="{{ $ruangan->id_ruangan }}"
                                            data-slug="{{ $ruangan->slug }}"
                                            {{ old('ruangan_id', request('room_id')) == $ruangan->id_ruangan ? 'selected' : '' }}>
                                            {{ $ruangan->nama_ruangan }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-gray-400">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </div>
                            </div>
                        </div>

                        {{-- Dates --}}
                        <div class="space-y-2">
                            <label for="tgl_penggunaan" class="block text-sm font-medium text-gray-300">Start Date <span class="text-red-400">*</span></label>
                            <input type="date" id="tgl_penggunaan" name="tgl_penggunaan" value="{{ old('tgl_penggunaan') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-[#F7AD12] focus:border-[#F7AD12] text-white transition-all [color-scheme:dark]">
                        </div>
                        <div class="space-y-2">
                            <label for="tgl_berakhir" class="block text-sm font-medium text-gray-300">End Date <span class="text-red-400">*</span></label>
                            <input type="date" id="tgl_berakhir" name="tgl_berakhir" value="{{ old('tgl_berakhir') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-[#F7AD12] focus:border-[#F7AD12] text-white transition-all [color-scheme:dark]">
                        </div>

                        {{-- Times --}}
                        <div class="space-y-2">
                            <label for="jam_mulai" class="block text-sm font-medium text-gray-300">Start Time <span class="text-red-400">*</span></label>
                            <input type="time" id="jam_mulai" name="jam_mulai" value="{{ old('jam_mulai') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-[#F7AD12] focus:border-[#F7AD12] text-white transition-all [color-scheme:dark]">
                        </div>
                        <div class="space-y-2">
                            <label for="jam_berakhir" class="block text-sm font-medium text-gray-300">End Time <span class="text-red-400">*</span></label>
                            <input type="time" id="jam_berakhir" name="jam_berakhir" value="{{ old('jam_berakhir') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-[#F7AD12] focus:border-[#F7AD12] text-white transition-all [color-scheme:dark]">
                        </div>
                    </div>
                </div>

                <div class="w-full h-px bg-gray-800"></div>

                {{-- Section 4: PIC --}}
                <div>
                    <h2 class="text-lg font-semibold text-white mb-5 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-[#F7AD12]/20 text-[#F7AD12] flex items-center justify-center text-sm border border-[#F7AD12]/30 font-bold">4</span>
                        Person in Charge (PIC)
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="pj_kegiatan" class="block text-sm font-medium text-gray-300">PIC Full Name <span class="text-red-400">*</span></label>
                            <input type="text" id="pj_kegiatan" name="pj_kegiatan" value="{{ old('pj_kegiatan') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-[#F7AD12] focus:border-[#F7AD12] text-white placeholder-gray-500 transition-all"
                                placeholder="Full name">
                        </div>
                        <div class="space-y-2">
                            <label for="no_hp_pj" class="block text-sm font-medium text-gray-300">PIC Phone / WhatsApp <span class="text-red-400">*</span></label>
                            <input type="tel" id="no_hp_pj" name="no_hp_pj" value="{{ old('no_hp_pj') }}" required
                                class="w-full px-4 py-3 bg-[#0a0f1c]/50 border border-gray-700/50 rounded-xl focus:ring-2 focus:ring-[#F7AD12] focus:border-[#F7AD12] text-white placeholder-gray-500 transition-all"
                                placeholder="08xxxxxxxxxx">
                        </div>
                    </div>
                </div>

                <div class="w-full h-px bg-gray-800"></div>

                {{-- Section 5: Documents --}}
                <div>
                    <h2 class="text-lg font-semibold text-white mb-5 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-[#F7AD12]/20 text-[#F7AD12] flex items-center justify-center text-sm border border-[#F7AD12]/30 font-bold">5</span>
                        Documents
                    </h2>
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-300">Room Usage Request Letter <span class="text-red-400">*</span></label>
                        <p class="text-xs text-gray-400 leading-relaxed">The request letter must be addressed to the <strong class="text-white">Head of Bakorwil III Malang</strong>, containing the request for EJSC Malang facility usage, event name, date and time, room name, and total participants.</p>
                        <p class="text-xs text-gray-500 mt-1">Supported: PDF only. Max 10 MB.</p>
                        <label for="berkas_surat" class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-700/50 border-dashed rounded-xl hover:border-[#F7AD12]/50 hover:bg-[#F7AD12]/5 transition-all cursor-pointer group">
                            <div class="text-center">
                                <svg id="upload-icon-surat" class="mx-auto h-10 w-10 text-gray-500 group-hover:text-[#F7AD12] transition-colors" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <p id="file-name-surat" class="mt-2 text-sm text-gray-400 group-hover:text-white transition-colors">Click to upload or drag & drop</p>
                                <input id="berkas_surat" name="berkas_surat" type="file" required class="sr-only" accept=".pdf,.jpg,.jpeg,.png">
                            </div>
                        </label>
                    </div>
                </div>

                <div class="w-full h-px bg-gray-800"></div>

                {{-- Section 6: Agreement --}}
                <div>
                    <h2 class="text-lg font-semibold text-white mb-5 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-[#F7AD12]/20 text-[#F7AD12] flex items-center justify-center text-sm border border-[#F7AD12]/30 font-bold">6</span>
                        Agreement
                    </h2>
                    <label class="flex items-start gap-3 cursor-pointer group">
                        <input type="checkbox" name="bersedia_ubah_jadwal" value="1" required
                            {{ old('bersedia_ubah_jadwal') ? 'checked' : '' }}
                            class="mt-1 w-5 h-5 text-[#F7AD12] bg-[#0a0f1c] border-gray-600 rounded focus:ring-[#F7AD12] cursor-pointer shrink-0">
                        <span class="text-sm text-gray-300 group-hover:text-white transition-colors leading-relaxed">
                            I am willing to reschedule the booking or be transferred to another meeting room if at any time there is an important event that must be prioritized. <span class="text-red-400">*</span>
                        </span>
                    </label>
                </div>

                {{-- Note --}}
                <div class="bg-amber-500/5 border border-amber-500/20 rounded-xl p-4">
                    <p class="text-xs text-amber-400 font-semibold mb-1">📝 NOTE</p>
                    <p class="text-xs text-gray-300 leading-relaxed">After filling out this Room Booking Form, applicants <strong class="text-white">MUST confirm</strong> to the Bakorwil III Malang Contact Person no later than <strong class="text-white">H+1</strong> after submitting the form.</p>
                    <div class="mt-2 text-xs text-gray-400 space-y-0.5">
                        <p>CP: <strong class="text-white">Pak Minarno</strong> – 0816 1567 9629 (Bakorwil III Malang)</p>
                        <p>CP: <strong class="text-white">Alief</strong> – 0813 3080 6923 (EJSC)</p>
                    </div>
                </div>

                {{-- Submit --}}
                <div class="pt-4 border-t border-gray-800/50 flex justify-end">
                    <button type="button" id="submit-btn"
                        class="px-8 py-4 bg-gradient-to-r from-[#F7AD12] to-[#E3733D] hover:brightness-110 text-[#01031C] font-bold rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F7AD12] shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
                        Submit Booking Request
                    </button>
                </div>

            </form>
        </div>
    </div>
</main>

{{-- Conflict Modal --}}
<div id="conflict-modal" class="hidden fixed inset-0 bg-black/70 backdrop-blur-sm z-50 flex items-center justify-center p-4">
    <div class="bg-[#0a0f1c] border border-red-500/40 rounded-2xl p-8 max-w-md w-full shadow-2xl">
        <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-full bg-red-500/20 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <h3 class="text-lg font-bold text-white">Room Already Booked</h3>
        </div>
        <p class="text-gray-300 text-sm leading-relaxed" id="modal-message">
            This room is already booked on the selected date and time. Please choose a different schedule.
        </p>
        <button onclick="document.getElementById('conflict-modal').classList.add('hidden')"
            class="mt-6 w-full py-3 bg-[#F7AD12] text-[#01031C] font-bold rounded-xl hover:brightness-110 transition-all">
            Change Schedule
        </button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // File upload display
    const suratInput = document.getElementById('berkas_surat');
    const fileNameSurat = document.getElementById('file-name-surat');
    if (suratInput && fileNameSurat) {
        suratInput.addEventListener('change', function () {
            fileNameSurat.textContent = this.files[0] ? this.files[0].name : 'Click to upload or drag & drop';
        });
    }

    // Conflict check on submit
    document.getElementById('submit-btn').addEventListener('click', async function () {
        const ruanganId = document.getElementById('ruangan_id').value;
        const tglMulai  = document.getElementById('tgl_penggunaan').value;
        const tglAkhir  = document.getElementById('tgl_berakhir').value;
        const jamMulai  = document.getElementById('jam_mulai').value;
        const jamAkhir  = document.getElementById('jam_berakhir').value;

        if (!ruanganId || !tglMulai || !tglAkhir || !jamMulai || !jamAkhir) {
            document.getElementById('booking-form').reportValidity();
            return;
        }

        try {
            const res = await fetch("{{ route('peminjaman.check') }}", {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                body: JSON.stringify({ ruangan_id: ruanganId, tgl_penggunaan: tglMulai, tgl_berakhir: tglAkhir, jam_mulai: jamMulai, jam_berakhir: jamAkhir })
            });
            const data = await res.json();
            if (data.conflict) {
                document.getElementById('modal-message').textContent = data.message;
                document.getElementById('conflict-modal').classList.remove('hidden');
            } else {
                document.getElementById('booking-form').submit();
            }
        } catch (e) {
            // If check fails, just submit
            document.getElementById('booking-form').submit();
        }
    });
});
</script>
@endsection
