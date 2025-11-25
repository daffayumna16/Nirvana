<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // <-- Panggil Storage

class TrixUploadController extends Controller
{
    /**
     * Menyimpan file yang di-upload dari Trix Editor.
     */
    public function store(Request $request)
    {
        // 1. Validasi: Pastikan file ada dan merupakan gambar
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // 2. Simpan gambar ke 'storage/app/public/trix-uploads'
        $path = $request->file('file')->store('trix-uploads', 'public');

        // 3. Dapatkan URL publik penuh ke file tersebut
        //    (Contoh: http://localhost:8000/storage/trix-uploads/namafile.jpg)
        $url = Storage::url($path);

        // 4. Kirim balasan JSON
        //    JavaScript Trix "mengharapkan" balasan dalam format ini
        return response()->json([
            'url' => $url
        ]);
    }
}