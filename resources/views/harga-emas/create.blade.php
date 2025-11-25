<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Harga Emas Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form method="POST" action="{{ route('admin.harga-emas.store') }}">
                        @csrf

                        <div class_mt-4>
                            <label for="gram">Gram</label>
                            <input id="gram" class="block mt-1 w-full rounded-md shadow-sm border-gray-300" 
                                   type="text" name="gram" placeholder="cth: 1 gr" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="harga_bar">Harga/Bar</label>
                            <input id="harga_bar" class="block mt-1 w-full rounded-md shadow-sm border-gray-300"
                                   type="text" name="harga_bar" placeholder="cth: Rp 2.260.000" required />
                        </div>

                        <div class="mt-4">
                            <label for="harga_gr">Harga/Gr</label>
                            <input id="harga_gr" class="block mt-1 w-full rounded-md shadow-sm border-gray-300"
                                   type="text" name="harga_gr" placeholder="cth: Rp 2.260.000" required />
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