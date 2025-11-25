<x-public-layout>

    {{-- ======================================= --}}
    {{-- Bagian 1: Hero Header --}}
    {{-- ======================================= --}}
    <section class="relative h-[350px] w-full flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" 
             style="background-image: url('{{ asset('images/Nirvanaa.png') }}');">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 to-slate-800/70 mix-blend-multiply"></div>

        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <span class="inline-block py-1 px-3 rounded-full bg-emerald-500/20 border border-emerald-500/30 text-emerald-300 text-sm font-semibold tracking-wider mb-4 uppercase backdrop-blur-sm">
                Dokumentasi
            </span>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                Galeri Kegiatan
            </h1>
            <p class="text-lg text-slate-200 max-w-2xl mx-auto">
                Momen-momen berharga dari berbagai kegiatan dan acara Nirvana Bank bersama nasabah.
            </p>
        </div>
    </section>

    {{-- ======================================= --}}
    {{-- Bagian 2: Grid Galeri Modern --}}
    {{-- ======================================= --}}
    <section class="py-20 bg-slate-50 w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            @if($galeris->count() > 0)
                {{-- Masonry-like Grid (Responsive) --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    @foreach ($galeris as $item)
                        <div class="group relative h-72 rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 cursor-pointer">
                            
                            {{-- Link ke Gambar Asli (Bisa diganti dengan Lightbox plugin jika ada) --}}
                            <a href="{{ $item->url }}" target="_blank" class="block w-full h-full">
                                
                                {{-- Gambar --}}
                                <img src="{{ $item->url }}" 
                                     alt="{{ $item->judul }}" 
                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                     loading="lazy">
                                
                                {{-- Overlay Gelap (Muncul saat Hover) --}}
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    
                                    {{-- Judul Foto --}}
                                    <h3 class="text-white font-bold text-lg translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                        {{ $item->judul ?? 'Dokumentasi Nirvana Bank' }}
                                    </h3>
                                    
                                    {{-- Tanggal / Info Tambahan --}}
                                    <p class="text-emerald-300 text-sm mt-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-500 delay-75">
                                        {{ $item->created_at->format('d M Y') }}
                                    </p>

                                    {{-- Ikon Zoom --}}
                                    <div class="absolute top-4 right-4 bg-white/20 backdrop-blur-md p-2 rounded-full text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                                    </div>
                                </div>

                            </a>
                        </div>
                    @endforeach

                </div>

                {{-- Pagination --}}
                <div class="mt-12">
                    {{-- {{ $galeris->links() }} --}}
                </div>

            @else
                {{-- State Kosong --}}
                <div class="flex flex-col items-center justify-center py-20 bg-white rounded-3xl border border-dashed border-slate-300 text-center">
                    <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-10 h-10 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Belum Ada Foto</h3>
                    <p class="text-slate-500 max-w-md mx-auto">Kami sedang mengumpulkan momen terbaik. Silakan kembali lagi nanti.</p>
                </div>
            @endif
            
        </div>
    </section>

</x-public-layout>