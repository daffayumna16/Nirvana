<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tulis Berita Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('admin.berita.store') }}">
                        @csrf

                        <div>
                            <label for="judul">Judul Berita</label>
                            <input id="judul" class="block mt-1 w-full rounded-md shadow-sm border-gray-300"
                                type="text" name="judul" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="isi">Isi Artikel</label>
                            <input id="isi" type="hidden" name="isi">
                            <trix-editor input="isi"
                                class="block mt-1 w-full rounded-md shadow-sm border-gray-300"></trix-editor>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700">
                                Publikasikan
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
