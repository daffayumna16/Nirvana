<?php

namespace Database\Seeders;

use App\Models\KategoriProduk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class KategoriProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
{
    // vvv TAMBAHKAN INI vvv
    // 1. Non-aktifkan pengecekan foreign key
    Schema::disableForeignKeyConstraints(); 

    // 2. Hapus data lama (sekarang diizinkan)
    KategoriProduk::truncate(); 

    // 3. Aktifkan kembali pengecekan foreign key
    Schema::enableForeignKeyConstraints(); 
    // ^^^ BATAS AKHIR TAMBAHAN ^^^


    // Buat data baru (kode ini sudah ada)
    KategoriProduk::create([
        'nama_kategori' => 'Emas',
        'deskripsi_singkat' => 'Produk simpanan emas.',
        'gambar' => 'placeholder_emas.jpg' // Placeholder
    ]);

    KategoriProduk::create([
        'nama_kategori' => 'Jasa',
        'deskripsi_singkat' => 'Layanan jasa sesuai prinsip syariah.',
        'gambar' => 'placeholder_jasa.jpg' // Placeholder
    ]);

    KategoriProduk::create([
        'nama_kategori' => 'Haji & Umroh',
        'deskripsi_singkat' => 'Layanan pembiayaan haji dan umroh.',
        'gambar' => 'placeholder_haji.jpg' // Placeholder
    ]);
}
}
