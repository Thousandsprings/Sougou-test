<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    public function user()
    {
        return $this->belingsTo('App\User');
    }

    public function post()
    {
        return $this->belingsTo('App\Post');
    }

    public function commment()
    {
        return $this->belongsTo('App\Comment');
    }
}
