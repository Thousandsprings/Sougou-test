<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    function comments()
    {
        return $this->hasMany('App\Comment');
    }

    function user()
    {
        return $this->belongsTo('App\User');
    }

    function likes(){
        return $this->hasMany('App\Like');
    }

    function likedBy($user){
        return Like::where('user_id', $user->id)->where('post_id', $this->id);
}
