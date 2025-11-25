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
        Schema::create('profil_bagians', function (Blueprint $table) {
            $table->id();
            $table->string('judul');                // Cth: "Visi & Misi"
            $table->text('deskripsi_singkat');      // Teks di kartu
            $table->text('isi_lengkap');            // Isi lengkap halaman detail
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_bagians');
    }
};
