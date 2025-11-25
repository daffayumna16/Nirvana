<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Tabel Nisbah (Bagi Hasil)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Tombol Tambah Data --}}
<div class="mb-4">
    <a href="{{ route('admin.nisbah.create') }}" {{-- <-- UBAH INI --}}
       class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700">
        + Tambah Data Nisbah Baru
    </a>
</div>

                    {{-- Tabel Data --}}
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tenor</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Persentase</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                            @foreach ($nisbahs as $nisbah)
                            <tr>
                                <td class="px-6 py-4">{{ $nisbah->tenor }}</td>
                                <td class="px-6 py-4">{{ $nisbah->persentase }}</td>
                                <td class="px-6 py-4 text-right text-sm font-medium">
<a href="{{ route('admin.nisbah.edit', $nisbah->id) }}"
       class="text-indigo-600 hover:text-indigo-900">Edit</a>

<form action="{{ route('admin.nisbah.destroy', $nisbah->id) }}"
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