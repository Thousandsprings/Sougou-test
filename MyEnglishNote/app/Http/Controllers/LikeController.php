<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;

class LikeController extends Controller
{
    //
    public function store(Request $request)
    {
        $like = new Like();
        $like->post_id = 1;
        $like->user_id = 1;
        $like->save();

        return redirect('/index')
    }
}
