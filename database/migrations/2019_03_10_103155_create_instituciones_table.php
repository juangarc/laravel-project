<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstitucionesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('direccion', 100);
            $table->string('telefono', 50);
            $table->string('correo_electronico', 100);
            $table->integer('cod_ciudad')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('cod_ciudad')->references('id')->on('ciudads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('instituciones');
    }
}
