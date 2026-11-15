@extends('layouts.app')

@section('title', 'Tentang Kami - ROZWIA Islamic Travel')

@section('content')

<!-- CONTAINER UTAMA BACKGROUND FULL SE-LAYAR -->
<div class="w-full bg-[#F4EFE6] min-h-screen pb-24">
    
    <!-- BANNER HERO HEADER -->
    <div class="relative w-full bg-[#0B3B24] overflow-hidden shadow-md pt-36 pb-20 px-4 sm:px-6 lg:px-8 mb-16">
        <div class="absolute inset-0 opacity-20 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&q=80&w=1200')"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto text-center space-y-4">
            <p class="text-xs text-amber-300 font-serif tracking-widest uppercase">
                <a href="/" class="hover:underline">Beranda</a> &gt; <span class="text-white font-medium">Tentang Kami</span>
            </p>
            <h1 class="text-3xl sm:text-5xl font-bold text-white font-serif tracking-tight">
                Mengenal Lebih dalam Tentang <br class="hidden sm:inline"> ROZWIA TRAVEL
            </h1>
            <p class="text-emerald-100/90 text-sm sm:text-base font-serif max-w-2xl mx-auto leading-relaxed">
                Setiap Perjalanan Memiliki Cerita. Kenali lebih dekat siapa kami dan bagaimana kami menemani perjalanan menuju Tanah Suci.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">

        <!-- PROFIL & DESKRIPSI PERUSAHAAN -->
        <div class="max-w-4xl mx-auto space-y-8 text-center">
            <div class="space-y-3">
                <h2 class="text-3xl sm:text-4xl font-bold text-[#0B3B24] font-serif">
                    ROZWIA Islamic Travel
                </h2>
                <p class="text-amber-700 text-lg font-serif italic font-medium">
                    "Ibadah lebih tenang, perjalanan lebih nyaman"
                </p>
            </div>

            <div class="space-y-6 text-stone-700 text-sm sm:text-base font-serif leading-relaxed text-left bg-white p-8 sm:p-10 rounded-[32px] shadow-sm border border-stone-200/80">
                <p>
                    <strong>ROZWIA</strong> adalah penyelenggara perjalanan ibadah haji dan umrah yang hadir untuk menemani Anda menuju Baitullah. Kami percaya perjalanan suci layak dijalani dengan hati tenang, tanpa kebingungan soal jadwal, biaya, maupun persiapan.
                </p>
                <p>
                    Sejak Anda mendaftar sampai kembali ke tanah air, tim kami mendampingi setiap tahap dengan pelayanan yang ramah, informasi yang jelas, dan pendampingan yang sabar sesuai sunnah.
                </p>
            </div>
        </div>


        <!-- LAYANAN KAMI (HAJI & UMROH) -->
        <div class="space-y-8">
            <div class="text-center space-y-2">
                <h3 class="text-2xl sm:text-3xl font-bold text-[#0B3B24] font-serif">Layanan Kami</h3>
                <div class="w-16 h-1 bg-amber-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Paket Haji -->
                <div class="bg-[#0B3B24] rounded-3xl p-8 sm:p-10 shadow-lg text-white flex flex-col justify-between space-y-6 border border-emerald-900">
                    <div class="space-y-3">
                        <h4 class="text-2xl font-bold font-serif text-amber-300">Paket Haji</h4>
                        <p class="text-emerald-100/90 text-xs sm:text-sm font-serif leading-relaxed">
                            Paket haji khusus dengan pendampingan, akomodasi, dan jadwal keberangkatan yang terencana, agar Anda bisa fokus menyempurnakan ibadah.
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('paket.haji') }}" class="inline-block bg-[#E5D3B3] hover:bg-[#d8c4a1] text-emerald-950 font-serif font-bold text-xs px-6 py-3 rounded-full shadow-md transition">
                            Lihat Paket Haji
                        </a>
                    </div>
                </div>

                <!-- Paket Umrah -->
                <div class="bg-white rounded-3xl p-8 sm:p-10 shadow-sm text-stone-800 flex flex-col justify-between space-y-6 border border-stone-200/80">
                    <div class="space-y-3">
                        <h4 class="text-2xl font-bold font-serif text-[#0B3B24]">Paket Umrah</h4>
                        <p class="text-stone-600 text-xs sm:text-sm font-serif leading-relaxed">
                            Pilihan paket umrah berbagai kebutuhan, mulai dari Reguler, VIP hingga Keluarga, lengkap dengan pilihan jadwal dan tipe kamar.
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('paket.umroh') }}" class="inline-block bg-[#0B3B24] hover:bg-emerald-900 text-white font-serif font-semibold text-xs px-6 py-3 rounded-full shadow-sm transition">
                            Lihat Paket Umrah
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- KEUNGGULAN LAYANAN KAMI -->
        <div class="space-y-8">
            <div class="text-center space-y-2">
                <h3 class="text-2xl sm:text-3xl font-bold text-[#0B3B24] font-serif">Keunggulan Layanan Kami</h3>
                <div class="w-16 h-1 bg-amber-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- 1 -->
                <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200/80 space-y-4 relative flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-[#0B3B24] flex items-center justify-center font-bold">
                            <svg class="w-6 h-6 text-[#0B3B24]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <h4 class="font-bold text-[#0B3B24] font-serif text-base">Pelayanan Ramah</h4>
                        <p class="text-xs text-stone-600 font-serif leading-relaxed">Pelayanan penuh perhatian untuk setiap jamaah.</p>
                    </div>
                    <span class="absolute bottom-4 right-5 text-xs font-bold text-stone-300 font-serif">01</span>
                </div>

                <!-- 2 -->
                <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200/80 space-y-4 relative flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-[#0B3B24] flex items-center justify-center font-bold">
                            <svg class="w-6 h-6 text-[#0B3B24]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        </div>
                        <h4 class="font-bold text-[#0B3B24] font-serif text-base">Pendamping Jamaah</h4>
                        <p class="text-xs text-stone-600 font-serif leading-relaxed">Pendamping selama perjalanan ibadah dengan nyaman.</p>
                    </div>
                    <span class="absolute bottom-4 right-5 text-xs font-bold text-stone-300 font-serif">02</span>
                </div>

                <!-- 3 -->
                <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200/80 space-y-4 relative flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-[#0B3B24] flex items-center justify-center font-bold">
                            <svg class="w-6 h-6 text-[#0B3B24]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                        <h4 class="font-bold text-[#0B3B24] font-serif text-base">Jadwal Terencana</h4>
                        <p class="text-xs text-stone-600 font-serif leading-relaxed">Informasi keberangkatan teratur dan tepat waktu.</p>
                    </div>
                    <span class="absolute bottom-4 right-5 text-xs font-bold text-stone-300 font-serif">03</span>
                </div>

                <!-- 4 -->
                <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200/80 space-y-4 relative flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-[#0B3B24] flex items-center justify-center font-bold">
                            <svg class="w-6 h-6 text-[#0B3B24]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h4 class="font-bold text-[#0B3B24] font-serif text-base">Biaya Transparan</h4>
                        <p class="text-xs text-stone-600 font-serif leading-relaxed">Informasi biaya fasilitas yang jelas tanpa biaya tersembunyi.</p>
                    </div>
                    <span class="absolute bottom-4 right-5 text-xs font-bold text-stone-300 font-serif">04</span>
                </div>
            </div>

            <!-- Quote banner kecil -->
            <div class="bg-[#0B3B24] text-white text-center py-4 px-6 rounded-2xl font-serif text-xs sm:text-sm tracking-wide shadow-sm">
                Lebih tenang mempersiapkan perjalanan, lebih fokus menjalankan ibadah.
            </div>
        </div>


        <!-- PERJALANAN IBADAH ANDA (TIMELINE LANGKAH DEMI LANGKAH) -->
        <div class="space-y-8">
            <div class="text-center space-y-2">
                <h3 class="text-2xl sm:text-4xl font-bold text-[#0B3B24] font-serif">
                    Perjalanan Ibadah Anda <br>
                    <span class="text-amber-700 italic">Selangkah demi Langkah</span>
                </h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 pt-4">
                @php
                    $steps = [
                        ['num' => '1', 'title' => 'Pendaftaran', 'desc' => 'Pilih paket dan isi data diri jamaah.'],
                        ['num' => '2', 'title' => 'Persiapan Dokumen', 'desc' => 'Pengurusan paspor, visa, dan perlengkapan.'],
                        ['num' => '3', 'title' => 'Manasik & Pembekalan', 'desc' => 'Bimbingan tata cara ibadah sebelum berangkat.'],
                        ['num' => '4', 'title' => 'Keberangkatan', 'desc' => 'Penerbangan menuju Tanah Suci.'],
                        ['num' => '5', 'title' => 'Tiba di Tanah Suci', 'desc' => 'Penyambutan dan check-in hotel di Makkah/Madinah.'],
                        ['num' => '6', 'title' => 'Pelaksanaan Ibadah', 'desc' => 'Menjalankan umrah/haji dipandu muthawif.'],
                        ['num' => '7', 'title' => 'Perjalanan Pulang', 'desc' => 'Kepulangan jamaah kembali ke tanah air.'],
                        ['num' => '8', 'title' => 'Tiba di Indonesia', 'desc' => 'Jamaah berkumpul kembali dengan keluarga tercinta.'],
                    ];
                @endphp

                @foreach($steps as $step)
                <div class="bg-white rounded-2xl p-5 shadow-xs border border-stone-200/80 flex items-center gap-4">
                    <span class="w-10 h-10 rounded-full bg-[#0B3B24] text-amber-300 text-sm font-bold flex items-center justify-center shrink-0 font-serif">
                        {{ $step['num'] }}
                    </span>
                    <div class="space-y-0.5">
                        <h4 class="font-bold text-[#0B3B24] text-xs font-serif">{{ $step['title'] }}</h4>
                        <p class="text-[11px] text-stone-600 font-serif leading-tight">{{ $step['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


        <!-- HUBUNGI KAMI -->
        <div class="bg-white rounded-[36px] p-8 sm:p-12 shadow-sm border border-stone-200/80 grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6 space-y-6">
                <div class="space-y-2">
                    <h3 class="text-2xl sm:text-3xl font-bold text-[#0B3B24] font-serif">Hubungi Kami</h3>
                    <p class="text-stone-600 text-xs sm:text-sm font-serif leading-relaxed">
                        Ada pertanyaan seputar paket, jadwal keberangkatan, atau pendaftaran? Tim ROZWIA siap membantu memberikan informasi dan menjawab kebutuhan perjalanan ibadah Anda.
                    </p>
                </div>

                <div class="flex flex-wrap gap-4">
                    <a href="https://wa.me/6289518829438" target="_blank" class="bg-emerald-50 hover:bg-emerald-100 text-[#0B3B24] border border-emerald-200 px-5 py-3 rounded-2xl font-serif text-xs font-bold flex items-center gap-2.5 transition">
                        <span>📞</span> 0895-1882-9438
                    </a>
                    <a href="mailto:Rozwia@gmail.com" class="bg-emerald-50 hover:bg-emerald-100 text-[#0B3B24] border border-emerald-200 px-5 py-3 rounded-2xl font-serif text-xs font-bold flex items-center gap-2.5 transition">
                        <span>✉️</span> Rozwia@gmail.com
                    </a>
                </div>

                <div class="space-y-2 pt-2 border-t border-stone-200">
                    <h4 class="font-bold text-[#0B3B24] text-xs font-serif uppercase tracking-wider">Kantor Pusat:</h4>
                    <p class="text-xs text-stone-600 font-serif leading-relaxed">
                        Graha Kartika Pratama Blok F2 Nomor 11 Kelurahan Bojong Baru Kecamatan Bojong Gede Kabupaten Bogor Jawa Barat
                    </p>
                </div>

                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="{{ route('faq') }}" class="bg-stone-100 hover:bg-stone-200 text-stone-800 font-serif font-bold text-xs px-6 py-3 rounded-2xl transition">
                        Lihat Pertanyaan Umum
                    </a>
                    <a href="https://wa.me/6289518829438?text=Assalamualaikum%20ROZWIA,%20saya%20ingin%20berkonsultasi%20mengenai%20perjalanan%20ibadah." target="_blank" class="bg-[#25D366] hover:bg-[#20ba5a] text-white font-serif font-bold text-xs px-6 py-3 rounded-2xl shadow-md transition flex items-center gap-2">
                        <span>💬</span> Chat Via WhatsApp
                    </a>
                </div>
            </div>

            <!-- Google Maps Embed / Ilustrasi Peta -->
            <div class="lg:col-span-6">
                <div class="relative h-72 sm:h-80 rounded-2xl overflow-hidden shadow-inner border border-stone-300">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.398695027581!2d106.7925!3d-6.5275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzEnMzkuMCJTIDE0NsKwNDcnMzMuMCJF!5e0!3m2!1sid!2sid!4v1650000000000!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection