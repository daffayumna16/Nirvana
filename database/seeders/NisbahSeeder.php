<?php

namespace Database\Seeders;

use App\Models\Nisbah; // <-- JANGAN LUPA TAMBAHKAN INI
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NisbahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama (jika ada) agar tidak duplikat
        Nisbah::truncate(); 

        // Buat data baru
        Nisbah::create([
            'tenor' => '1 Bulan',
            'persentase' => '22%'
        ]);

        Nisbah::create([
            'tenor' => '3 Bulan',
            'persentase' => '25%'
        ]);

        Nisbah::create([
            'tenor' => '6 Bulan',
            'persentase' => '25%'
        ]);

        Nisbah::create([
            'tenor' => '12 Bulan',
            'persentase' => '23%'
        ]);
    }
}