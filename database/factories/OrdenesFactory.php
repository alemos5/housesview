<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ordenes;
use Faker\Generator as Faker;

$factory->define(Ordenes::class, function (Faker $faker) {

    return [
        'plan_id' => $faker->randomDigitNotNull,
        'plan_valor' => $faker->word,
        'plan_duracion_id' => $faker->randomDigitNotNull,
        'plan_duracion_valor' => $faker->word,
        'orden' => $faker->word,
        'user_id' => $faker->randomDigitNotNull,
        'estatus' => $faker->randomDigitNotNull,
        'valor' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
