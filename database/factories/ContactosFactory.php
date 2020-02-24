<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contactos;
use Faker\Generator as Faker;

$factory->define(Contactos::class, function (Faker $faker) {

    return [
        'propiedad_id' => $faker->randomDigitNotNull,
        'user_id' => $faker->randomDigitNotNull,
        'nombre' => $faker->word,
        'email' => $faker->word,
        'telefono' => $faker->word,
        'comentario' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
