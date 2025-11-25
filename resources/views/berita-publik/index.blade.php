<x-public-layout>

    {{-- ======================================= --}}
    {{-- Bagian 1: Hero Header --}}
    {{-- ======================================= --}}
    <section class="relative h-[350px] w-full flex items-center justify-center overflow-hidden">
        
        {{-- Background Image --}}
        <div class="absolute inset-0 bg-cover bg-center" 
             style="background-image: url('{{ asset('images/Nirvanaa.png') }}');">
        </div>

        {{-- Overlay Gradient --}}
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 to-slate-800/70 mix-blend-multiply"></div>

        {{-- Konten Hero --}}
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <span class="inline-block py-1 px-3 rounded-full bg-emerald-500/20 border border-emerald-500/30 text-emerald-300 text-sm font-semibold tracking-wider mb-4 uppercase backdrop-blur-sm">
                Pusat Informasi
            </span>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                Berita & Artikel
            </h1>
            <p class="text-lg text-slate-200 max-w-2xl mx-auto">
                Update terbaru seputar Nirvana Bank dan wawasan finansial syariah.
            </p>
        </div>
    </section>

    {{-- ======================================= --}}
    {{-- Bagian 2: Daftar Berita (Tanpa Gambar) --}}
    {{-- ======================================= --}}
    <section class="py-20 bg-slate-50 w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Header Section Kecil --}}
            <div class="flex items-center justify-between mb-10">
                <h2 class="text-2xl font-bold text-slate-800 border-l-4 border-emerald-500 pl-4">
                    Artikel Terbaru
                </h2>
                
                {{-- Search Bar Sederhana --}}
                <div class="hidden md:block relative w-64">
                    <input type="text" placeholder="Cari topik..." class="w-full pl-10 pr-4 py-2 bg-white rounded-lg border border-slate-200 text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors">
                    <div class="absolute left-3 top-2.5 text-slate-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                </div>
            </div>

            {{-- Grid Berita --}}
            @if($beritas->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    @foreach ($beritas as $item)
                        <a href="{{ route('berita.public.show', $item->id) }}" class="group relative flex flex-col bg-white p-8 rounded-2xl shadow-sm border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 h-full overflow-hidden">
                            
                            {{-- Dekorasi Garis Atas (Berubah warna saat hover) --}}
                            <div class="absolute top-0 left-0 w-full h-1 bg-slate-100 group-hover:bg-emerald-500 transition-colors duration-300"></div>

                            {{-- Meta Data (Tanggal) --}}
                            <div class="flex items-center justify-between mb-4 text-xs font-medium text-slate-500">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    {{ $item->created_at->format('d M Y') }}
                                </div>
                                <span class="px-2 py-1 bg-slate-100 rounded text-slate-600 group-hover:bg-emerald-50 group-hover:text-emerald-600 transition-colors">
                                    Berita
                                </span>
                            </div>

                            {{-- Judul --}}
                            <h3 class="text-xl font-bold text-slate-800 mb-3 leading-snug group-hover:text-emerald-700 transition-colors">
                                {{ $item->judul }}
                            </h3>
                            
                            {{-- Cuplikan Isi --}}
                            <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3 flex-grow">
                                {{ Str::limit(strip_tags($item->isi), 120) }}
                            </p>

                            {{-- Link Baca Selengkapnya --}}
                            <div class="pt-4 border-t border-slate-100 mt-auto flex items-center text-emerald-600 font-semibold text-sm group-hover:translate-x-2 transition-transform">
                                Baca Selengkapnya
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </div>
                        </a>
                    @endforeach

                </div>

                {{-- Pagination --}}
                <div class="mt-12">
                    {{-- {{ $beritas->links() }} --}}
                </div>

            @else
                {{-- State Kosong --}}
                <div class="text-center py-16 bg-white rounded-2xl border border-dashed border-slate-300">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-slate-100 mb-4 text-slate-400">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                    </div>
                    <h3 class="text-lg font-medium text-slate-900">Belum ada berita</h3>
                    <p class="text-slate-500 text-sm mt-1">Silakan kembali lagi nanti untuk informasi terbaru.</p>
                </div>
            @endif

        </div>
    </section>

</x-public-layout>