<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- ======================= --}}
            {{-- TAMPILAN ADMIN --}}
            {{-- ======================= --}}
            @if (Auth::user()->role == 'admin')
                
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-slate-800">Selamat Datang, Administrator!</h3>
                    <p class="text-slate-500">Kelola seluruh konten website Nirvana Bank dari panel ini.</p>
                </div>

                {{-- Grid Menu Admin --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    {{-- Card 1: Tabel Nisbah --}}
                    <a href="{{ route('admin.nisbah.index') }}" class="group bg-white p-6 rounded-xl shadow-sm border border-slate-200 hover:shadow-md hover:border-emerald-500 transition-all duration-200 flex items-start">
                        <div class="p-3 bg-emerald-100 rounded-lg text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-slate-800 group-hover:text-emerald-600">Tabel Nisbah</h4>
                            <p class="text-sm text-slate-500 mt-1">Update persentase bagi hasil deposito.</p>
                        </div>
                    </a>

                    {{-- Card 2: Harga Emas --}}
                    <a href="{{ route('admin.harga-emas.index') }}" class="group bg-white p-6 rounded-xl shadow-sm border border-slate-200 hover:shadow-md hover:border-yellow-500 transition-all duration-200 flex items-start">
                        <div class="p-3 bg-yellow-100 rounded-lg text-yellow-600 group-hover:bg-yellow-500 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-slate-800 group-hover:text-yellow-600">Harga Emas</h4>
                            <p class="text-sm text-slate-500 mt-1">Update harga beli/jual emas harian.</p>
                        </div>
                    </a>

                    {{-- Card 3: Berita --}}
                    <a href="{{ route('admin.berita.index') }}" class="group bg-white p-6 rounded-xl shadow-sm border border-slate-200 hover:shadow-md hover:border-blue-500 transition-all duration-200 flex items-start">
                        <div class="p-3 bg-blue-100 rounded-lg text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-slate-800 group-hover:text-blue-600">Berita & Artikel</h4>
                            <p class="text-sm text-slate-500 mt-1">Tulis dan publikasikan berita terbaru.</p>
                        </div>
                    </a>

                    {{-- Card 4: Kategori Produk --}}
                    <a href="{{ route('admin.kategori-produk.index') }}" class="group bg-white p-6 rounded-xl shadow-sm border border-slate-200 hover:shadow-md hover:border-purple-500 transition-all duration-200 flex items-start">
                        <div class="p-3 bg-purple-100 rounded-lg text-purple-600 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-slate-800 group-hover:text-purple-600">Kategori Produk</h4>
                            <p class="text-sm text-slate-500 mt-1">Atur kategori utama layanan bank.</p>
                        </div>
                    </a>

                    {{-- Card 5: Sub Produk --}}
                    <a href="{{ route('admin.produk.index') }}" class="group bg-white p-6 rounded-xl shadow-sm border border-slate-200 hover:shadow-md hover:border-purple-500 transition-all duration-200 flex items-start">
                        <div class="p-3 bg-purple-100 rounded-lg text-purple-600 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-slate-800 group-hover:text-purple-600">List Sub-Produk</h4>
                            <p class="text-sm text-slate-500 mt-1">Kelola detail produk simpanan/jasa.</p>
                        </div>
                    </a>

                    {{-- Card 6: Halaman Tentang Kami --}}
                    <a href="{{ route('admin.profil-bagian.index') }}" class="group bg-white p-6 rounded-xl shadow-sm border border-slate-200 hover:shadow-md hover:border-indigo-500 transition-all duration-200 flex items-start">
                        <div class="p-3 bg-indigo-100 rounded-lg text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-slate-800 group-hover:text-indigo-600">Profil Perusahaan</h4>
                            <p class="text-sm text-slate-500 mt-1">Edit Visi Misi, Sejarah, dll.</p>
                        </div>
                    </a>

                    {{-- Card 7: Galeri --}}
                    <a href="{{ route('admin.galeri.index') }}" class="group bg-white p-6 rounded-xl shadow-sm border border-slate-200 hover:shadow-md hover:border-pink-500 transition-all duration-200 flex items-start">
                        <div class="p-3 bg-pink-100 rounded-lg text-pink-600 group-hover:bg-pink-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-slate-800 group-hover:text-pink-600">Galeri Foto</h4>
                            <p class="text-sm text-slate-500 mt-1">Upload dokumentasi kegiatan.</p>
                        </div>
                    </a>
                    
                    {{-- Card 8: Slider --}}
                    <a href="{{ route('admin.sliders.index') }}" class="group bg-white p-6 rounded-xl shadow-sm border border-slate-200 hover:shadow-md hover:border-teal-500 transition-all duration-200 flex items-start">
                        <div class="p-3 bg-teal-100 rounded-lg text-teal-600 group-hover:bg-teal-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-slate-800 group-hover:text-teal-600">Slider Banner</h4>
                            <p class="text-sm text-slate-500 mt-1">Kelola banner promosi di homepage.</p>
                        </div>
                    </a>

                </div>

            {{-- ======================= --}}
            {{-- TAMPILAN NASABAH --}}
            {{-- ======================= --}}
            @else
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    
                    {{-- KOLOM KIRI: Info Saldo (2/3) --}}
                    <div class="lg:col-span-2 space-y-6">
                        
                        {{-- Kartu Debit Virtual --}}
                        <div class="bg-gradient-to-br from-slate-800 to-slate-900 rounded-2xl p-8 text-white shadow-xl relative overflow-hidden h-64 flex flex-col justify-between">
                             <div class="absolute top-0 right-0 -mt-10 -mr-10 w-48 h-48 bg-white/5 rounded-full blur-3xl"></div>
                             <div class="absolute bottom-0 left-0 -mb-10 -ml-10 w-48 h-48 bg-emerald-500/20 rounded-full blur-3xl"></div>

                             <div class="relative z-10 flex justify-between items-start">
                                 <div>
                                     <p class="text-slate-400 text-sm uppercase tracking-widest mb-1">Tabungan Wadiah</p>
                                     <h3 class="text-2xl font-bold">Nirvana Platinum</h3>
                                 </div>
                                 <div class="italic font-bold text-emerald-400 text-xl">VISA</div>
                             </div>

                             <div class="relative z-10">
                                <p class="text-slate-400 text-xs mb-1">Nomor Rekening</p>
                                <p class="font-mono text-xl tracking-widest text-slate-200">**** **** **** 8829</p>
                             </div>

                             <div class="relative z-10 flex justify-between items-end">
                                 <div>
                                     <p class="text-slate-400 text-xs mb-1">Saldo Tersedia</p>
                                     <h2 class="text-3xl font-bold text-white">Rp 12.500.000</h2>
                                 </div>
                                 <div class="text-right">
                                     <p class="text-xs text-slate-400 uppercase">Pemilik</p>
                                     <p class="font-medium">{{ Auth::user()->name }}</p>
                                 </div>
                             </div>
                        </div>

                        {{-- Riwayat Transaksi Terakhir --}}
                        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6">
                            <h3 class="text-lg font-bold text-slate-800 mb-4">Transaksi Terakhir</h3>
                            <div class="space-y-4">
                                {{-- Item Transaksi Dummy 1 --}}
                                <div class="flex items-center justify-between pb-4 border-b border-slate-50">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 mr-4">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-800">Transfer Masuk</p>
                                            <p class="text-xs text-slate-500">20 Nov 2025 - Dari Bpk. Budi</p>
                                        </div>
                                    </div>
                                    <span class="font-bold text-emerald-600">+ Rp 2.500.000</span>
                                </div>

                                {{-- Item Transaksi Dummy 2 --}}
                                <div class="flex items-center justify-between pb-4 border-b border-slate-50">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center text-red-600 mr-4">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-800">Pembayaran Listrik</p>
                                            <p class="text-xs text-slate-500">18 Nov 2025 - PLN Pascabayar</p>
                                        </div>
                                    </div>
                                    <span class="font-bold text-red-600">- Rp 350.000</span>
                                </div>

                                {{-- Item Transaksi Dummy 3 --}}
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center text-slate-600 mr-4">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-800">Belanja via QRIS</p>
                                            <p class="text-xs text-slate-500">15 Nov 2025 - Supermarket</p>
                                        </div>
                                    </div>
                                    <span class="font-bold text-slate-800">- Rp 125.000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- KOLOM KANAN: Menu Cepat (1/3) --}}
                    <div class="space-y-6">
                         {{-- Profil Singkat --}}
                         <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 text-center">
                            <div class="w-20 h-20 bg-emerald-100 rounded-full mx-auto flex items-center justify-center text-emerald-600 font-bold text-2xl mb-4">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>
                            <h3 class="font-bold text-slate-800 text-lg">{{ Auth::user()->name }}</h3>
                            <p class="text-slate-500 text-sm">{{ Auth::user()->email }}</p>
                            
                            <div class="mt-6 grid grid-cols-2 gap-4">
                                <button class="flex flex-col items-center justify-center p-3 rounded-lg hover:bg-slate-50 transition-colors border border-slate-100">
                                    <div class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 mb-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                                    </div>
                                    <span class="text-xs font-bold text-slate-600">Transfer</span>
                                </button>
                                <button class="flex flex-col items-center justify-center p-3 rounded-lg hover:bg-slate-50 transition-colors border border-slate-100">
                                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 mb-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </div>
                                    <span class="text-xs font-bold text-slate-600">Top Up</span>
                                </button>
                            </div>
                         </div>

                         {{-- Promo Banner Kecil --}}
                         <div class="bg-emerald-600 rounded-2xl p-6 text-white relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mt-10 -mr-10"></div>
                            <h4 class="font-bold text-lg mb-2 relative z-10">Promo Haji 2025</h4>
                            <p class="text-emerald-100 text-sm mb-4 relative z-10">Buka tabungan haji sekarang dan dapatkan porsi lebih awal.</p>
                            <button class="px-4 py-2 bg-white text-emerald-700 text-xs font-bold rounded-lg shadow-sm hover:bg-emerald-50 transition-colors relative z-10">
                                Lihat Detail
                            </button>
                         </div>
                    </div>
                    
                </div>
            @endif

        </div>
    </div>
</x-app-layout>