<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Listing::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(),
        'user_id' => random_int(1, 2),
        'price' => 400,
        'description' => $faker->paragraph(30, true),
        'photos' => $faker->imageUrl(300, 300),
        'status' => 1
    ];
});
