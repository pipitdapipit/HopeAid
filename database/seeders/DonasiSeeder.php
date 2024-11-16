<?php

namespace Database\Seeders;

use App\Models\Donasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Donasi::create([
            'jenis_donasi' => 'Uang'
        ]);
        
        Donasi::create([
            'jenis_donasi' => 'Barang'
        ]);
    }
}
