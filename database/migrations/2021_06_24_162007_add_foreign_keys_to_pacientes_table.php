<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->foreign('prevision_id', 'fk_pacientes_previsiones1')->references('id')->on('pacientes_previsiones')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->dropForeign('fk_pacientes_previsiones1');
        });
    }
}
