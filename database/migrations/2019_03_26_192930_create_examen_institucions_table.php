<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamenInstitucionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_institucions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_examen')->unsigned();
            $table->integer('cod_institucion')->unsigned();
            $table->integer('valor_particular');
            $table->integer('valor_previser');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('cod_examen')->references('id')->on('examenes');
            $table->foreign('cod_institucion')->references('id')->on('instituciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('examen_institucions');
    }
}
