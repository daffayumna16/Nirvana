<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Bank Syariah</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .swiper-pagination {
            position: relative !important;
            margin-top: 20px !important;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="font-sans antialiased text-gray-900">
    <div class="min-h-screen bg-white flex flex-col justify-between">
        {{-- Added flex-col justify-between to make footer stick to bottom if content is short --}}

        @if (request()->is('/'))
            {{-- HOMEPAGE: Absolute (Transparan di atas Hero) --}}
            <header class="absolute w-full z-50 text-gray-200 transition-all duration-300" x-data="{ open: false }">
            @else
                {{-- HALAMAN LAIN: Sticky (Putih, Menempel saat scroll) --}}
                <header
                    class="sticky top-0 w-full z-50 bg-white/95 backdrop-blur-md border-b border-gray-200 shadow-sm text-gray-600 transition-all duration-300"
                    x-data="{ open: false }">
        @endif

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 items-center h-20"> {{-- Ubah h-16 jadi h-20 agar navbar lebih lega --}}

                {{-- KOLOM 1: LOGO --}}
                <div class="flex-shrink-0 flex items-center justify-self-start">
                    <a href="/" class="flex items-center gap-2">
                        {{-- Opsional: Tambahkan Logo Gambar Disini --}}
                        <span
                            class="font-bold text-xl tracking-tight @if (request()->is('/')) text-white @else text-emerald-700 @endif">
                            Nirvana Bank
                        </span>
                    </a>
                </div>

                {{-- KOLOM 2: MENU DESKTOP --}}
                <nav class="hidden space-x-8 sm:-my-px sm:flex flex-1 justify-center">
                    @php
                        // Helper untuk class menu aktif/tidak
                        $navClass = request()->is('/')
                            ? 'text-gray-200 hover:text-white'
                            : 'text-gray-600 hover:text-emerald-600';
                    @endphp

                    <a href="{{ route('syariah') }}"
                        class="text-sm font-medium transition-colors duration-200 {{ $navClass }}">Syariah</a>
                    <a href="{{ route('tentang-kami') }}"
                        class="text-sm font-medium transition-colors duration-200 {{ $navClass }}">Tentang Kami</a>
                    <a href="{{ route('produk.index') }}"
                        class="text-sm font-medium transition-colors duration-200 {{ $navClass }}">Produk</a>
                    <a href="{{ route('berita.public.index') }}"
                        class="text-sm font-medium transition-colors duration-200 {{ $navClass }}">Berita</a>
                    <a href="{{ route('galeri.public.index') }}"
                        class="text-sm font-medium transition-colors duration-200 {{ $navClass }}">Galeri</a>
                </nav>

                {{-- KOLOM 3: LOGIN / USER --}}
                <div class="hidden sm:flex sm:items-center justify-self-end">
                    @guest
                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = !dropdownOpen"
                                class="inline-flex items-center px-5 py-2.5 bg-emerald-600 hover:bg-emerald-700 border border-transparent rounded-full text-sm font-bold text-white shadow-lg shadow-emerald-500/30 transition-all transform hover:-translate-y-0.5">
                                <span>Area Nasabah</span>
                                <svg class="ml-2 -mr-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="dropdownOpen" @click.away="dropdownOpen = false"
                                class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-xl py-2 border border-gray-100 z-50"
                                style="display: none;" x-transition>
                                <a href="{{ route('login') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700">Login</a>
                                <a href="{{ route('register') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700">Daftar
                                    Baru</a>
                            </div>
                        </div>
                    @else
                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = !dropdownOpen"
                                class="flex items-center gap-2 text-sm font-medium transition duration-150 @if (request()->is('/')) text-white hover:text-gray-200 @else text-gray-700 hover:text-emerald-600 @endif">
                                <div class="text-right hidden md:block">
                                    <div class="text-xs opacity-70">Halo,</div>
                                    <div>{{ Auth::user()->name }}</div>
                                </div>
                                <div
                                    class="h-8 w-8 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-700 font-bold border border-emerald-200">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                            </button>
                            <div x-show="dropdownOpen" @click.away="dropdownOpen = false"
                                class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-xl py-2 border border-gray-100 z-50"
                                style="display: none;" x-transition>
                                <a href="{{ route('dashboard') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50">Dashboard</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                        class="block w-full px-4 py-2 text-left text-sm text-red-600 hover:bg-red-50"
                                        onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>

                {{-- MOBILE HAMBURGER --}}
                <div class="-mr-2 flex items-center sm:hidden col-start-3 justify-self-end">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md transition duration-150 ease-in-out focus:outline-none @if (request()->is('/')) text-gray-200 hover:text-white hover:bg-white/10 @else text-gray-600 hover:text-emerald-600 hover:bg-gray-100 @endif">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            {{-- MOBILE MENU --}}
            <div :class="{ 'block': open, 'hidden': !open }"
                class="hidden sm:hidden bg-white absolute left-0 w-full border-b border-gray-200 shadow-lg top-full">
                <div class="pt-2 pb-3 space-y-1 px-4">
                    <a href="{{ route('syariah') }}"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-emerald-600 hover:bg-emerald-50">Syariah</a>
                    <a href="{{ route('tentang-kami') }}"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-emerald-600 hover:bg-emerald-50">Tentang
                        Kami</a>
                    <a href="{{ route('produk.index') }}"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-emerald-600 hover:bg-emerald-50">Produk</a>
                    <a href="{{ route('berita.public.index') }}"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-emerald-600 hover:bg-emerald-50">Berita</a>
                    <a href="{{ route('galeri.public.index') }}"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-emerald-600 hover:bg-emerald-50">Galeri</a>
                </div>
            </div>
        </div>
        </header>

        {{-- MAIN CONTENT --}}
        {{-- Perbaikan: Menghapus pt-16 conditional karena header sticky/relative akan mengatur flow secara natural --}}
        <main class="flex-grow w-full">
            {{ $slot }}
        </main>

        {{-- FOOTER --}}
        <footer class="relative bg-slate-900 text-gray-300 mt-auto">
            <div class="absolute inset-0 bg-cover bg-center opacity-10"
                style="background-image: url('{{ asset('images/NirvanaBank.png') }}'); mix-blend-mode: overlay;">
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

                    <div>
                        <h3 class="text-xl font-bold text-white mb-4">Nirvana Bank</h3>
                        <p class="text-sm text-slate-400 leading-relaxed mb-6">
                            Mitra keuangan syariah terpercaya untuk masa depan yang lebih berkah dan sejahtera.
                        </p>
                        <div class="flex space-x-4 mt-6">

                            {{-- Tombol Instagram --}}
                            <a href="https://www.instagram.com/nirvanabank?igsh=dGV5YjQybXhhaHho" target="_blank" aria-label="Instagram"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 text-slate-400 border border-slate-700 transition-all duration-300 hover:bg-gradient-to-tr hover:from-yellow-500 hover:via-red-500 hover:to-purple-600 hover:text-white hover:border-transparent hover:-translate-y-1 shadow-lg shadow-transparent hover:shadow-pink-500/30">
                                {{-- Ikon SVG Instagram --}}
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"
                                        stroke-width="2"></rect>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" stroke-width="2"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"
                                        stroke-width="2" stroke-linecap="round"></line>
                                </svg>
                            </a>

                            {{-- Tombol Facebook --}}
                            <a href="https://www.facebook.com/profile.php?id=61583955015367" target="_blank" aria-label="Facebook"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 text-slate-400 border border-slate-700 transition-all duration-300 hover:bg-blue-600 hover:text-white hover:border-blue-500 hover:-translate-y-1 shadow-lg shadow-transparent hover:shadow-blue-500/30">
                                {{-- Ikon SVG Facebook --}}
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                                </svg>
                            </a>

                            {{-- (Opsional) Tombol YouTube --}}
                            <a href="http://www.youtube.com/@NirvanaBank" target="_blank" aria-label="YouTube"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 text-slate-400 border border-slate-700 transition-all duration-300 hover:bg-red-600 hover:text-white hover:border-red-500 hover:-translate-y-1 shadow-lg shadow-transparent hover:shadow-red-500/30">
                                {{-- Ikon SVG YouTube --}}
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                                </svg>
                            </a>

                        </div>
                    </div>

                    <div>
                        <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Hubungi Kami</h4>
                        <ul class="space-y-3 text-sm text-slate-400">
                            <li class="flex items-start"><span class="mr-2">📍</span> Jl. Melati No.24, Jakarta
                                Selatan</li>
                            <li class="flex items-start"><span class="mr-2">📞</span> 1500-666 (24 Jam)</li>
                            <li class="flex items-start"><span class="mr-2">📧</span> nirvanabank20@gmail.com</li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Akses Cepat</h4>
                        <ul class="space-y-2 text-sm text-slate-400">
                            <li><a href="{{ route('syariah') }}"
                                    class="hover:text-emerald-400 transition-colors">Prinsip Syariah</a></li>
                            <li><a href="{{ route('produk.index') }}"
                                    class="hover:text-emerald-400 transition-colors">Produk</a></li>
                            <li><a href="{{ route('galeri.public.index') }}" class="hover:text-emerald-400 transition-colors">Dokumentasi</a></li>
                            <li><a href="{{ route('berita.public.index') }}" class="hover:text-emerald-400 transition-colors">Berita</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Terdaftar & Diawasi</h4>

                        {{-- Container Logo --}}
                        <div class="flex flex-wrap gap-3 mb-6">

                            {{-- Logo OJK --}}
                            <div
                                class="bg-white rounded-lg p-2 h-12 w-auto min-w-[80px] flex items-center justify-center shadow-md hover:scale-105 transition-transform">
                                <img src="{{ asset('images/ojk.png') }}" alt="Otoritas Jasa Keuangan"
                                    class="h-full w-full object-contain">
                            </div>

                            {{-- Logo LPS --}}
                            <div
                                class="bg-white rounded-lg p-2 h-12 w-auto min-w-[80px] flex items-center justify-center shadow-md hover:scale-105 transition-transform">
                                <img src="{{ asset('images/lps.png') }}" alt="Lembaga Penjamin Simpanan"
                                    class="h-full w-full object-contain">
                            </div>

                            {{-- (Opsional) Logo iB Syariah --}}
                            <div
                                class="bg-white rounded-lg p-2 h-12 w-auto min-w-[60px] flex items-center justify-center shadow-md hover:scale-105 transition-transform">
                                <img src="{{ asset('images/IBS.png') }}" alt="iB Perbankan Syariah"
                                    class="h-full w-full object-contain">
                            </div>

                        </div>

                        <p class="text-xs text-slate-500 leading-relaxed">
                            PT Bank Nirvana Syariah berizin dan diawasi oleh <strong class="text-slate-400">Otoritas
                                Jasa Keuangan (OJK)</strong> serta merupakan peserta penjaminan <strong
                                class="text-slate-400">LPS</strong>.
                        </p>
                    </div>
                </div>

                <div
                    class="border-t border-slate-800 mt-12 pt-8 text-center md:text-left flex flex-col md:flex-row justify-between items-center">
                    <p class="text-sm text-slate-500">&copy; {{ date('Y') }} PT Bank Nirvana Syariah. All rights
                        reserved.</p>
                    <div class="flex gap-6 mt-4 md:mt-0 text-sm text-slate-500">
                        <a href="#" class="hover:text-white">Privacy Policy</a>
                        <a href="#" class="hover:text-white">Terms of Service</a>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>
