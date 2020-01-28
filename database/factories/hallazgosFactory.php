<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\hallazgos;
use Faker\Generator as Faker;

$factory->define(hallazgos::class, function (Faker $faker) {

    return [
        'id' => $faker->randomDigitNotNull,
        'anio' => $faker->randomDigitNotNull,
        'trimestre' => $faker->randomDigitNotNull,
        'region' => $faker->word,
        'direccion' => $faker->word,
        'auditor' => $faker->randomDigitNotNull,
        'auditor2' => $faker->randomDigitNotNull,
        'proceso' => $faker->word,
        'depto' => $faker->word,
        'area' => $faker->word,
        'responsable' => $faker->randomDigitNotNull,
        'calificacion' => $faker->word,
        'hallazgo' => $faker->text,
        'recomendacion' => $faker->text,
        'riesgo' => $faker->text,
        'accion' => $faker->text,
        'fecha_inf' => $faker->word,
        'fecha_com' => $faker->word,
        'estatus' => $faker->word,
        'archivo' => $faker->word,
        'fila' => $faker->randomDigitNotNull,
        'fila_id' => $faker->word,
        'anexo' => $faker->word,
        'comentarios' => $faker->text,
        'accion2' => $faker->text,
        'situacion' => $faker->text,
        'num_apoyo' => $faker->randomDigitNotNull,
        'jefatura' => $faker->randomDigitNotNull,
        'gerencia' => $faker->randomDigitNotNull,
        'fec_usr' => $faker->word,
        'aud_tip_val' => $faker->word,
        'aud_monto' => $faker->word,
        'ano_folio' => $faker->randomDigitNotNull,
        'aud_reincidente' => $faker->word,
        'aud_com_anexo' => $faker->word,
        'aud_fir_val' => $faker->randomDigitNotNull,
        'aud_fec_asignado' => $faker->word,
        'aud_fec_revisado' => $faker->word,
        'aud_fec_final' => $faker->word,
        'user_id' => $faker->word,
        'enviar_mail' => $faker->randomDigitNotNull,
        'user_id_resp' => $faker->word,
        'tipo' => $faker->word
    ];
});
