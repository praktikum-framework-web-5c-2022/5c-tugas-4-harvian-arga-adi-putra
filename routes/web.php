<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Faker\Factory as Faker;

Route::get('/base', function () {
    $faker = Faker::create('id_ID');
    echo $faker->nama;
    echo $faker->alamat;
    echo $faker->email;
    echo $faker->perusahaan;
    echo $faker->tanggal;
    echo $faker->userName;
    echo $faker->password;
    echo $faker->url;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
