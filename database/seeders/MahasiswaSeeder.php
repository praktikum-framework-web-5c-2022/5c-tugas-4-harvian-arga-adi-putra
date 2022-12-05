<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { {
            $faker = Faker::create('id_ID');
            Mahasiswa::create([
                'npm' => $faker->numerify('20###########'),
                'nama' => $faker->firstname . "" . $faker->lastname,
                'ipk' => $faker->randomFloat(2, 2, 4)
            ]);
        }
    }
}
