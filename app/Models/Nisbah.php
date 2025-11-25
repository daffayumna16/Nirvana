<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nisbah extends Model
{
    use HasFactory;

    // vvv TAMBAHKAN BARIS INI vvv
    protected $fillable = ['tenor', 'persentase'];
}