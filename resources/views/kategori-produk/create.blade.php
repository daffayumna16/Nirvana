<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Kategori Produk Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    {{-- PENTING: Tambahkan enctype untuk upload file --}}
                    <form method="POST" action="{{ route('admin.kategori-produk.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <label for="nama_kategori">Nama Kategori</label>
                            <input id="nama_kategori" class="block mt-1 w-full rounded-md shadow-sm border-gray-300" 
                                   type="text" name="nama_kategori" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="deskripsi_singkat">Deskripsi Singkat</label>
                            <textarea id="deskripsi_singkat" name="deskripsi_singkat" rows="3" 
                                      class="block mt-1 w-full rounded-md shadow-sm border-gray-300"></textarea>
                        </div>
                        
                        <div class="mt-4">
                            <label for="gambar">Gambar Kategori</label>
                            <input id="gambar" class="block mt-1 w-full border border-gray-300 p-2 rounded-md" 
                                   type="file" name="gambar" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700">
                                Simpan
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>