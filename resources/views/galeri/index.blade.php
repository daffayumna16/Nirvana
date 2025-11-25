<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Galeri Foto (Publik)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="mb-4">
                        <a href="{{ route('admin.galeri.create') }}"
                           class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700">
                            + Tambah Foto Baru
                        </a>
                    </div>

                    {{-- Grid untuk menampilkan gambar galeri --}}
                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
                        @forelse ($galeris as $item)
                            <div class="border rounded-lg shadow">
                                <img src="{{ $item->url }}" alt="{{ $item->judul }}" class="w-full h-32 object-cover rounded-t-lg">
                                <div class="p-2">
                                    <p class="text-sm truncate" title="{{ $item->judul }}">{{ $item->judul ?? 'Tanpa Judul' }}</p>
                                    <div class="mt-2 flex space-x-2">
                                        <a href="{{ route('admin.galeri.edit', $item->id) }}"
                                           class="text-xs text-indigo-600 hover:text-indigo-900">Edit</a>
                                        
                                        <form action="{{ route('admin.galeri.destroy', $item->id) }}"
                                              method="POST" class="inline" onsubmit="return confirm('Yakin hapus gambar ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type"submit" class="text-xs text-red-600 hover:text-red-900">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="col-span-full text-gray-500">Belum ada foto di galeri.</p>
                        @endforelse
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>