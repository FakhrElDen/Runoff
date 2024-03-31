<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PremierLeagueStats extends Model
{
    protected $fillable = [
        'PremierLeagueTopScorer',
        'ScorerTeamLogo',
        'NoGoals',
        'PremierLeagueTopAssistant',
        'AssistantTeamLogo',
        'NoAssisting',
        'PremierLeagueYellowCards',
        'YellowCardsTeamLogo',
        'NoYellowCards',
        'PremierLeagueRedCards',
        'RedCardsTeamLogo',
        'NoRedCards',
        'PremierLeagueTopCleanSheet',
        'GoalKeeperTeamLogo',
        'NoCleanSheet',
    ];
}
