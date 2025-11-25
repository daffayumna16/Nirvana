<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Foto Baru ke Galeri') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form method="POST" action="{{ route('admin.galeri.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mt-4">
                            <label for="gambar">File Gambar (Wajib)</label>
                            <input id="gambar" class="block mt-1 w-full border border-gray-300 p-2 rounded-md" 
                                   type="file" name="gambar" required />
                        </div>

                        <div class="mt-4">
                            <label for="judul">Judul (Opsional)</label>
                            <input id="judul" class="block mt-1 w-full rounded-md shadow-sm border-gray-300" 
                                   type="text" name="judul" placeholder="cth: Acara Pembukaan Kantor Baru" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700">
                                Simpan ke Galeri
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>