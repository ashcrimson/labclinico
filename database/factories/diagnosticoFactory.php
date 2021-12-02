<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\diagnostico;
use Faker\Generator as Faker;

$factory->define(diagnostico::class, function (Faker $faker) {

    return [
        'codigo' => $this->faker->word,
        'nombre' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
    ];
});
