<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateclientesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('identificacion');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('telefono', 15);
            $table->string('direccion', 45);
            $table->string('correo', 40);
            $table->enum('genero', ['MASCULINO','FEMENINO']);
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
        Schema::drop('clientes');
    }
}
