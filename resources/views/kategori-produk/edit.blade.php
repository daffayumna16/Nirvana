<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Kategori: ') }} {{ $kategoriProduk->nama_kategori }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form method="POST" action="{{ route('admin.kategori-produk.update', $kategoriProduk->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div>
                            <label for="nama_kategori">Nama Kategori</label>
                            <input id="nama_kategori" class="block mt-1 w-full rounded-md shadow-sm border-gray-300" 
                                   type="text" name="nama_kategori" value="{{ $kategoriProduk->nama_kategori }}" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="deskripsi_singkat">Deskripsi Singkat</label>
                            <textarea id="deskripsi_singkat" name="deskripsi_singkat" rows="3" 
                                      class="block mt-1 w-full rounded-md shadow-sm border-gray-300">{{ $kategoriProduk->deskripsi_singkat }}</textarea>
                        </div>
                        
                        <div class="mt-4">
                            <label for="gambar">Ganti Gambar Kategori (Opsional)</label>
                            
                            <p class="mt-2">Gambar Saat Ini:</p>
                            <img src="{{ Storage::url($kategoriProduk->gambar) }}" alt="{{ $kategoriProduk->nama_kategori }}" class="w-24 h-24 object-cover rounded mb-2">
                            
                            <input id="gambar" class="block mt-1 w-full border border-gray-300 p-2 rounded-md" 
                                   type="file" name="gambar" />
                            <small class="text-gray-500">Kosongkan jika tidak ingin mengganti gambar.</small>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700">
                                Update
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>