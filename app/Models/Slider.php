<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage; // <-- Tambahkan ini

class Slider extends Model
{
    use HasFactory;

    // vvv TAMBAHKAN BARIS INI vvv
    protected $fillable = ['gambar', 'judul', 'subjudul', 'link_tombol'];

    // vvv TAMBAHKAN HELPER METHOD INI vvv
    /**
     * Helper untuk mendapatkan URL publik dari gambar.
     */
    public function getUrlAttribute(): string
    {
        return Storage::url($this->gambar);
    }
}