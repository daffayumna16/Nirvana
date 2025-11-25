<x-public-layout>

    {{-- ======================================= --}}
    {{-- Bagian 1: Hero Header --}}
    {{-- ======================================= --}}
    {{-- PERBAIKAN: Hapus 'w-screen left-1/2...' ganti dengan 'w-full' --}}
    <section class="relative h-[400px] w-full flex items-center justify-center overflow-hidden">
        
        {{-- Background Image --}}
        <div class="absolute inset-0 bg-cover bg-center" 
             style="background-image: url('{{ asset('images/Nirvanaa.png') }}');">
        </div>

        {{-- Overlay Gradient --}}
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 to-slate-800/60 mix-blend-multiply"></div>

        {{-- Konten Hero --}}
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <span class="inline-block py-1 px-3 rounded-full bg-emerald-500/20 border border-emerald-500/30 text-emerald-300 text-sm font-semibold tracking-wider mb-4 uppercase backdrop-blur-sm">
                Filosofi Kami
            </span>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                Prinsip Syariah <br> <span class="text-emerald-400">Nirvana Bank</span>
            </h1>
            <p class="text-lg text-slate-200 max-w-2xl mx-auto">
                Menjunjung tinggi nilai-nilai keislaman dalam setiap transaksi untuk keberkahan harta Anda.
            </p>
        </div>
    </section>

    {{-- ======================================= --}}
    {{-- Bagian 2: Konten Utama --}}
    {{-- ======================================= --}}
    {{-- PERBAIKAN: Hapus 'w-screen left-1/2...' ganti dengan 'w-full' --}}
    <section class="py-20 bg-slate-50 w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                {{-- KOLOM KIRI: Definisi (Sticky) --}}
                <div class="lg:col-span-4 lg:sticky lg:top-28"> 
                    {{-- Note: top-28 agar tidak tertutup navbar sticky --}}
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-200 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-50 rounded-bl-full -mr-10 -mt-10 opacity-50"></div>
                        
                        <h2 class="text-2xl font-bold text-slate-800 mb-4 relative z-10">
                            Apa itu <br> <span class="text-emerald-600">Bank Syariah?</span>
                        </h2>
                        <div class="w-16 h-1 bg-emerald-500 rounded-full mb-6"></div>
                        
                        <p class="text-slate-600 leading-relaxed mb-6 text-justify">
                            Bank Syariah adalah lembaga perbankan yang menjalankan kegiatan usahanya berdasarkan 
                            <strong class="text-emerald-700">Prinsip Syariah</strong> atau hukum Islam.
                        </p>
                        <p class="text-slate-600 leading-relaxed text-justify">
                            Menurut jenisnya, Bank Syariah terdiri atas Bank Umum Syariah dan Bank Pembiayaan Rakyat Syariah, yang mengutamakan keadilan dan transparansi.
                        </p>
                    </div>
                </div>

                {{-- KOLOM KANAN: Prinsip-Prinsip (Grid Cards) --}}
                <div class="lg:col-span-8">
                    <div class="mb-8">
                        <h3 class="text-3xl font-bold text-slate-800">Nilai Utama Kami</h3>
                        <p class="text-slate-500 mt-2">Fondasi utama dalam setiap layanan yang kami berikan.</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:border-emerald-200 transition-all group">
                            <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center mb-4 text-red-600 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>
                            </div>
                            <h4 class="text-xl font-bold text-slate-800 mb-2">Tanpa Riba (Bunga)</h4>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Menghindari penambahan pendapatan yang tidak sah (batil) antara lain dalam transaksi pertukaran barang sejenis.
                            </p>
                        </div>

                        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:border-emerald-200 transition-all group">
                            <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center mb-4 text-amber-600 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h4 class="text-xl font-bold text-slate-800 mb-2">Tanpa Gharar (Ketidakjelasan)</h4>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Menghindari transaksi yang mengandung ketidakjelasan atau penipuan yang dapat merugikan salah satu pihak.
                            </p>
                        </div>

                        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:border-emerald-200 transition-all group">
                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-4 text-purple-600 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path></svg>
                            </div>
                            <h4 class="text-xl font-bold text-slate-800 mb-2">Tanpa Maysir (Perjudian)</h4>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Menghindari transaksi yang bersifat spekulatif atau untung-untungan yang tidak didasari produktivitas nyata.
                            </p>
                        </div>

                        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:border-emerald-200 transition-all group">
                            <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-4 text-emerald-600 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h4 class="text-xl font-bold text-slate-800 mb-2">Halal & Thoyyib</h4>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Hanya menyalurkan pembiayaan pada sektor usaha yang halal dan baik, serta memberikan dampak positif bagi masyarakat.
                            </p>
                        </div>

                    </div>
                    
                    {{-- Call to Action --}}
                    <div class="mt-8 bg-emerald-50 rounded-2xl p-6 border border-emerald-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div>
                            <h5 class="font-bold text-emerald-800">Ingin tahu produk kami?</h5>
                            <p class="text-emerald-600 text-sm">Lihat berbagai produk simpanan dan pembiayaan syariah.</p>
                        </div>
                        <a href="{{ route('produk.index') }}" class="px-6 py-2 bg-emerald-600 text-white rounded-lg font-semibold hover:bg-emerald-700 transition-colors text-sm whitespace-nowrap">
                            Lihat Produk
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

</x-public-layout>