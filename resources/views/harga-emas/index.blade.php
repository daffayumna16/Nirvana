<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Taksiran Harga Emas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="mb-4">
                        <a href="{{ route('admin.harga-emas.create') }}"
                           class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700">
                            + Tambah Data Emas Baru
                        </a>
                    </div>

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Gram</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Harga/Bar</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Harga/Gr</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            
                            @foreach ($hargaEmas as $emas)
                            <tr>
                                <td class="px-6 py-4">{{ $emas->gram }}</td>
                                <td class="px-6 py-4">{{ $emas->harga_bar }}</td>
                                <td class="px-6 py-4">{{ $emas->harga_gr }}</td>
                                <td class="px-6 py-4 text-right text-sm font-medium">
                                    <a href="{{ route('admin.harga-emas.edit', $emas->id) }}"
                                       class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    
                                    <form action="{{ route('admin.harga-emas.destroy', $emas->id) }}"
                                          method="POST" class="inline" onsubmit="return confirm('Yakin hapus?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type"submit" class="text-red-600 hover:text-red-900 ml-4">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>