<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PremierLeagueMatches extends Model
{
    protected $fillable = [
        'MatchTime',
        'FirstTeam',
        'FirstTeamLogo',
        'MatchResult',
        'SecondTeam',
        'SecondTeamLogo',
    ];

    // Gameweek 22 
    public function Friday10JanuaryMatches()
    {
        return $arrPost = $this->WHERE('MatchTime', 'Friday 10 January 2020')->get();
    }

    public function Saturday11JanuaryMatches()
    {
        return $arrPost = $this->WHERE('MatchTime', 'Saturday 11 January 2020')->get();
    }

    public function Sunday12JanuaryMatches()
    {
        return $arrPost = $this->WHERE('MatchTime', 'Sunday 12 January 2020')->get();
    }

    // Gameweek 23
    public function Saturday18JanuaryMatches()
    {
        return $arrPost = $this->WHERE('MatchTime', 'Saturday 18 January 2020')->get();
    }

    public function Sunday19JanuaryMatches()
    {
        return $arrPost = $this->WHERE('MatchTime', 'Sunday 19 January 2020')->get();
    }
}
