<?php

namespace App\Http\Controllers;

use App\Models\Slider; // <-- Panggil Model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // <-- Panggil Storage

class SliderController extends Controller
{
    /**
     * Menampilkan daftar slider.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('sliders.index', ['sliders' => $sliders]);
    }

    /**
     * Menampilkan form tambah slider.
     */
    public function create()
    {
        return view('sliders.create');
    }

    /**
     * Menyimpan slider baru.
     */
    public function store(Request $request)
    {
        // 1. Validasi (gambar wajib)
        $request->validate([
            'judul' => 'required|string|max:255',
            'subjudul' => 'nullable|string|max:255',
            'link_tombol' => 'nullable|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Wajib
        ]);

        // 2. Simpan gambar
        $path = $request->file('gambar')->store('sliders', 'public');
        // Ini akan menyimpan di 'storage/app/public/sliders'

        // 3. Buat data di database
        Slider::create([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
            'link_tombol' => $request->link_tombol,
            'gambar' => $path, // Simpan path gambar
        ]);

        return redirect()->route('admin.sliders.index')
                         ->with('success', 'Slide baru berhasil ditambahkan!');
    }

    /**
     * (Tidak kita pakai)
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Menampilkan form edit slider.
     */
    public function edit(Slider $slider)
    {
        return view('sliders.edit', ['slider' => $slider]);
    }

    /**
     * Menyimpan update slider.
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'subjudul' => 'nullable|string|max:255',
            'link_tombol' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Opsional saat update
        ]);

        $path = $slider->gambar; // Ambil path gambar lama

        // Cek apakah ada gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            Storage::disk('public')->delete($path);
            // Simpan gambar baru
            $path = $request->file('gambar')->store('sliders', 'public');
        }

        // Update database
        $slider->update([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
            'link_tombol' => $request->link_tombol,
            'gambar' => $path, // Simpan path baru (atau lama)
        ]);

        return redirect()->route('admin.sliders.index')
                         ->with('success', 'Slide berhasil diperbarui!');
    }

    /**
     * Menghapus slider.
     */
    public function destroy(Slider $slider)
    {
        // 1. Hapus gambar dari storage
        Storage::disk('public')->delete($slider->gambar);

        // 2. Hapus data dari database
        $slider->delete();

        return redirect()->route('admin.sliders.index')
                         ->with('success', 'Slide berhasil dihapus!');
    }
}