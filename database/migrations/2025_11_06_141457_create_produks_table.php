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
    Schema::create('produks', function (Blueprint $table) {
        $table->id();

        // TAMBAHKAN DUA BARIS INI
        $table->string('nama_produk');
        $table->text('deskripsi');
        // BATAS AKHIR TAMBAHAN

        $table->timestamps(); // (Ini sudah ada sebelumnya)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
