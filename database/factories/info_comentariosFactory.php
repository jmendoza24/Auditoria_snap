<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\info_comentarios;
use Faker\Generator as Faker;

$factory->define(info_comentarios::class, function (Faker $faker) {

    return [
        'id_usuario' => $faker->randomDigitNotNull,
        'id_hallazgo' => $faker->randomDigitNotNull,
        'comentarios' => $faker->word,
        'archivo' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
