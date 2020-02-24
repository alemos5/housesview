<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Propiedades;
use Faker\Generator as Faker;

$factory->define(Propiedades::class, function (Faker $faker) {

    return [
        'tipo_operacions_id' => $faker->randomDigitNotNull,
        'tipo_propiedades_id' => $faker->randomDigitNotNull,
        'provincias_id' => $faker->randomDigitNotNull,
        'ciudads_id' => $faker->randomDigitNotNull,
        'localidads_id' => $faker->randomDigitNotNull,
        'direccion' => $faker->text,
        'latitud' => $faker->word,
        'longitud' => $faker->word,
        'titulo' => $faker->word,
        'precio' => $faker->word,
        'moneda' => $faker->randomDigitNotNull,
        'expensas' => $faker->word,
        'cant_ambiente' => $faker->randomDigitNotNull,
        'cant_dormitorio' => $faker->randomDigitNotNull,
        'cant_banio' => $faker->randomDigitNotNull,
        'cant_cochera' => $faker->randomDigitNotNull,
        'cant_toilettes' => $faker->randomDigitNotNull,
        'tipo_antiguedas_id' => $faker->randomDigitNotNull,
        'anios' => $faker->randomDigitNotNull,
        'metros' => $faker->word,
        'metros_totales' => $faker->word,
        'user_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
