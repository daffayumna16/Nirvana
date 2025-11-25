<?php

namespace App\Http\Controllers;

use App\Models\Berita; // <-- Panggil Model
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Menampilkan daftar berita.
     */
    public function index()
    {
        // Ambil semua berita, urutkan dari yang terbaru
        $beritas = Berita::latest()->get(); 
        return view('berita.index', ['beritas' => $beritas]);
    }

    /**
     * Menampilkan form tambah berita.
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Menyimpan berita baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string', // 'isi' wajib diisi
        ]);

        Berita::create($request->all());

        return redirect()->route('admin.berita.index')
                         ->with('success', 'Berita baru berhasil dipublikasikan!');
    }

    /**
     * (Tidak kita pakai)
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Menampilkan form edit berita.
     */
public function edit(Berita $beritum)
{
    return view('berita.edit', ['berita' => $beritum]);
}

    /**
     * Menyimpan update berita.
     */
    public function update(Request $request, Berita $beritum)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        $beritum->update($request->all());

        return redirect()->route('admin.berita.index')
                         ->with('success', 'Berita berhasil diperbarui!');
    }

    /**
     * Menghapus berita.
     */
    public function destroy(Berita $beritum)
    {
        $beritum->delete();

        return redirect()->route('admin.berita.index')
                         ->with('success', 'Berita berhasil dihapus!');
    }
}