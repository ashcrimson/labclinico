<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\RemaVentilacionMecanica;
use Faker\Generator as Faker;

$factory->define(RemaVentilacionMecanica::class, function (Faker $faker) {

    return [
        'rema_id' => $this->faker->word,
        'hora' => $this->faker->date('Y-m-d H:i:s'),
        'vol' => $this->faker->word,
        'peep' => $this->faker->word,
        'tie' => $this->faker->word,
        'fr' => $this->faker->word,
        'pf' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
    ];
});
