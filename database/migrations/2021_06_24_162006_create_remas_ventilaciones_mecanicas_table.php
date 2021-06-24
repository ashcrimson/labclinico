<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemasVentilacionesMecanicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remas_ventilaciones_mecanicas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('rema_id')->index('fk_remas_ventilaciones_mecanicas_remas1_idx');
            $table->timestamp('hora');
            $table->string('vol');
            $table->string('peep');
            $table->string('tie');
            $table->string('fr');
            $table->string('pf');
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
        Schema::dropIfExists('remas_ventilaciones_mecanicas');
    }
}
