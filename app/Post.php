<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'user_name',
        'user_photo',
        'post',
        'image'
    ];

    public function getAllpost()
    {
        $arrPost = $this->orderBy('created_at', 'desc')->get();
        foreach ($arrPost as $obj) {
            $objComment = new Comment();
            $obj['comments'] = $objComment->getAllComments($obj->id);
        }
        return $arrPost;
    }

    public function getUserpost($id)
    {
        $arrUserPosts = $this->where('user_id', $id)->with("comments")->orderBy('created_at', 'desc')->get();
        foreach ($arrUserPosts as $obj) {
            $objComment = new Comment();
            $obj['comments'] = $objComment->getAllComments($obj->id);
        }
        return $arrUserPosts;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
