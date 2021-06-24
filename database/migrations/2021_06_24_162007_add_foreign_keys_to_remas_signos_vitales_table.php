<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRemasSignosVitalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('remas_signos_vitales', function (Blueprint $table) {
            $table->foreign('rema_id', 'fk_remas_signos_vitales_remas1')->references('id')->on('remas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('remas_signos_vitales', function (Blueprint $table) {
            $table->dropForeign('fk_remas_signos_vitales_remas1');
        });
    }
}
