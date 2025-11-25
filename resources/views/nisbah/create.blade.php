<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Nisbah Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Form mengarah ke 'store' --}}
                    <form method="POST" action="{{ route('admin.nisbah.store') }}">
                        @csrf

                        <div>
                            <label for="tenor">Tenor (Jangka Waktu)</label>
                            <input id="tenor" class="block mt-1 w-full rounded-md shadow-sm border-gray-300" 
                                   type="text" name="tenor" placeholder="cth: 1 Bulan" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="persentase">Persentase</label>
                            <input id="persentase" class="block mt-1 w-full rounded-md shadow-sm border-gray-300"
                                   type="text" name="persentase" placeholder="cth: 22%" required />
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