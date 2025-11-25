<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Slider Homepage') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="mb-4">
                        <a href="{{ route('admin.sliders.create') }}"
                           class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700">
                            + Tambah Slide Baru
                        </a>
                    </div>

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Gambar</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Subjudul</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            
                            @forelse ($sliders as $slide)
                            <tr>
                                <td class="px-6 py-4">
                                    <img src="{{ $slide->url }}" alt="{{ $slide->judul }}" class="w-32 h-16 object-cover rounded">
                                </td>
                                <td class="px-6 py-4 font-medium">{{ $slide->judul }}</td>
                                <td class="px-6 py-4 text-sm text-gray-500">{{ $slide->subjudul }}</td>
                                <td class="px-6 py-4 text-right text-sm font-medium">
                                    <a href="{{ route('admin.sliders.edit', $slide->id) }}"
                                       class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    
                                    <form action="{{ route('admin.sliders.destroy', $slide->id) }}"
                                          method="POST" class="inline" onsubmit="return confirm('Yakin hapus slide ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type"submit" class="text-red-600 hover:text-red-900 ml-4">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                                    Belum ada slide.
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