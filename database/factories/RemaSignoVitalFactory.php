<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\RemaSignoVital;
use Faker\Generator as Faker;

$factory->define(RemaSignoVital::class, function (Faker $faker) {

    return [
        'rema_id' => $this->faker->word,
        'hora' => $this->faker->date('Y-m-d H:i:s'),
        'pulso' => $this->faker->randomDigitNotNull,
        'presion_arterial_ps' => $this->faker->randomDigitNotNull,
        'presion_arterial_pd' => $this->faker->randomDigitNotNull,
        'frecuencia_cardiaca' => $this->faker->word,
        'frecuencia_respiratoria' => $this->faker->word,
        'temperatura_axilar' => $this->faker->word,
        'temperatura_rectal' => $this->faker->word,
        'saturacion_oxigeno' => $this->faker->word,
        'hgt' => $this->faker->word,
        'eva' => $this->faker->word,
        'gsc' => $this->faker->word,
        'ekg' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
    ];
});
