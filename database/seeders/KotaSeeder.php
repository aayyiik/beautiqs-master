<?php

namespace Database\Seeders;

use App\Models\Kota;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kota::create([
            'nama_kota' => 'Jakarta',
        ]);
        Kota::create([
            'nama_kota' => 'Surabaya',
        ]);
        Kota::create([
            'nama_kota' => 'Semarang',
        ]);
        Kota::create([
            'nama_kota' => 'Papua',
        ]);
        Kota::create([
            'nama_kota' => 'Bali',
        ]);
        Kota::create([
            'nama_kota' => 'Gorontalo',
        ]);
    }
}
