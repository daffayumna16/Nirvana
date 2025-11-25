<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; // <-- Tambahkan ini


class KategoriProduk extends Model
{
    use HasFactory;
    
    // Konfigurasi Model (Mass Assignment)
    protected $fillable = ['nama_kategori', 'gambar', 'deskripsi_singkat'];


    // vvv TAMBAHKAN FUNGSI RELASI INI vvv
    
    /**
     * Mendefinisikan relasi "One-to-Many".
     * Satu KategoriProduk BISA MEMILIKI BANYAK Produk.
     */
    public function produks(): HasMany
    {
        return $this->hasMany(Produk::class, 'kategori_produk_id');
    }
}