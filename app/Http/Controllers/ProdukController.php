<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Menampilkan daftar semua produk.
     */
public function index()
{
    // 1. Ambil SEMUA KATEGORI dari database
    $kategoriProduks = KategoriProduk::all(); 

    // 2. Kirim data KATEGORI tersebut ke file 'view'
    return view('produk.index', ['kategoriProduks' => $kategoriProduks]);
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     // 1. Ambil semua kategori untuk ditampilkan di dropdown
    $kategoris = \App\Models\KategoriProduk::all();

    // 2. Kirim data kategori tersebut ke view
    return view('produk.create', ['kategoris' => $kategoris]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
// 1. Validasi (tambahkan 'kategori_produk_id')
    $request->validate([
        'kategori_produk_id' => 'required|exists:kategori_produks,id', // Wajib ada & harus ada di tabel kategori
        'nama_produk' => 'required|string|max:255',
        'deskripsi' => 'nullable|string',
    ]);

    // 2. Buat data baru di database (tambahkan 'kategori_produk_id')
    Produk::create([
        'kategori_produk_id' => $request->kategori_produk_id, // <-- TAMBAHKAN INI
        'nama_produk' => $request->nama_produk,
        'deskripsi' => $request->deskripsi,
    ]);

    // 3. Alihkan kembali ke halaman daftar produk publik
    return redirect()->route('produk.index')
                     ->with('success', 'Sub-produk baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        // (Kita akan isi ini nanti)
    }

    public function showKategori(KategoriProduk $kategoriProduk)
{
    // 1. Laravel sudah otomatis mengambil KategoriProduk berdasarkan ID di URL.

    // 2. Kita ambil semua 'produks' (sub-produk) yang terhubung 
    //    dengan kategori ini menggunakan relasi yang kita buat.
    $produks = $kategoriProduk->produks()->get();

    // 3. Kirim data Kategori dan Sub-Produknya ke view baru
    return view('produk.show-kategori', [
        'kategori' => $kategoriProduk,
        'produks' => $produks,
    ]);
}

public function showProdukDetail(Produk $produk) // Route Model Binding
{
    // 1. Laravel sudah otomatis mengambil data Produk berdasarkan ID di URL.

    // 2. Kirim data produk itu ke view baru
    return view('produk.show-detail', ['produk' => $produk]);
}

//Menampilkan daftar semua sub-produk (UNTUK ADMIN).
public function adminIndex()
{
    // Ambil semua produk dan kategori terkaitnya (untuk efisiensi)
    $produks = Produk::with('kategoriProduk')->latest()->get();

    return view('produk.admin-index', ['produks' => $produks]);
}

    /**
     * Show the form for editing the specified resource.
     */
public function edit(Produk $produk) // <-- Perhatikan $produk
    {
// 1. Ambil SEMUA kategori untuk dropdown
    $kategoris = \App\Models\KategoriProduk::all();

    // 2. Kirim data produk YANG AKAN DIEDIT
    //    DAN data SEMUA KATEGORI ke view
    return view('produk.edit', [
        'produk' => $produk,
        'kategoris' => $kategoris
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, Produk $produk)
{
    // 1. Validasi (tambahkan 'kategori_produk_id')
    $request->validate([
        'kategori_produk_id' => 'required|exists:kategori_produks,id', // Wajib ada
        'nama_produk' => 'required|string|max:255',
        'deskripsi' => 'nullable|string',
    ]);

    // 2. Update data produk yang ada
    $produk->update([
        'kategori_produk_id' => $request->kategori_produk_id, // <-- TAMBAHKAN INI
        'nama_produk' => $request->nama_produk,
        'deskripsi' => $request->deskripsi,
    ]);

    // 3. Alihkan kembali ke halaman daftar sub-produk admin
    return redirect()->route('admin.produk.index')
                     ->with('success', 'Sub-produk berhasil diperbarui!');
}

    /**
     * Remove the specified resource from storage.
     */
public function destroy(Produk $produk)
    {
        // 1. Laravel sudah otomatis mengambil produk berdasarkan ID di URL.
        
        // 2. Hapus produk tersebut dari database.
        $produk->delete();

        // 3. Alihkan kembali ke halaman daftar produk
        return redirect()->route('produk.index')
                         ->with('success', 'Produk berhasil dihapus!');
    }
}