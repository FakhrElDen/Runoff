<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePremierLeagueStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premier_league_stats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('PremierLeagueTopScorer');
            $table->string('ScorerTeamLogo');
            $table->integer('NoGoals')->unsigned();
            $table->string('PremierLeagueTopAssistant');
            $table->string('AssistantTeamLogo');
            $table->integer('NoAssisting')->unsigned();
            $table->string('PremierLeagueYellowCards');
            $table->string('YellowCardsTeamLogo');
            $table->integer('NoYellowCards')->unsigned();
            $table->string('PremierLeagueRedCards');
            $table->string('RedCardsTeamLogo');
            $table->integer('NoRedCards')->unsigned();
            $table->string('PremierLeagueTopCleanSheet');
            $table->string('GoalKeeperTeamLogo');
            $table->integer('NoCleanSheet')->unsigned();
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
        Schema::dropIfExists('premier_league_stats');
    }
}
