<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PremierLeagueTransferOut extends Model
{
    protected $fillable = 
    [
        'england_id',
        'team',
        'playersOut',
    ];

    public function England()
    {
        return $this->belongsTo('App\England');
    }

    public function getPlayersOut($england_id)
    {
        $TeamOneOUT=$this->WHERE('england_id',$england_id)->get();
        return $TeamOneOUT;
    }
}
