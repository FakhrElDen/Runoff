<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class England extends Model
{
    protected $fillable =
    [
        'team',
        'photo',
        'play',
        'photo',
        'win',
        'draw',
        'lose',
        'goals_for',
        'goals_against',
        'goals_difference',
        'points',
        'form',
    ];

    public function PremierLeagueTransfersIn()
    {
        return $this->hasMany('App\PremierLeagueTransferIn');
    }

    public function PremierLeagueTransfersOut()
    {
        return $this->hasMany('App\PremierLeagueTransferOut');
    }

    public function getTeamsTransfer()
    {
        $arrTeams = $this->orderBy('team')->get();
        foreach ($arrTeams as $obj) {
            $objPremierLeagueTransferIn = new PremierLeagueTransferIn();
            $obj['premier_league_transfer_ins'] = $objPremierLeagueTransferIn->getPlayersIn($obj->id);
            $objPremierLeagueTransferOut = new PremierLeagueTransferOut();
            $obj['premier_league_transfer_outs'] = $objPremierLeagueTransferOut->getPlayersOut($obj->id);
        }
        return $arrTeams;
    }
}
