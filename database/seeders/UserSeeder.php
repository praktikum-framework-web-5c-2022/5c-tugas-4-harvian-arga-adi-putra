<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        Mahasiswa::create([
            'name' => $faker->firstName,
            'nama' => $faker->unique()->email,
            'password' => Hash::make('qwerty'),
        ]);
    }
}
