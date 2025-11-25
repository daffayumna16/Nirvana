<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk; // <-- Panggil Model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // <-- PENTING: Untuk mengelola file/gambar

class KategoriProdukController extends Controller
{
    /**
     * Menampilkan daftar kategori.
     */
    public function index()
    {
        $kategoriProduks = KategoriProduk::all();
        return view('kategori-produk.index', ['kategoriProduks' => $kategoriProduks]);
    }

    /**
     * Menampilkan form tambah kategori.
     */
    public function create()
    {
        return view('kategori-produk.create');
    }

    /**
     * Menyimpan kategori baru.
     */
    public function store(Request $request)
    {
        // 1. Validasi (tambahkan 'gambar')
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi_singkat' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Wajib, gambar, maks 2MB
        ]);

        // 2. Simpan gambar
        $path = $request->file('gambar')->store('kategori_images', 'public');
        // Ini akan menyimpan gambar di folder 'storage/app/public/kategori_images'

        // 3. Buat data di database
        KategoriProduk::create([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'gambar' => $path, // Simpan path gambar ke database
        ]);

        return redirect()->route('admin.kategori-produk.index')
                         ->with('success', 'Kategori produk baru berhasil ditambahkan!');
    }

    /**
     * (Tidak kita pakai)
     */
    public function show(KategoriProduk $kategoriProduk)
    {
        //
    }

    /**
     * Menampilkan form edit.
     */
    public function edit(KategoriProduk $kategoriProduk) // Laravel otomatis menemukan 'kategoriProduk'
    {
        return view('kategori-produk.edit', ['kategoriProduk' => $kategoriProduk]);
    }

    /**
     * Menyimpan update kategori.
     */
    public function update(Request $request, KategoriProduk $kategoriProduk)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi_singkat' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Gambar opsional saat update
        ]);

        $path = $kategoriProduk->gambar; // Ambil path gambar lama

        // Cek apakah ada gambar baru yang di-upload
        if ($request->hasFile('gambar')) {
            // 1. Hapus gambar lama
            Storage::disk('public')->delete($path);
            
            // 2. Simpan gambar baru
            $path = $request->file('gambar')->store('kategori_images', 'public');
        }

        // Update database
        $kategoriProduk->update([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'gambar' => $path, // Simpan path baru (atau path lama jika tidak ada gambar baru)
        ]);

        return redirect()->route('admin.kategori-produk.index')
                         ->with('success', 'Kategori produk berhasil diperbarui!');
    }

    /**
     * Menghapus kategori.
     */
    public function destroy(KategoriProduk $kategoriProduk)
    {
        // 1. Hapus gambar dari storage
        Storage::disk('public')->delete($kategoriProduk->gambar);

        // 2. Hapus data dari database
        $kategoriProduk->delete();

        return redirect()->route('admin.kategori-produk.index')
                         ->with('success', 'Kategori produk berhasil dihapus!');
    }
}