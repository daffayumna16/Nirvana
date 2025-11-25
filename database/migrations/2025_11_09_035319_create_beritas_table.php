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
        Schema::create('beritas', function (Blueprint $table) {
        $table->id();

        // vvv TAMBAHKAN DUA BARIS INI vvv
        $table->string('judul');       // Judul artikel
        $table->text('isi');         // Konten/isi artikel (bisa panjang)
        // ^^^ BATAS AKHIR TAMBAHAN ^^^

        $table->timestamps(); // (Kapan artikel dibuat)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
