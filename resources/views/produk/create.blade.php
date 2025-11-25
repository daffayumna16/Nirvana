<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Sub-Produk Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('admin.produk.store') }}">
                        @csrf

                        <div>
                            <label for="kategori_produk_id">Kategori Produk</label>
                            <select id="kategori_produk_id" name="kategori_produk_id"
                                class="block mt-1 w-full rounded-md shadow-sm border-gray-300" required>
                                <option value="">-- Pilih Kategori --</option>

                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="mt-4">
                            <label for="nama_produk">Nama Sub-Produk</label>
                            <input id="nama_produk" class="block mt-1 w-full rounded-md shadow-sm border-gray-300"
                                type="text" name="nama_produk" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="deskripsi">Deskripsi</label>
                            <input id="deskripsi" type="hidden" name="deskripsi">
                            <trix-editor input="deskripsi"
                                class="block mt-1 w-full rounded-md shadow-sm border-gray-300"></trix-editor>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700">
                                Simpan
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
