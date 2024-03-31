<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'photo'
    ];

    public function getAdmin($email)
    {
        $admin = Admin::where('email', $email)->first();
        return $admin;
    }

    public function news()
    {
        return $this->hasMany('App\News');
    }
}
