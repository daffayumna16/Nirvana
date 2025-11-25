<x-public-layout>

    {{-- ======================================= --}}
    <!-- Bagian 1: Hero Statis Premium -->
    {{-- ======================================= --}}
    <section class="relative h-screen bg-cover bg-right flex items-center justify-center overflow-hidden" 
             style="background-image: url('{{ asset('images/banner.png') }}');">
        
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/70 to-transparent"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full flex flex-col items-start justify-center h-full pt-20">
            <div class="max-w-2xl animate-fade-in-up">
                <span class="text-emerald-400 font-bold tracking-wider uppercase text-sm mb-2 block">Bank Syariah Terpercaya</span>
                <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight mb-6">
                    Wujudkan Impian <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-400">Sesuai Syariah</span>
                </h1>
                <p class="text-lg text-slate-300 mb-10 leading-relaxed max-w-lg">
                    Nikmati berbagai layanan perbankan modern yang aman, transparan, dan penuh berkah untuk masa depan Anda dan keluarga.
                </p>
                
<div class="flex flex-col sm:flex-row gap-4">
    {{-- Tombol Utama (Hijau Emerald) --}}
    <a href="{{ route('produk.index') }}" 
       class="px-8 py-4 bg-emerald-600 hover:bg-emerald-700 text-white rounded-full font-bold shadow-lg shadow-emerald-500/30 transition-all transform hover:-translate-y-1 text-center">
        Jelajahi Produk
    </a>

    {{-- Tombol Kedua (DIPERBAIKI: Ubah jadi Solid Slate agar kontras di atas putih) --}}
    <a href="{{ route ('tentang-kami') }}" 
       class="px-8 py-4 bg-slate-800 hover:bg-slate-900 text-white rounded-full font-bold shadow-lg shadow-black-500/30 transition-all transform hover:-translate-y-1 text-center border border-slate-700">
        Tentang Kami
    </a>
