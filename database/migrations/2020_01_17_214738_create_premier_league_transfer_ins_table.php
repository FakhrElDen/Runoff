<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePremierLeagueTransferInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premier_league_transfer_ins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('england_id')->unsigned()->index();
            $table->string('team');
            $table->string('playersIn');
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
        Schema::dropIfExists('premier_league_transfer_ins');
    }
}
