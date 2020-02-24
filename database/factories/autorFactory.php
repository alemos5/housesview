<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\autor;
use Faker\Generator as Faker;

$factory->define(autor::class, function (Faker $faker) {

    return [
        'titulo' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
