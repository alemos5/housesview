<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Clientes;
use Faker\Generator as Faker;

$factory->define(Clientes::class, function (Faker $faker) {

    return [
        'direccion_2' => $faker->text,
        'direccion_3' => $faker->text,
        'id_pais' => $faker->word,
        'code_cliente' => $faker->word,
        'nombre' => $faker->word,
        'compania' => $faker->word,
        'direccion' => $faker->text,
        'pais' => $faker->word,
        'ciudad' => $faker->word,
        'estado' => $faker->word,
        'telefono' => $faker->word,
        'fax' => $faker->word,
        'password' => $faker->word,
        'email' => $faker->word,
        'ci' => $faker->word,
        'suscripcion' => $faker->randomDigitNotNull,
        'servicio' => $faker->word,
        'promocion' => $faker->word,
        'publi' => $faker->word,
        'catologo' => $faker->word,
        'otro_catalogo' => $faker->word,
        'correo' => $faker->randomDigitNotNull,
        'pass_conf' => $faker->word,
        'fecha' => $faker->date('Y-m-d H:i:s'),
        'estatus' => $faker->word,
        'tarifa' => $faker->randomDigitNotNull,
        'seguro' => $faker->randomDigitNotNull,
        'bodega' => $faker->randomDigitNotNull,
        'costo_consolidacion' => $faker->randomDigitNotNull,
        'impuestos' => $faker->randomDigitNotNull,
        'otros' => $faker->randomDigitNotNull,
        'referido' => $faker->text,
        'id_cliente_padre' => $faker->randomDigitNotNull,
        'codigo_cliente_hijo' => $faker->word,
        'observacion' => $faker->text,
        'tarifa_orden' => $faker->randomDigitNotNull,
        'id_agencia' => $faker->randomDigitNotNull,
        'maximo' => $faker->word,
        'rol' => $faker->word,
        'customer_stripe' => $faker->word,
        'remember_token' => $faker->word,
        'request' => $faker->text,
        'response' => $faker->text,
        'cliente_envio' => $faker->randomDigitNotNull,
        'img' => $faker->word,
        'apellido' => $faker->word,
        'horario_atencion' => $faker->word,
        'whatsapp' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
