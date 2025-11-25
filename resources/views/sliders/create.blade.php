<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Slide Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if ($errors->any())
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                            role="alert">
                            <strong class="font-bold">Oops! Ada yang salah:</strong>
                            <ul class="mt-3 list-disc list-inside text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{-- PENTING: Tambahkan enctype untuk upload file --}}
                    <form method="POST" action="{{ route('admin.sliders.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <label for="judul">Judul (Teks Besar)</label>
                            <input id="judul" class="block mt-1 w-full rounded-md shadow-sm border-gray-300"
                                type="text" name="judul" placeholder="cth: Selamat Datang" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="subjudul">Subjudul (Teks Kecil)</label>
                            <input id="subjudul" class="block mt-1 w-full rounded-md shadow-sm border-gray-300"
                                type="text" name="subjudul" placeholder="cth: Nikmati layanan terbaik kami" />
                        </div>

                        <div class="mt-4">
                            <label for="link_tombol">Link Tombol (Opsional)</label>
                            <input id="link_tombol" class="block mt-1 w-full rounded-md shadow-sm border-gray-300"
                                type="text" name="link_tombol" placeholder="cth: /produk-dan-jasa" />
                        </div>

                        <div class="mt-4">
                            <label for="gambar">Gambar Background Slide (Wajib)</label>
                            <input id="gambar" class="block mt-1 w-full border border-gray-300 p-2 rounded-md"
                                type="file" name="gambar" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700">
                                Simpan
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
