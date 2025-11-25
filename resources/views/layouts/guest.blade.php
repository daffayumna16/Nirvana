<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- vvv BLOK STYLE KUSTOM vvv --}}
    <style>
        /* 1. Mengatur Input Form */
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            background-color: #ffffff !important; /* Background PUTIH */
            border: 2px solid #1e3a8a !important; /* Border DARK BLUE (Navy) */
            color: #1e3a8a !important;            /* Teks DARK BLUE (agar terbaca) */
            font-weight: 600;
        }

        /* 2. Mengatur Placeholder */
        input::placeholder {
            color: #94a3b8 !important; /* Abu-abu */
        }

        /* 3. Mengatur Label (Nama, Email, Password) */
        label {
            color: #1e3a8a !important; /* Warna Label DARK BLUE */
            font-weight: bold !important;
        }

        /* 4. Efek saat diklik (Focus) */
        input:focus {
            outline: none !important;
            border-color: #2563eb !important; /* Biru lebih terang */
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2) !important;
        }
        
        /* 5. Tombol Register/Login (di dalam kartu) */
        .w-full.sm\:max-w-md button[type="submit"] {
             background-color: #1e3a8a !important; /* Tombol Dark Blue */
             color: white !important;
             font-weight: 600 !important;
        }
        .w-full.sm\:max-w-md button[type="submit"]:hover {
             background-color: #1e40af !important; /* Biru sedikit lebih terang saat hover */
        }

        /* 6. Link "Already registered?" (di dalam kartu) */
        .w-full.sm\:max-w-md a {
            color: #1e3a8a !important; /* Dark Blue */
        }
        .w-full.sm\:max-w-md a:hover {
            color: #1e40af !important; /* Sedikit lebih terang */
        }
    </style>
    {{-- ^^^ AKHIR BLOK STYLE KUSTOM ^^^ --}}

</head>
<body class="font-sans text-gray-900 antialiased">
    
    {{-- CONTAINER UTAMA: Background Image --}}
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-cover bg-center relative"
         style="background-image: url('{{ asset('images/Nirvanaa.png') }}');">
        
        {{-- LAYER OVERLAY: Warna Biru/Hitam Gelap Transparan --}}
        <div class="absolute inset-0 bg-slate-900 opacity-60"></div>

        {{-- KONTEN (Logo & Form) --}}
        <div class="relative z-10 w-full sm:max-w-md flex flex-col items-center">
            
            {{-- Logo Bank (Versi Putih) --}}
            <div class="mb-100">
                <a href="/">
                    <img src="{{ asset('images/TPLOGO.png') }}" alt="Logo Bank Nirvana" class="h-100 w-auto drop-shadow-lg">
                </a>
            </div>

            {{-- Kartu Form --}}
            <div class="w-full px-6 py-8 bg-white shadow-2xl overflow-hidden sm:rounded-xl">
                {{ $slot }}
            </div>
            
            {{-- Copyright Kecil di Bawah --}}
            <div class="mt-8 text-gray-300 text-sm">
                &copy; {{ date('Y') }} PT Bank Nirvana Syariah
            </div>

        </div>
    </div>
</body>


</html>