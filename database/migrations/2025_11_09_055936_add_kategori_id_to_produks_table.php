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
    Schema::table('produks', function (Blueprint $table) {
        // vvv TAMBAHKAN INI vvv
        // Buat kolom foreign key yang terhubung ke tabel 'kategori_produks'
        $table->foreignId('kategori_produk_id')
              ->nullable()
              ->constrained('kategori_produks') // Terhubung ke tabel 'kategori_produks'
              ->onDelete('set null'); // Jika kategori dihapus, produknya jadi null
    });
}

public function down(): void
{
    Schema::table('produks', function (Blueprint $table) {
        // vvv TAMBAHKAN INI vvv
        $table->dropForeign(['kategori_produk_id']);
        $table->dropColumn('kategori_produk_id');
    });
}
};
