<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    //
    public function create($post_id)
    {
        $post = Post::find($post_id);

        return view('comments.create', compact('post'));
    }

    public function store(Request $request)
    {
        $post = Post::find($request->post_id);
        $comment = new Comment;
        $comment->body = $request->body;
        $comment->user_id = Auth::id();
        $comment->post_id = $request->post_id;
        $comment->save();

        if ($comment->body !== null) {

            return view('posts.show', compact('post'));
        } else {

            return view('comments.create', compact('post'));
        }
        // return view('posts.show', compact('post'));
    }
}
