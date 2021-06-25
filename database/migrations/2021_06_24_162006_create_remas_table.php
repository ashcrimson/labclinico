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
            $table->id();
            $table->unsignedBigInteger('paciente_id')->nullable()->index('fk_remas_pacientes1');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('estado_id')->index('fk_remas_estados1');
            $table->string('numero_unidad')->nullable();
            $table->string('nombres_conductor')->nullable();
            $table->string('apellidos_conductor')->nullable();
            $table->timestamp('hora_de_llamada')->nullable();
            $table->timestamp('hora_de_salida')->nullable();
            $table->timestamp('hora_de_llegada')->nullable();
            $table->string('clasificacion_triaje')->nullable();
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
            $table->string('oxigenoterapia_fio2')->nullable();
            $table->string('asistencia_ventilatoria')->nullable();
            $table->string('acceso_vascular_numero')->nullable();
            $table->string('acceso_vascular_ubicacion')->nullable();
            $table->string('administracion_parenteral')->nullable();
            $table->string('sondeo_gastrico_numero')->nullable();
            $table->string('sondeo_gastrico_debito')->nullable();
            $table->string('monitoreo_ekg')->nullable();
            $table->string('desfibrilacion')->nullable();
            $table->string('cardioversion_farm')->nullable();
            $table->string('marcapaso')->nullable();
            $table->string('frecuencia_cardiaca')->nullable();
            $table->string('inmovilizacion')->nullable();
            $table->string('extricacion')->nullable();
            $table->string('rcr')->nullable();
            $table->string('sondeo_vesical')->nullable();
            $table->string('otros')->nullable();
            $table->dateTime('ventilacion_hora_recepcion')->nullable();
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