</div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full h-auto text-slate-50 fill-current">
                <path fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </section>

    {{-- ======================================= --}}
    <!-- Bagian 2: Informasi & Promo (Gradient Background) -->
    {{-- ======================================= --}}
    {{-- UBAH BG DISINI: bg-gradient-to-b from-slate-50 to-slate-200 --}}
    <section class="py-20 bg-gradient-to-b from-slate-50 to-slate-200 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">
                    Informasi & Promo Terbaru
                </h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto rounded-full mb-4"></div>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                    Dapatkan penawaran eksklusif dan kabar terkini dari Bank Nirvana untuk menunjang gaya hidup syariah Anda.
                </p>
            </div>

            <div class="relative group">
                {{-- Hapus overflow-hidden agar shadow kartu tidak terpotong --}}
                <div class="swiper h-full py-8 pl-2 pr-2">
                    <div class="swiper-wrapper">
                        @foreach ($sliders as $slide)
                            <div class="swiper-slide h-auto">
                                <a href="{{ $slide->link_tombol ?? '#' }}" class="block h-full group/card bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-slate-100 transform hover:-translate-y-1">
                                    
                                    <div class="relative h-56 overflow-hidden">
                                        <img src="{{ $slide->url }}" 
                                             alt="{{ $slide->judul }}" 
                                             class="w-full h-full object-cover transition-transform duration-500 group-hover/card:scale-110">
                                    </div>
                                    
                                    <div class="p-6 flex flex-col h-full">
                                        <h3 class="text-xl font-bold text-slate-800 mb-2 group-hover/card:text-emerald-600 transition-colors">
                                            {{ $slide->judul }}
                                        </h3>
                                        <p class="text-slate-500 text-sm mb-4 line-clamp-2">
                                            {{ $slide->subjudul }}
                                        </p>
                                        <div class="mt-auto flex items-center text-emerald-600 font-semibold text-sm group-hover/card:translate-x-2 transition-transform">
                                            Selengkapnya
                                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    
                    <div class="swiper-pagination !bottom-0"></div>
                </div>
                
                <div class="swiper-button-prev !text-slate-800 !w-12 !h-12 !bg-white !rounded-full !shadow-lg !left-0 md:!-left-6 opacity-0 group-hover:opacity-100 transition-opacity hover:bg-emerald-50"></div>
                <div class="swiper-button-next !text-slate-800 !w-12 !h-12 !bg-white !rounded-full !shadow-lg !right-0 md:!-right-6 opacity-0 group-hover:opacity-100 transition-opacity hover:bg-emerald-50"></div>
            </div>

        </div>
    </section>

    {{-- ======================================= --}}
    <!-- Bagian 3: Keunggulan (Gradient Background Berbeda) -->
    {{-- ======================================= --}}
    {{-- UBAH BG DISINI: bg-gradient-to-t from-white to-slate-100 --}}
    <section class="py-24 bg-gradient-to-t from-white to-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Mengapa Memilih Kami?</h2>
                <p class="text-slate-600">Keamanan, kenyamanan, dan keberkahan dalam satu genggaman.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Kartu 1 -->
                <div class="group p-8 rounded-3xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:shadow-emerald-100/50 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-emerald-50 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-150"></div>
                    
                    <div class="w-14 h-14 bg-emerald-100 rounded-2xl flex items-center justify-center mb-6 text-emerald-600 group-hover:scale-110 transition-transform relative z-10">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3 relative z-10">Solusi Pendanaan</h3>
                    <p class="text-slate-600 leading-relaxed relative z-10">
                        Kemudahan menabung dengan akad Wadiah dan Mudharabah yang transparan dan sesuai syariah untuk masa depan cerah.
                    </p>
                </div>
                <!-- Kartu 2 -->
                <div class="group p-8 rounded-3xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:shadow-blue-100/50 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-blue-50 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-150"></div>

                    <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 text-blue-600 group-hover:scale-110 transition-transform relative z-10">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3 relative z-10">Pembiayaan Syariah</h3>
                    <p class="text-slate-600 leading-relaxed relative z-10">
                        Wujudkan rumah impian, kendaraan, atau modal usaha dengan margin kompetitif dan akad Murabahah yang adil.
                    </p>
                </div>
                <!-- Kartu 3 -->
                <div class="group p-8 rounded-3xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:shadow-amber-100/50 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-amber-50 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-150"></div>

                    <div class="w-14 h-14 bg-amber-100 rounded-2xl flex items-center justify-center mb-6 text-amber-600 group-hover:scale-110 transition-transform relative z-10">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3 relative z-10">Promo & Program</h3>
                    <p class="text-slate-600 leading-relaxed relative z-10">
                        Dapatkan berbagai kejutan menarik, hadiah langsung, dan program loyalitas khusus untuk nasabah setia kami.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Bagian 4: Widget Data (Tetap sama seperti sebelumnya) --}}
    <section class="py-24 bg-slate-900 relative overflow-hidden">
        {{-- ... (Kode bagian 4 tidak berubah) ... --}}
         <div class="absolute top-0 left-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-emerald-500 rounded-full blur-3xl opacity-20"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-500 rounded-full blur-3xl opacity-20"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-start">
                
                <!-- Kolom Tabel Nisbah -->
                <div>
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 rounded-xl bg-emerald-500/20 flex items-center justify-center text-emerald-400 mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold text-white">Tabel Nisbah</h3>
                            <p class="text-slate-400">Indikasi bagi hasil deposito bulan ini.</p>
                        </div>
                    </div>
                    
                    <div class="bg-white/5 backdrop-blur-lg rounded-2xl overflow-hidden border border-white/10">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-white/10 text-white text-left text-sm uppercase tracking-wider">
                                    <th class="p-4 font-semibold">Tenor</th>
                                    <th class="p-4 font-semibold text-right">Nisbah (Nasabah)</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-300 divide-y divide-white/5">
                                @foreach ($nisbahs as $nisbah)
                                    <tr class="hover:bg-white/5 transition-colors">
                                        <td class="p-4 font-medium">{{ $nisbah->tenor }}</td>
                                        <td class="p-4 text-right text-emerald-400 font-bold">{{ $nisbah->persentase }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Kolom Harga Emas -->
                <div>
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 rounded-xl bg-yellow-500/20 flex items-center justify-center text-yellow-400 mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold text-white">Taksiran Emas</h3>
                            <p class="text-slate-400">Harga beli emas Antam hari ini.</p>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-br from-yellow-900/40 to-slate-900/40 backdrop-blur-lg rounded-2xl overflow-hidden border border-yellow-500/20">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-yellow-500/10 text-yellow-100 text-left text-sm uppercase tracking-wider">
                                    <th class="p-4 font-semibold">Berat</th>
                                    <th class="p-4 font-semibold text-right">Harga / Bar</th>
                                    <th class="p-4 font-semibold text-right hidden sm:table-cell">Harga / Gram</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-300 divide-y divide-white/5">
                                @foreach ($hargaEmas as $emas)
                                    <tr class="hover:bg-white/5 transition-colors">
                                        <td class="p-4 font-bold text-white">{{ $emas->gram }}</td>
                                        <td class="p-4 text-right">{{ $emas->harga_bar }}</td>
                                        <td class="p-4 text-right text-slate-400 text-sm hidden sm:table-cell">{{ $emas->harga_gr }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="p-4 bg-black/20 text-right">
                            <p class="text-xs text-slate-500">
                                Terakhir diupdate: {{ date('d M Y') }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-public-layout>

{{-- SCRIPT INIT SWIPER (TETAP SAMA) --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.swiper', {
            loop: true,
            spaceBetween: 24,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            slidesPerView: 1,
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 }
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>