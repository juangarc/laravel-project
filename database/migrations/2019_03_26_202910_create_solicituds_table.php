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
            $table->date('fecha_registro');
            $table->integer('cliente')->unsigned();
            // $table->string('nombre', 45);
            $table->date('fecha_cita');
            $table->time('hora_cita');
            $table->integer('cod_institucion')->unsigned();
            $table->integer('cod_tipo_examen')->unsigned();
            $table->integer('cod_examen')->unsigned();
            $table->string('observacion', 100);
            $table->enum('estado', ['Aprobado','Pendiente','Rechazado']);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('cliente')->references('id')->on('clientes');
            $table->foreign('cod_institucion')->references('id')->on('instituciones');
            $table->foreign('cod_tipo_examen')->references('id')->on('tipo_examens');
            $table->foreign('cod_examen')->references('id')->on('examenes');
            $table->unique('id');
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
