<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamenesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examenes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('cod_tipoexamen')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('cod_tipoexamen')->references('id')->on('tipo_examens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('examenes');
    }
}
