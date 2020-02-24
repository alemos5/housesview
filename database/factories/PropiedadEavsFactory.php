<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PropiedadEavs;
use Faker\Generator as Faker;

$factory->define(PropiedadEavs::class, function (Faker $faker) {

    return [
        'attribute' => $faker->word,
        'icon' => $faker->word,
        'grupo_id' => $faker->randomDigitNotNull,
        'user_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
