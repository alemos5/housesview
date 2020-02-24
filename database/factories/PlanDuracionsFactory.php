<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PlanDuracions;
use Faker\Generator as Faker;

$factory->define(PlanDuracions::class, function (Faker $faker) {

    return [
        'plan_id' => $faker->randomDigitNotNull,
        'cantidad' => $faker->randomDigitNotNull,
        'valor' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
