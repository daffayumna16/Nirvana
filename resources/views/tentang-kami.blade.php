<x-public-layout>

    {{-- ======================================= --}}
    {{-- Bagian 1: Hero Header (Konsisten dengan halaman lain) --}}
    {{-- ======================================= --}}
    <section class="relative h-[400px] w-full flex items-center justify-center overflow-hidden">
        
        {{-- Background Image --}}
        <div class="absolute inset-0 bg-cover bg-center" 
             style="background-image: url('{{ asset('images/Nirvanaa.png') }}');">
        </div>

        {{-- Overlay Gradient --}}
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 to-slate-800/70 mix-blend-multiply"></div>

        {{-- Konten Hero --}}
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <span class="inline-block py-1 px-3 rounded-full bg-emerald-500/20 border border-emerald-500/30 text-emerald-300 text-sm font-semibold tracking-wider mb-4 uppercase backdrop-blur-sm">
                Profil Perusahaan
            </span>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                Mengenal Lebih Dekat <br> <span class="text-emerald-400">Nirvana Bank</span>
            </h1>
            <p class="text-lg text-slate-200 max-w-2xl mx-auto">
                Membangun kepercayaan melalui transparansi, integritas, dan layanan perbankan syariah yang profesional.
            </p>
        </div>
    </section>


    {{-- ======================================= --}}
    {{-- Bagian 2: Grid Menu Profil --}}
    {{-- ======================================= --}}
    <section class="py-20 bg-slate-50 w-full">
        {{-- PERBAIKAN UTAMA: Container max-w-7xl mx-auto ditambahkan disini --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Intro Text --}}
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-800 mb-4">Siapa Kami?</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto rounded-full mb-6"></div>
                <p class="text-slate-600 max-w-3xl mx-auto text-lg">
                    Temukan informasi lengkap mengenai visi, sejarah, struktur manajemen, dan komitmen kami dalam memajukan ekonomi syariah di Indonesia.
                </p>
            </div>

            {{-- Grid Kartu --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse ($profilBagians as $index => $bagian)
                    <a href="{{ route('profil.bagian.show', $bagian->id) }}"
                       class="group relative flex flex-col bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2 hover:border-emerald-200 h-full">
                        
                        {{-- Dekorasi Garis Atas Berwarna --}}
                        <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-slate-200 to-slate-300 group-hover:from-emerald-400 group-hover:to-emerald-600 transition-all duration-300"></div>
                        
                        <div class="p-8 flex flex-col flex-grow relative overflow-hidden">
                            {{-- Dekorasi Background Number (Opsional, estetika) --}}
                            <span class="absolute -right-4 -top-4 text-9xl font-bold text-slate-50 opacity-50 group-hover:text-emerald-50 transition-colors select-none z-0">
                                {{ $index + 1 }}
                            </span>

                            {{-- Ikon Header --}}
                            <div class="w-14 h-14 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center mb-6 text-slate-600 group-hover:bg-emerald-500 group-hover:text-white group-hover:border-emerald-500 transition-all duration-300 relative z-10">
                                {{-- Ikon dinamis sederhana --}}
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>

                            {{-- Judul & Deskripsi --}}
                            <h3 class="text-2xl font-bold text-slate-800 mb-3 group-hover:text-emerald-700 transition-colors relative z-10">
                                {{ $bagian->judul }}
                            </h3>
                            
                            <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3 relative z-10">
                                {{ $bagian->deskripsi_singkat }}
                            </p>

                            {{-- Tombol 'Baca Selengkapnya' --}}
                            <div class="mt-auto flex items-center text-emerald-600 font-semibold text-sm group-hover:translate-x-2 transition-transform relative z-10">
                                Baca Selengkapnya
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </div>
                        </div>
                    </a>
                @empty
                    {{-- State Kosong --}}
                    <div class="col-span-1 md:col-span-3 flex flex-col items-center justify-center py-12 bg-white rounded-2xl border border-dashed border-slate-300">
                        <svg class="w-16 h-16 text-slate-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        <h3 class="text-lg font-medium text-slate-900">Belum ada konten profil</h3>
                        <p class="text-slate-500 text-sm mt-1">Silakan tambahkan data melalui panel admin.</p>
                    </div>
                @endforelse
            </div>

        </div>
    </section>

</x-public-layout>