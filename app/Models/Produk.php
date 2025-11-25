<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = ['nama_produk', 'deskripsi', 'kategori_produk_id'];

    public function kategoriProduk(): BelongsTo
    {
        return $this->belongsTo(KategoriProduk::class, 'kategori_produk_id');
    }
}