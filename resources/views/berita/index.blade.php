<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Berita & Artikel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="mb-4">
                        <a href="{{ route('admin.berita.create') }}"
                           class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700">
                            + Tulis Berita Baru
                        </a>
                    </div>

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal Publikasi</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            
                            @forelse ($beritas as $item)
                            <tr>
                                <td class="px-6 py-4 font-medium">{{ $item->judul }}</td>
                                <td class="px-6 py-4 text-sm text-gray-500">{{ $item->created_at->format('j F Y') }}</td>
                                <td class="px-6 py-4 text-right text-sm font-medium">
                                    <a href="{{ route('admin.berita.edit', $item->id) }}"
                                       class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    
                                    <form action="{{ route('admin.berita.destroy', $item->id) }}"
                                          method="POST" class="inline" onsubmit="return confirm('Yakin hapus berita ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type"submit" class="text-red-600 hover:text-red-900 ml-4">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="px-6 py-4 text-center text-gray-500">
                                    Belum ada berita.
                                </td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>