<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'admin_id',
        'title',
        'body',
        'image'
    ];

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }
}
