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
Schema::create('harga_emas', function (Blueprint $table) {
        $table->id();

        // vvv TAMBAHKAN TIGA BARIS INI vvv
        $table->string('gram');       // cth: "1 gr"
        $table->string('harga_bar');  // cth: "Rp 2.260.000"
        $table->string('harga_gr');   // cth: "Rp 2.260.000"
        // ^^^ BATAS AKHIR TAMBAHAN ^^^

        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('harga_emas');
    }
};
