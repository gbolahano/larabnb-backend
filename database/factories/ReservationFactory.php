<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Reservation::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'listing_id' => random_int(1, 4),
        'date_from' => $faker->date,
        'date_to' => $faker->date,
        'no_of_guests' => 3,
        'price' => 1200,
        'owner_id' => 2
    ];
});
