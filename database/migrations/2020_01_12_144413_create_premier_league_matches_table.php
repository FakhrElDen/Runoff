<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePremierLeagueMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premier_league_matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('MatchTime')->index();
            $table->string('FirstTeam');
            $table->string('FirstTeamLogo');
            $table->string('MatchResult');
            $table->string('SecondTeam');
            $table->string('SecondTeamLogo');
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
        Schema::dropIfExists('premier_league_matches');
    }
}
