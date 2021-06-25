<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemasSignosVitalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remas_signos_vitales', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('rema_id')->index('fk_signos_vitales_remas1_idx');
            $table->timestamp('hora');
            $table->integer('pulso');
            $table->integer('presion_arterial_ps');
            $table->integer('presion_arterial_pd');
            $table->string('frecuencia_cardiaca', 45);
            $table->string('frecuencia_respiratoria', 45);
            $table->decimal('temperatura_axilar', 5);
            $table->decimal('temperatura_rectal', 5)->nullable();
            $table->string('saturacion_oxigeno', 45)->nullable();
            $table->string('hgt', 45)->nullable();
            $table->string('eva', 45)->nullable();
            $table->string('gsc', 45)->nullable();
            $table->string('ekg', 45)->nullable();
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
        Schema::dropIfExists('remas_signos_vitales');
    }
}
