<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = [
        'comment_id',
        'user_id',
        'user_name',
        'user_photo',
        'reply'
    ];

    public function comment()
    {
        return $this->belongsTo('App\Comment');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
