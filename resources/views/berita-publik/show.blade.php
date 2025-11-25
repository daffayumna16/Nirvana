<x-public-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Judul Artikel --}}
                    <h1 class="text-4xl font-bold text-gray-800">{{ $berita->judul }}</h1>

                    {{-- Tanggal Publikasi --}}
                    <p class="text-sm text-gray-500 mt-2">
                        Dipublikasikan pada: {{ $berita->created_at->format('j F Y') }}
                    </p>

                    {{-- Garis Pemisah --}}
                    <hr class="my-6">

                    {{-- Isi Artikel --}}
                    <div class="prose max-w-none">
                        {{-- nl2br() adalah fungsi PHP untuk mengubah 'baris baru' (Enter) menjadi tag <br> HTML --}}
                        {!! $berita->isi !!}
                    </div>

                    {{-- Tombol Kembali --}}
                    <div class="mt-8">
                        <a href="{{ route('berita.public.index') }}" class="text-blue-600 hover:underline">
                            &larr; Kembali ke Daftar Berita
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-public-layout>