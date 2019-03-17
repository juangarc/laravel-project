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
            $table->string('name', 45);
            $table->string('parentesco', 30);
            $table->string('edad', 15);
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
