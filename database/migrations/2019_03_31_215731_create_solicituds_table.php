<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSolicitudsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicituds', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_inicio');
            $table->integer('id_serial')->unsigned();
            //$table->string('estado', 25);
            $table->string('nombre', 50);
            $table->integer('id_institucion')->unsigned();
            $table->integer('id_examen')->unsigned();
            $table->integer('id_examen_institucion')->unsigned();
            $table->date('fecha_cita');
            $table->time('hora');
            $table->unique('id');
            $table->timestamps();
            $table->softDeletes();
            $table->enum('progreso',['REPROBADO','PENDIENTE','APROBADO']);
            $table->string('observacion',100);
            $table->foreign('id_serial')->references('id')->on('cupos');
            $table->foreign('id_institucion')->references('id')->on('instituciones');
            $table->foreign('id_examen')->references('id')->on('examenes');
            $table->foreign('id_examen_institucion')->references('id')->on('examen_institucions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('solicituds');
    }
}
