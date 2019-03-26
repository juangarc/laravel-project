<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicioExamensTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio__examens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_servicio')->unsigned();
            $table->integer('cod_examen_institucions')->unsigned();
            $table->date('fecha_cita');
            $table->time('hora_cita');
            $table->enum('estado', ['Aprobado','Pendiente','Rechazado']);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('cod_servicio')->references('id')->on('servicios');
            $table->foreign('cod_examen_institucions')->references('id')->on('examen__institucions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('servicio__examens');
    }
}
