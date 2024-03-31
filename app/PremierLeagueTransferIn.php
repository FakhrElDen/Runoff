<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PremierLeagueTransferIn extends Model
{
    protected $fillable = [
        'england_id',
        'team',
        'playersIn',
    ];

    public function England()
    {
        return $this->belongsTo('App\England');
    }

    public function getPlayersIn($england_id)
    {
        $TeamOneIN = $this->WHERE('england_id', $england_id)->get();
        return $TeamOneIN;
    }
}
