<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //Postモデルを使う宣言
use Auth;

class PostController extends Controller
{
    //
    function index()
    {
        //postsテーブルから全部のデータを取ってくる
        $posts = Post::all();

        //Post=Post.php
        return view('posts.index', compact('posts'));
        //  compact（)＝$postsをviewで表示させることができるようにする
        // または['posts'=>$posts]
    }

    function create()
    {
        return view('posts.create');
        //create.blade.phpが表示される
    }

    function store(Request $request)
    {
        // $request に入っている値をnew Postでデータベースに保存するという記述
        $post = new Post;

        // 左辺＝テーブル（body、user_id）　右辺から送られてきた値（form（create.blade.php))から送られてきたnameが入っている）
        $post->body = $request->body;

        $post->user_id = Auth::id();

        $post->save();

        return redirect()->route('posts.index');
    }

    // $idはindex.blade.phpから送られたid
    function show($id)
    {
        // dd($id); idの番号が出る
        $post = Post::find($id);

        return view('posts.show', ['post' => $post]);
    }

    function edit($id)
    {

        $post = Post::find($id);

        return view('posts.edit', ['post' => $post]);
    }
}
