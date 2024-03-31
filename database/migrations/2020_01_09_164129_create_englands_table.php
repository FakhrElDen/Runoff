<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnglandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('englands', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
            $table->string('team');
            $table->string('photo');
            $table->integer('play')->unsigned();
            $table->integer('win')->unsigned();
            $table->integer('draw')->unsigned();
            $table->integer('lose')->unsigned();
            $table->integer('goals_for')->unsigned();
            $table->integer('goals_against')->unsigned();
            $table->integer('goals_difference');
            $table->integer('points')->unsigned();
            $table->string('form');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('englands');
    }
}
