<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRemasVentilacionesMecanicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('remas_ventilaciones_mecanicas', function (Blueprint $table) {
            $table->foreign('rema_id', 'fk_ventilaciones_mecanicas1')->references('id')->on('remas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('remas_ventilaciones_mecanicas', function (Blueprint $table) {
            $table->dropForeign('fk_ventilaciones_mecanicas1');
        });
    }
}
