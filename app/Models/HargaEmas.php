<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HargaEmas extends Model
{
    use HasFactory;

    // vvv TAMBAHKAN BARIS INI vvv
    protected $fillable = ['gram', 'harga_bar', 'harga_gr'];
}