<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBieneficiariosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bieneficiarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 45);
            $table->string('Parenteso', 45);
            $table->string('Edad', 45);
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
        Schema::drop('bieneficiarios');
    }
}
