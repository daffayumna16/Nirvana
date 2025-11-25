<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Bagian Profil: ') }} {{ $profilBagian->judul }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form method="POST" action="{{ route('admin.profil-bagian.update', $profilBagian->id) }}">
                        @csrf
                        @method('PATCH')

                        <div>
                            <label for="judul">Judul (Cth: Visi & Misi)</label>
                            <input id="judul" class="block mt-1 w-full rounded-md shadow-sm border-gray-300" 
                                   type="text" name="judul" value="{{ $profilBagian->judul }}" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="deskripsi_singkat">Deskripsi Singkat (Tampil di kartu)</label>
                            <textarea id="deskripsi_singkat" name="deskripsi_singkat" rows="3" 
                                      class="block mt-1 w-full rounded-md shadow-sm border-gray-300">{{ $profilBagian->deskripsi_singkat }}</textarea>
                        </div>
                        
                        <div class="mt-4">
                            <label for="isi_lengkap">Isi Lengkap Halaman (Tampil di halaman detail)</label>
                            
                            {{-- 1. Input tersembunyi --}}
                            <input id="isi_lengkap" type="hidden" name="isi_lengkap" value="{{ $profilBagian->isi_lengkap }}">
                            
                            {{-- 2. Editor Trix (terhubung ke input) --}}
                            <trix-editor input="isi_lengkap" class="block mt-1 w-full rounded-md shadow-sm border-gray-300"></trix-editor>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700">
                                Update
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>