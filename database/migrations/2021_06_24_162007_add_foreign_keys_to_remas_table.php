<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('remas', function (Blueprint $table) {
            $table->foreign('estado_id', 'fk_remas_estados1')->references('id')->on('remas_estados');
            $table->foreign('paciente_id', 'fk_remas_pacientes1')->references('id')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('remas', function (Blueprint $table) {
            $table->dropForeign('fk_remas_estados1');
            $table->dropForeign('fk_remas_pacientes1');
        });
    }
}
