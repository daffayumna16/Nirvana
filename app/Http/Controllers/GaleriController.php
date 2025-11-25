<?php

namespace App\Http\Controllers;

use App\Models\Galeri; // <-- Panggil Model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // <-- Panggil Storage

class GaleriController extends Controller
{
    /**
     * Menampilkan daftar gambar galeri.
     */
    public function index()
    {
        $galeris = Galeri::latest()->get(); // Ambil dari yang terbaru
        return view('galeri.index', ['galeris' => $galeris]);
    }

    /**
     * Menampilkan form tambah gambar.
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Menyimpan gambar baru.
     */
    public function store(Request $request)
    {
        // 1. Validasi
        $request->validate([
            'judul' => 'nullable|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Wajib
        ]);

        // 2. Simpan gambar
        $path = $request->file('gambar')->store('galeri', 'public');
        // Ini akan menyimpan di 'storage/app/public/galeri'

        // 3. Buat data di database
        Galeri::create([
            'judul' => $request->judul,
            'gambar' => $path, // Simpan path gambar
        ]);

        return redirect()->route('admin.galeri.index')
                         ->with('success', 'Gambar baru berhasil ditambahkan ke galeri!');
    }

    /**
     * (Tidak kita pakai)
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Menampilkan form edit gambar.
     */
    public function edit(Galeri $galeri)
    {
        return view('galeri.edit', ['galeri' => $galeri]);
    }

    /**
     * Menyimpan update gambar.
     */
    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'judul' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Opsional saat update
        ]);

        $path = $galeri->gambar; // Ambil path gambar lama

        // Cek apakah ada gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            Storage::disk('public')->delete($path);
            // Simpan gambar baru
            $path = $request->file('gambar')->store('galeri', 'public');
        }

        // Update database
        $galeri->update([
            'judul' => $request->judul,
            'gambar' => $path, // Simpan path baru (atau lama)
        ]);

        return redirect()->route('admin.galeri.index')
                         ->with('success', 'Data gambar berhasil diperbarui!');
    }

    /**
     * Menghapus gambar.
     */
    public function destroy(Galeri $galeri)
    {
        // 1. Hapus gambar dari storage
        Storage::disk('public')->delete($galeri->gambar);

        // 2. Hapus data dari database
        $galeri->delete();

        return redirect()->route('admin.galeri.index')
                         ->with('success', 'Gambar berhasil dihapus dari galeri!');
    }
}