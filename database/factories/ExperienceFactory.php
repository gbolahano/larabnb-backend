<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Experience::class, function (Faker $faker) {
    return [
        'user_id' => random_int(1, 2),
        'name' => $faker->name,
        'price' => 300,
        'todo' => $faker->sentence(),
        'to_provide' => $faker->sentence(),
        'to_know' => $faker->sentence(),
        'to_bring' => $faker->sentence(),
        'photos' => $faker->imageUrl(300, 300),
        'status' => 1,
        'duration' => $faker->time
    ];
});
