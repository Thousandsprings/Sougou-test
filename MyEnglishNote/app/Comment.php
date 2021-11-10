<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    function post()
    {
        return $this->belongsTo('App\Post');
    }

    function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
