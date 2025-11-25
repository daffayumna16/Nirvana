<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
    {
        // KITA AKAN MASUKKAN DATA DI SINI
        Produk::create([
            'nama_produk' => 'Simpanan Wadiah',
            'deskripsi' => 'Titipan murni yang harus dijaga dan dikembalikan kapan saja bila pemilik menghendaki.'
        ]);

        Produk::create([
            'nama_produk' => 'Simpanan Mudharabah',
            'deskripsi' => 'Simpanan dengan akad bagi hasil (nisbah) antara nasabah dan bank.'
        ]);

        Produk::create([
            'nama_produk' => 'Pembiayaan Murabahah',
            'deskripsi' => 'Akad jual beli barang dengan menyatakan harga perolehan dan keuntungan (margin) yang disepakati.'
        ]);
    }
}
