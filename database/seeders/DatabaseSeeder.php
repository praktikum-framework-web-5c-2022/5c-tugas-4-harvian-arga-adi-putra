<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\MahasiswaSeeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(MahasiswaSeeder::class);
        $this->call(userSeeder::class);
    }
}
