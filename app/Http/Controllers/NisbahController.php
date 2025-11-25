<?php

namespace App\Http\Controllers;

use App\Models\Nisbah; // <-- Panggil Model
use Illuminate\Http\Request;

class NisbahController extends Controller
{
    /**
     * Display a listing of the resource.
     * (Menampilkan halaman daftar Nisbah)
     */
    public function index()
    {
        // 1. Ambil semua data nisbah dari database
        $nisbahs = Nisbah::all();

        // 2. Tampilkan view 'nisbah.index' dan kirim datanya
        return view('nisbah.index', ['nisbahs' => $nisbahs]);
    }

    /**
     * Show the form for creating a new resource.
     * (Menampilkan form 'Tambah Data' baru)
     */
public function create()
    {
        // 1. Tampilkan view 'nisbah.create'
        return view('nisbah.create');
    }

    /**
     * Store a newly created resource in storage.
     * (Menyimpan data baru dari form)
     */
    public function store(Request $request)
    {
        // 1. Validasi
        $request->validate([
            'tenor' => 'required|string|max:255',
            'persentase' => 'required|string|max:20', // cth: "25%"
        ]);

        // 2. Buat data baru
        Nisbah::create([
            'tenor' => $request->tenor,
            'persentase' => $request->persentase,
        ]);

        // 3. Redirect kembali ke halaman index admin
        return redirect()->route('admin.nisbah.index')
                         ->with('success', 'Data nisbah baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     * (Tidak kita pakai)
     */
    public function show(Nisbah $nisbah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * (Menampilkan form 'Edit Data')
     */
    public function edit(Nisbah $nisbah)
    {
     return view('nisbah.edit', ['nisbah' => $nisbah]);
    }

    /**
     * Update the specified resource in storage.
     * (Menyimpan perubahan dari form 'Edit')
     */
    public function update(Request $request, Nisbah $nisbah)
    {
     // 1. Validasi
        $request->validate([
            'tenor' => 'required|string|max:255',
            'persentase' => 'required|string|max:20',
        ]);

        // 2. Update data yang ada
        $nisbah->update([
            'tenor' => $request->tenor,
            'persentase' => $request->persentase,
        ]);

        // 3. Redirect kembali ke halaman index
        return redirect()->route('admin.nisbah.index')
                         ->with('success', 'Data nisbah berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     * (Menghapus data)
     */
    public function destroy(Nisbah $nisbah)
    {
     $nisbah->delete();

        // 3. Redirect kembali ke halaman index
        return redirect()->route('admin.nisbah.index')
                         ->with('success', 'Data nisbah berhasil dihapus!');
    }
}