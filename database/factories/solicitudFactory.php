<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\solicitud;
use Faker\Generator as Faker;

$factory->define(solicitud::class, function (Faker $faker) {

    return [
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
    ];
});
