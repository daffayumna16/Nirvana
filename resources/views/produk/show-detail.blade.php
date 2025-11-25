<x-public-layout>

    {{-- ======================================= --}}
    {{-- Bagian 1: Hero Header (Compact & Breadcrumb) --}}
    {{-- ======================================= --}}
    <section class="relative h-[300px] w-full flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" 
             style="background-image: url('{{ asset('images/Nirvanaa.png') }}');">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-slate-900/90 via-slate-900/80 to-slate-900/90 mix-blend-multiply"></div>

        <div class="relative z-10 text-center px-4 max-w-5xl mx-auto mt-8">
            {{-- Breadcrumb --}}
            <nav class="flex justify-center items-center text-sm text-slate-400 mb-4 space-x-2">
                <a href="{{ route('produk.index') }}" class="hover:text-white transition-colors">Produk</a>
                <span>/</span>
                <a href="{{ route('produk.kategori.show', $produk->kategoriProduk->id) }}" class="hover:text-white transition-colors">{{ $produk->kategoriProduk->nama_kategori }}</a>
                <span>/</span>
                <span class="text-emerald-400 font-medium truncate max-w-[150px] sm:max-w-none">{{ $produk->nama_produk }}</span>
            </nav>

            <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight mb-2">
                {{ $produk->nama_produk }}
            </h1>
            <p class="text-slate-300 text-lg font-light">Solusi tepat untuk kebutuhan Anda.</p>
        </div>
    </section>

    {{-- ======================================= --}}
    {{-- Bagian 2: Konten & Sidebar --}}
    {{-- ======================================= --}}
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                {{-- KOLOM KIRI: ISI KONTEN (2/3 Lebar) --}}
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden p-8 md:p-10">
                        
                        <div class="flex items-center mb-8 pb-6 border-b border-slate-100">
                            <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-slate-800">Deskripsi Lengkap</h2>
                                <p class="text-slate-500 text-sm">Detail informasi produk {{ $produk->nama_produk }}</p>
                            </div>
                        </div>

                        {{-- AREA DESKRIPSI (Tipografi dipercantik) --}}
                        <article class="prose prose-lg max-w-none 
                            prose-headings:font-bold prose-headings:text-slate-800 prose-headings:mb-4 prose-headings:mt-8
                            prose-p:text-slate-600 prose-p:leading-relaxed prose-p:mb-4
                            prose-li:text-slate-600 prose-li:mb-2
                            prose-strong:text-emerald-700 prose-strong:font-bold
                            prose-ul:list-disc prose-ul:pl-5 prose-ul:mb-6
                            prose-ol:list-decimal prose-ol:pl-5 prose-ol:mb-6">
                            
                            {!! $produk->deskripsi !!}

                        </article>

                        {{-- Navigasi Bawah --}}
                        <div class="mt-10 pt-6 border-t border-slate-100">
                            <a href="{{ route('produk.kategori.show', $produk->kategoriProduk->id) }}" class="inline-flex items-center text-slate-500 hover:text-emerald-600 font-medium transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                                Kembali ke Kategori {{ $produk->kategoriProduk->nama_kategori }}
                            </a>
                        </div>
                    </div>
                </div>

                {{-- KOLOM KANAN: SIDEBAR (1/3 Lebar) --}}
                <div class="lg:col-span-1 space-y-6">
                    
                    {{-- Card 1: CTA Utama --}}
                    <div class="bg-white p-6 rounded-2xl shadow-lg border-t-4 border-emerald-500">
                        <h3 class="text-lg font-bold text-slate-800 mb-2">Tertarik dengan Produk ini?</h3>
                        <p class="text-slate-500 text-sm mb-6">Segera buka rekening atau ajukan pembiayaan sekarang juga.</p>
                        
                        <a href="{{ route('register') }}" class="block w-full text-center py-3 px-4 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl transition-all shadow-lg shadow-emerald-500/30 mb-3 hover:-translate-y-1">
                            Ajukan Sekarang
                        </a>
                        
                        <a href="#" class="block w-full text-center py-3 px-4 bg-emerald-50 text-emerald-700 font-bold rounded-xl hover:bg-emerald-100 transition-colors border border-emerald-100">
                            Simulasi Perhitungan
                        </a>
                    </div>

                    {{-- Card 2: Kontak Bantuan --}}
                    <div class="bg-slate-800 p-6 rounded-2xl text-white relative overflow-hidden">
                        <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-white/10 rounded-full blur-xl"></div>
                        
                        <h3 class="text-lg font-bold mb-4 relative z-10">Butuh Bantuan?</h3>
                        <ul class="space-y-4 relative z-10">
                            <li class="flex items-center">
                                <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-xs text-slate-400">Nirvana Call</p>
                                    <p class="font-bold text-emerald-400">1500-666</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-xs text-slate-400">Email Kami</p>
                                    <p class="font-bold">care@nirvanabank.co.id</p>
                                </div>
                            </li>
                        </ul>
                    </div>


                </div>

            </div>
        </div>
    </section>

</x-public-layout>