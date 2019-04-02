<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstadisticasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadisticas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('año');
            $table->double('ta');
            $table->double('is');
            $table->double('if');
            $table->double('ma');
            $table->double('ili');
            $table->double('iel');
            $table->double('pel');
            $table->double('ieg');
            $table->double('peg');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estadisticas');
    }
}
