<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
        Schema::create('kategori_produks', function (Blueprint $table) {
            $table->id();
            
            // vvv TAMBAHKAN INI vvv
            $table->string('nama_kategori');
            $table->string('gambar'); // Kita akan simpan path/nama file gambar
            $table->text('deskripsi_singkat')->nullable(); // Deskripsi di bawah judul
            // ^^^ BATAS TAMBAHAN ^^^

            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_produks');
    }
};
