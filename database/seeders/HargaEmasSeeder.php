<?php

namespace Database\Seeders;

use App\Models\HargaEmas; // <-- JANGAN LUPA TAMBAHKAN INI
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HargaEmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama (jika ada) agar tidak duplikat
        HargaEmas::truncate();

        // Buat data baru
        HargaEmas::create([
            'gram' => '1 gr',
            'harga_bar' => 'Rp 2.260.000',
            'harga_gr' => 'Rp 2.260.000'
        ]);

        HargaEmas::create([
            'gram' => '2 gr',
            'harga_bar' => 'Rp 4.470.000',
            'harga_gr' => 'Rp 2.235.000'
        ]);

        HargaEmas::create([
            'gram' => '3 gr',
            'harga_bar' => 'Rp 6.687.000',
            'harga_gr' => 'Rp 2.229.000'
        ]);

        HargaEmas::create([
            'gram' => '5 gr',
            'harga_bar' => 'Rp 11.115.000',
            'harga_gr' => 'Rp 2.223.000'
        ]);
    }
}