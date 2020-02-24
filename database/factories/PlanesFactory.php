<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Planes;
use Faker\Generator as Faker;

$factory->define(Planes::class, function (Faker $faker) {

    return [
        'plan' => $faker->word,
        'recorrido' => $faker->randomDigitNotNull,
        'plazo_d' => $faker->word,
        'visibilidad' => $faker->randomDigitNotNull,
        'p_instalacion' => $faker->word,
        'p_publicacion' => $faker->word,
        'p_m_i' => $faker->word,
        'p_publicacion_dos' => $faker->word,
        'destacado' => $faker->randomDigitNotNull,
        'descuento' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
