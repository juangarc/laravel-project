<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCuposTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cupos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->enum('estado', ['ACTIVO','INACTIVO']);
            $table->integer('cod_cliente')->unsigned();
            $table->integer('cod_producto')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('cod_cliente')->references('id')->on('clientes');
            $table->foreign('cod_producto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cupos');
    }
}
