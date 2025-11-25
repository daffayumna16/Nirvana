<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilBagian extends Model
{
    use HasFactory;

    // vvv TAMBAHKAN BARIS INI (sesuai migrasi Anda) vvv
    protected $fillable = ['judul', 'deskripsi_singkat', 'isi_lengkap'];
}