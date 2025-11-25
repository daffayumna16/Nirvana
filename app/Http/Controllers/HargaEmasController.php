<?php

namespace App\Http\Controllers;

use App\Models\HargaEmas; // <-- Panggil Model
use Illuminate\Http\Request;

class HargaEmasController extends Controller
{
    /**
     * Menampilkan daftar harga emas.
     */
    public function index()
    {
        $hargaEmas = HargaEmas::all();
        return view('harga-emas.index', ['hargaEmas' => $hargaEmas]);
    }

    /**
     * Menampilkan form tambah data.
     */
    public function create()
    {
        return view('harga-emas.create');
    }

    /**
     * Menyimpan data baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gram' => 'required|string|max:255',
            'harga_bar' => 'required|string|max:255',
            'harga_gr' => 'required|string|max:255',
        ]);

        HargaEmas::create($request->all());

        return redirect()->route('admin.harga-emas.index')
                         ->with('success', 'Data harga emas berhasil ditambahkan!');
    }

    /**
     * (Tidak kita pakai)
     */
    public function show(HargaEmas $hargaEma)
    {
        //
    }

    /**
     * Menampilkan form edit.
     */
    public function edit(HargaEmas $hargaEma) // Variabel $hargaEma diambil dari URL
    {
        return view('harga-emas.edit', ['hargaEma' => $hargaEma]);
    }

    /**
     * Menyimpan data yang di-update.
     */
    public function update(Request $request, HargaEmas $hargaEma)
    {
        $request->validate([
            'gram' => 'required|string|max:255',
            'harga_bar' => 'required|string|max:255',
            'harga_gr' => 'required|string|max:255',
        ]);

        $hargaEma->update($request->all());

        return redirect()->route('admin.harga-emas.index')
                         ->with('success', 'Data harga emas berhasil diperbarui!');
    }

    /**
     * Menghapus data.
     */
    public function destroy(HargaEmas $hargaEma)
    {
        $hargaEma->delete();

        return redirect()->route('admin.harga-emas.index')
                         ->with('success', 'Data harga emas berhasil dihapus!');
    }
}