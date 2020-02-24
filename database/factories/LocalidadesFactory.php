<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Localidades;
use Faker\Generator as Faker;

$factory->define(Localidades::class, function (Faker $faker) {

    return [
        'id_privincia' => $faker->randomDigitNotNull,
        'localidad' => $faker->word
    ];
});
