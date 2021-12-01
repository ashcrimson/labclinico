<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('examens', function (Blueprint $table) {
            $table->foreign('grupo_id', 'fk_examens_grupos1')->references('id')->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('examens', function (Blueprint $table) {
            $table->dropForeign('fk_examens_grupos1');
        });
    }
}
