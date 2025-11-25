<x-public-layout>

    {{-- ======================================= --}}
    {{-- Bagian 1: Hero Header (Dinamis) --}}
    {{-- ======================================= --}}
    <section class="relative h-[350px] w-full flex items-center justify-center overflow-hidden">
        
        {{-- Background Image --}}
        <div class="absolute inset-0 bg-cover bg-center" 
             style="background-image: url('{{ asset('images/Nirvanaa.png') }}');">
        </div>

        {{-- Overlay Gradient --}}
        <div class="absolute inset-0 bg-gradient-to-b from-slate-900/90 via-slate-900/80 to-slate-900/90 mix-blend-multiply"></div>

        {{-- Konten Hero --}}
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto mt-6">
            {{-- Breadcrumb Navigasi --}}
            <a href="{{ route('produk.index') }}" class="inline-flex items-center text-emerald-400 hover:text-white transition-colors text-sm font-medium mb-6 uppercase tracking-wider border border-emerald-500/30 bg-emerald-900/20 rounded-full px-4 py-1 backdrop-blur-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali ke Kategori
            </a>

            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 leading-tight">
                {{ $kategori->nama_kategori }}
            </h1>
            <p class="text-lg text-slate-300 max-w-2xl mx-auto font-light">
                {{ $kategori->deskripsi_singkat }}
            </p>
        </div>
    </section>

    {{-- ======================================= --}}
    {{-- Bagian 2: Grid Sub-Produk --}}
    {{-- ======================================= --}}
    <section class="py-20 bg-slate-50 w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                @forelse ($produks as $produk)
                    {{-- Kartu Sub-Produk --}}
                    <a href="{{ route('produk.detail.show', $produk->id) }}"
                       class="group relative bg-white rounded-2xl p-8 shadow-sm border border-slate-200 hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                        
                        {{-- Dekorasi Circle Background --}}
                        <div class="absolute -right-6 -top-6 w-24 h-24 bg-emerald-50 rounded-full group-hover:scale-150 group-hover:bg-emerald-100 transition-all duration-500"></div>

                        <div class="relative z-10">
                            {{-- Ikon Produk (Generic) --}}
                            <div class="w-14 h-14 bg-white border border-slate-100 shadow-sm rounded-xl flex items-center justify-center text-emerald-600 mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>

                            <h3 class="text-xl font-bold text-slate-800 mb-2 group-hover:text-emerald-700 transition-colors">
                                {{ $produk->nama_produk }}
                            </h3>
                            
                            <p class="text-slate-500 text-sm mb-6">
                                Solusi terbaik untuk kebutuhan finansial Anda dengan prinsip syariah.
                            </p>

                            {{-- Tombol Text Link --}}
                            <div class="flex items-center text-emerald-600 font-semibold text-sm group-hover:translate-x-2 transition-transform">
                                Lihat Detail Lengkap
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </div>
                        </div>
                    </a>
                @empty
                    {{-- State Kosong --}}
                    <div class="col-span-1 md:col-span-3 text-center py-16 bg-white rounded-2xl border border-dashed border-slate-300">
                        <svg class="w-16 h-16 text-slate-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                        <h3 class="text-lg font-medium text-slate-900">Belum ada produk</h3>
                        <p class="text-slate-500 mt-1">Produk untuk kategori ini sedang kami persiapkan.</p>
                        <a href="{{ route('produk.index') }}" class="inline-block mt-4 px-6 py-2 bg-slate-100 text-slate-700 rounded-lg hover:bg-slate-200 transition-colors text-sm font-medium">
                            Kembali
                        </a>
                    </div>
                @endforelse

            </div>

        </div>
    </section>

</x-public-layout>