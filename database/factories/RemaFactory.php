<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Rema;
use Faker\Generator as Faker;

$factory->define(Rema::class, function (Faker $faker) {

    return [
        'paciente_id' => $this->faker->word,
        'user_id' => $this->faker->word,
        'estado_id' => $this->faker->word,
        'numero_unidad' => $this->faker->word,
        'nombres_conductor' => $this->faker->word,
        'apellidos_conductor' => $this->faker->word,
        'hora_de_llamada' => $this->faker->date('Y-m-d H:i:s'),
        'hora_de_salida' => $this->faker->date('Y-m-d H:i:s'),
        'hora_de_llegada' => $this->faker->date('Y-m-d H:i:s'),
        'clasificacion_triaje' => $this->faker->word,
        'motivo_consulta' => $this->faker->text,
        'evaluacion_primaria_a' => $this->faker->text,
        'evaluacion_primaria_b' => $this->faker->text,
        'evaluacion_primaria_c' => $this->faker->text,
        'evaluacion_primaria_d' => $this->faker->text,
        'evaluacion_primaria_e' => $this->faker->text,
        'evaluacion_secundaria_s' => $this->faker->text,
        'evaluacion_secundaria_a' => $this->faker->text,
        'evaluacion_secundaria_m' => $this->faker->text,
        'evaluacion_secundaria_p' => $this->faker->text,
        'evaluacion_secundaria_l' => $this->faker->text,
        'evaluacion_secundaria_e' => $this->faker->text,
        'atencion_enfermeria' => $this->faker->text,
        'antecedentes_morbidos' => $this->faker->text,
        'alergias' => $this->faker->text,
        'medicamentos_habituales' => $this->faker->text,
        'via_aerea' => $this->faker->word,
        'aspiracion_secreciones' => $this->faker->word,
        'oxigenoterapia_fio2' => $this->faker->word,
        'asistencia_ventilatoria' => $this->faker->word,
        'acceso_vascular_numero' => $this->faker->word,
        'acceso_vascular_ubicacion' => $this->faker->word,
        'administracion_parenteral' => $this->faker->word,
        'sondeo_gastrico_numero' => $this->faker->word,
        'sondeo_gastrico_debito' => $this->faker->word,
        'monitoreo_ekg' => $this->faker->word,
        'desfibrilacion' => $this->faker->word,
        'cardioversion_farm' => $this->faker->word,
        'marcapaso' => $this->faker->word,
        'frecuencia_cardiaca' => $this->faker->word,
        'inmovilizacion' => $this->faker->word,
        'extricacion' => $this->faker->word,
        'rcr' => $this->faker->word,
        'sondeo_vesical' => $this->faker->word,
        'otros' => $this->faker->word,
        'ventilacion_mecanica_hora_recepcion' => $this->faker->date('Y-m-d H:i:s'),
        'fallecimiento_hora' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
    ];
});
