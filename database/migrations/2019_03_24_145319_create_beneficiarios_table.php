<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeneficiariosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identificacion', 15);
            $table->string('name', 40);
            $table->string('parentesco', 25);
            $table->string('edad', 10);
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
        Schema::drop('beneficiarios');
    }
}
