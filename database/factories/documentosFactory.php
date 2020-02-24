<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\documentos;
use Faker\Generator as Faker;

$factory->define(documentos::class, function (Faker $faker) {

    return [
        'nombre_documento' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
