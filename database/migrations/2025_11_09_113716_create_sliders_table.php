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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');           // Path/nama file gambar background
            $table->string('judul');            // Teks judul (cth: "Selamat Datang")
            $table->string('subjudul')->nullable(); // Teks subjudul (opsional)
            $table->string('link_tombol')->nullable(); // URL jika slide-nya diklik (opsional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
