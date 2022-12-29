<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::create([
            'id_kota' => 1,
            'id_role' => 1,
            'nama_user' => 'Ari Chusna',
            'alamat' => 'Jl Simo Surabaya',
            'telp' => '085852803023',
            'email' => 'ari@gmail.com',
            'password'=> bcrypt("secret")

        ]);
        Users::create([
            'id_kota' => 1,
            'id_role' => 2,
            'nama_user' => 'Lathifa Chusna',
            'alamat' => 'Jl Simo Surabaya',
            'telp' => '085852803023',
            'email' => 'lathifa@gmail.com',
            'password'=> bcrypt("secret")

        ]);
    }
}
