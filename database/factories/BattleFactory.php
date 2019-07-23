<?php

use Faker\Generator as Faker;

$factory->define(App\Battle::class, function (Faker $faker) {
    return [
        'game_id' => $faker->numberBetween($min = 1, $max = 2),
        'wonBy' => 'nog geen winnaar',
        'completed' => $faker->boolean = false,
        //
    ];
});
