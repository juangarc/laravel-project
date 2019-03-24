<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiciosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identificacion', 15);
            $table->date('fecha_registro');
            $table->integer('cod_cupo')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('cod_cupo')->references('id')->on('cupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('servicios');
    }
}
