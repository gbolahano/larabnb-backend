<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Review::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 2),
        'listing_id' => rand(1, 10),
        'content' => $faker->paragraph(10, true)
    ];
});
