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
    Schema::create('nisbahs', function (Blueprint $table) {
        $table->id();

        // vvv TAMBAHKAN DUA BARIS INI vvv
        $table->string('tenor');       // cth: "1 Bulan"
        $table->string('persentase');  // cth: "22%"
        // ^^^ BATAS AKHIR TAMBAHAN ^^^

        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nisbahs');
    }
};
