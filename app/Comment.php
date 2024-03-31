<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'user_id',
        'user_name',
        'user_photo',
        'comment',
        'image'
    ];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
    public function replies()
    {
        return $this->hasMany('App\Reply');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function getAllComments($post_id)
    {
        $arrcomment = $this->where('post_id', $post_id)->with("replies")->orderBy('created_at', 'desc')->get();
        return $arrcomment;
    }
}
