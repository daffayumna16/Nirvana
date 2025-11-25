<x-public-layout>

    {{-- ======================================= --}}
    {{-- Bagian 1: Hero Header (Konsisten) --}}
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
                Solusi Keuangan
            </span>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                Produk & Layanan <br> <span class="text-emerald-400">Terlengkap</span>
            </h1>
            <p class="text-lg text-slate-200 max-w-2xl mx-auto">
                Penuhi berbagai kebutuhan finansial Anda dengan ragam produk perbankan syariah yang amanah dan menguntungkan.
            </p>
        </div>
    </section>

    {{-- ======================================= --}}
    {{-- Bagian 2: Grid Kategori Produk --}}
    {{-- ======================================= --}}
    <section class="py-20 bg-slate-50 w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Intro Section --}}
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-800 mb-4">Pilih Kategori Layanan</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto rounded-full mb-4"></div>
                <p class="text-slate-600">Sesuaikan dengan kebutuhan rencana masa depan Anda.</p>
            </div>

            {{-- Grid Kartu --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                @foreach ($kategoriProduks as $kategori)
                    <a href="{{ route('produk.kategori.show', $kategori->id) }}"
                       class="group bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 hover:border-emerald-100 flex flex-col h-full">

                        {{-- Bagian Gambar dengan Efek Zoom --}}
                        <div class="relative h-64 overflow-hidden">
                            <div class="absolute inset-0 bg-slate-900/10 group-hover:bg-transparent transition-colors z-10"></div>
                            
                            {{-- Pastikan path gambar benar. Menggunakan Storage::url --}}
                            <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
                                 src="{{ Storage::url($kategori->gambar) }}" 
                                 alt="{{ $kategori->nama_kategori }}"
                                 onerror="this.onerror=null; this.src='https://via.placeholder.com/400x300?text=Nirvana+Bank';"> {{-- Fallback Image jika error --}}
                        </div>

                        {{-- Bagian Konten Teks --}}
                        <div class="p-8 flex flex-col flex-grow relative">
                            
                            {{-- Ikon Dekoratif Kecil (Opsional) --}}
                            <div class="absolute -top-6 right-8 w-12 h-12 bg-emerald-500 rounded-xl shadow-lg flex items-center justify-center text-white z-20 group-hover:bg-emerald-600 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>

                            <h3 class="text-2xl font-bold text-slate-800 mb-3 group-hover:text-emerald-700 transition-colors">
                                {{ $kategori->nama_kategori }}
                            </h3>
                            
                            <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3 flex-grow">
                                {{ $kategori->deskripsi_singkat }}
                            </p>

                            {{-- Call to Action --}}
                            <div class="pt-6 border-t border-slate-100 mt-auto">
                                <span class="inline-flex items-center text-emerald-600 font-bold text-sm group-hover:translate-x-2 transition-transform">
                                    Lihat Pilihan Produk
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>

        </div>
    </section>

</x-public-layout>