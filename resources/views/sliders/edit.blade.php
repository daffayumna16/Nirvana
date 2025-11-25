<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Slide: ') }} {{ $slider->judul }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form method="POST" action="{{ route('admin.sliders.update', $slider->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div>
                            <label for="judul">Judul (Teks Besar)</label>
                            <input id="judul" class="block mt-1 w-full rounded-md shadow-sm border-gray-300" 
                                   type="text" name="judul" value="{{ $slider->judul }}" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="subjudul">Subjudul (Teks Kecil)</label>
                            <input id="subjudul" class="block mt-1 w-full rounded-md shadow-sm border-gray-300" 
                                   type="text" name="subjudul" value="{{ $slider->subjudul }}" />
                        </div>
                        
                        <div class="mt-4">
                            <label for="link_tombol">Link Tombol (Opsional)</label>
                            <input id="link_tombol" class="block mt-1 w-full rounded-md shadow-sm border-gray-300" 
                                   type="text" name="link_tombol" value="{{ $slider->link_tombol }}" />
                        </div>
                        
                        <div class="mt-4">
                            <label for="gambar">Ganti Gambar Slide (Opsional)</label>
                            
                            <p class="mt-2">Gambar Saat Ini:</p>
                            <img src="{{ $slider->url }}" alt="{{ $slider->judul }}" class="w-32 h-16 object-cover rounded mb-2">
                            
                            <input id="gambar" class="block mt-1 w-full border border-gray-300 p-2 rounded-md" 
                                   type="file" name="gambar" />
                            <small class="text-gray-500">Kosongkan jika tidak ingin mengganti gambar.</small>
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