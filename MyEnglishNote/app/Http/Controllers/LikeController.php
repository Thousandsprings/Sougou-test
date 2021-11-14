<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    //
    public function store(Request $request)
    {
        // dd($request->post_id);
        $like = new Like();
        $like->post_id = $request->post_id;
        $like->user_id = Auth::user()->id;
        $like->save();

        return redirect()->route('posts.index');
    }
}
