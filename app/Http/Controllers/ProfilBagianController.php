<?php

namespace App\Http\Controllers;

use App\Models\ProfilBagian; // <-- Panggil Model
use Illuminate\Http\Request;

class ProfilBagianController extends Controller
{
    /**
     * Menampilkan daftar "Profil Bagian"
     */
    public function index()
    {
        $profilBagians = ProfilBagian::all();
        return view('profil-bagian.index', ['profilBagians' => $profilBagians]);
    }

    /**
     * Menampilkan form tambah data
     */
    public function create()
    {
        return view('profil-bagian.create');
    }

    /**
     * Menyimpan data baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi_singkat' => 'required|string',
            'isi_lengkap' => 'required|string', // Ini akan berisi HTML
        ]);

        ProfilBagian::create($request->all());

        return redirect()->route('admin.profil-bagian.index')
                         ->with('success', 'Bagian profil baru berhasil ditambahkan!');
    }

    /**
     * (Tidak kita pakai)
     */
    public function show(ProfilBagian $profilBagian)
    {
        //
    }

    /**
     * Menampilkan form edit data
     */
    public function edit(ProfilBagian $profilBagian)
    {
        return view('profil-bagian.edit', ['profilBagian' => $profilBagian]);
    }

    /**
     * Menyimpan update data
     */
    public function update(Request $request, ProfilBagian $profilBagian)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi_singkat' => 'required|string',
            'isi_lengkap' => 'required|string',
        ]);

        $profilBagian->update($request->all());

        return redirect()->route('admin.profil-bagian.index')
                         ->with('success', 'Bagian profil berhasil diperbarui!');
    }

    /**
     * Menghapus data
     */
    public function destroy(ProfilBagian $profilBagian)
    {
        $profilBagian->delete();

        return redirect()->route('admin.profil-bagian.index')
                         ->with('success', 'Bagian profil berhasil dihapus!');
    }
}