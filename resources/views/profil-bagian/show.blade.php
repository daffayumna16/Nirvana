<x-public-layout>

    {{-- ======================================= --}}
    {{-- Bagian 1: Hero Header (Compact) --}}
    {{-- ======================================= --}}
    <section class="relative h-[300px] w-full flex items-center justify-center overflow-hidden">
        
        {{-- Background Image --}}
        <div class="absolute inset-0 bg-cover bg-center" 
             style="background-image: url('{{ asset('images/Nirvanaa.png') }}');">
        </div>

        {{-- Overlay Gradient --}}
        <div class="absolute inset-0 bg-gradient-to-b from-slate-900/90 via-slate-900/70 to-slate-900/90 mix-blend-multiply"></div>

        {{-- Konten Hero --}}
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto mt-8">
            {{-- Breadcrumb Kecil --}}
            <div class="flex items-center justify-center gap-2 text-slate-400 text-sm mb-4 font-medium uppercase tracking-wider">
                <span class="text-emerald-400">Tentang Kami</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="text-white">Detail Profil</span>
            </div>

            <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
                {{ $bagian->judul }}
            </h1>
        </div>
    </section>

    {{-- ======================================= --}}
    {{-- Bagian 2: Konten Dokumen --}}
    {{-- ======================================= --}}
    <section class="py-16 bg-slate-50 relative">
        
        {{-- Dekorasi Background (Opsional) --}}
        <div class="absolute top-0 left-0 w-full h-64 bg-gradient-to-b from-slate-900 to-slate-50 -z-0"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 relative z-10">
            
            {{-- Kartu Kertas Dokumen --}}
            <div class="bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden">
                
                {{-- Header Dokumen --}}
                <div class="px-8 py-6 bg-slate-50 border-b border-slate-100 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <span class="text-slate-500 text-sm font-medium">Informasi Resmi Perusahaan</span>
                    </div>
                    <div class="text-slate-400 text-sm">
                        {{-- Tanggal update (jika ada kolom updated_at), atau teks statis --}}
                        Nirvana Bank
                    </div>
                </div>

                {{-- Area Isi Konten (Typography Custom) --}}
                <div class="p-8 md:p-12">
                    <article class="prose prose-lg max-w-none 
                        prose-headings:font-bold prose-headings:text-slate-800 
                        prose-p:text-slate-600 prose-p:leading-relaxed
                        prose-a:text-emerald-600 prose-a:no-underline hover:prose-a:underline
                        prose-strong:text-emerald-700
                        prose-li:text-slate-600 prose-li:marker:text-emerald-500">
                        
                        {!! $bagian->isi_lengkap !!}

                    </article>
                </div>

                {{-- Footer Dokumen / Navigasi --}}
                <div class="px-8 py-6 bg-slate-50 border-t border-slate-100 flex justify-between items-center">
                    <a href="{{ route('tentang-kami') }}" class="group inline-flex items-center text-slate-500 hover:text-emerald-700 font-medium transition-colors">
                        <div class="w-8 h-8 rounded-full bg-white border border-slate-200 flex items-center justify-center mr-3 group-hover:border-emerald-400 group-hover:bg-emerald-50 transition-all">
                            <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        </div>
                        Kembali ke Menu Profil
                    </a>
                </div>

            </div>

        </div>
    </section>

</x-public-layout>