<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('paciente_id')->index('fk_remas_pacientes1');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('estado_id')->index('fk_remas_estados1');
            $table->string('numero_unidad')->nullable();
            $table->string('nombres_conductor')->nullable();
            $table->string('apellidos_conductor')->nullable();
            $table->timestamp('hora_de_llamada');
            $table->timestamp('hora_de_salida');
            $table->timestamp('hora_de_llegada');
            $table->string('clasificacion_triaje', 45)->nullable();
            $table->text('motivo_consulta')->nullable();
            $table->text('evaluacion_primaria_a')->nullable();
            $table->text('evaluacion_primaria_b')->nullable();
            $table->text('evaluacion_primaria_c')->nullable();
            $table->text('evaluacion_primaria_d')->nullable();
            $table->text('evaluacion_primaria_e')->nullable();
            $table->text('evaluacion_secundaria_s')->nullable();
            $table->text('evaluacion_secundaria_a')->nullable();
            $table->text('evaluacion_secundaria_m')->nullable();
            $table->text('evaluacion_secundaria_p')->nullable();
            $table->text('evaluacion_secundaria_l')->nullable();
            $table->text('evaluacion_secundaria_e')->nullable();
            $table->text('atencion_enfermeria')->nullable();
            $table->text('antecedentes_morbidos')->nullable();
            $table->text('alergias')->nullable();
            $table->text('medicamentos_habituales')->nullable();
            $table->string('via_aerea')->nullable();
            $table->string('aspiracion_secreciones')->nullable();
            $table->string('oxigenoterapia_fio2', 45)->nullable();
            $table->string('asistencia_ventilatoria', 45)->nullable();
            $table->string('acceso_vascular_numero', 45)->nullable();
            $table->string('acceso_vascular_ubicacion', 45)->nullable();
            $table->string('administracion_parenteral', 45)->nullable();
            $table->string('sondeo_gastrico_numero', 45)->nullable();
            $table->string('sondeo_gastrico_debito', 45)->nullable();
            $table->char('monitoreo_ekg', 2)->nullable();
            $table->string('desfibrilacion', 45)->nullable();
            $table->string('cardioversion_farm', 45)->nullable();
            $table->string('marcapaso', 45)->nullable();
            $table->string('frecuencia_cardiaca', 45)->nullable();
            $table->string('inmovilizacion', 45)->nullable();
            $table->char('extricacion', 2)->nullable();
            $table->string('rcr', 45)->nullable();
            $table->string('sondeo_vesical', 45)->nullable();
            $table->string('otros', 45)->nullable();
            $table->dateTime('ventilacion_mecanica_hora_recepcion')->nullable();
            $table->dateTime('fallecimiento_hora')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remas');
    }
}
