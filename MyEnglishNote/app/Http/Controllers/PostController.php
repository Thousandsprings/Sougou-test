<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //Postモデルを使う宣言
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    function index()
    {
        //postsテーブルから全部のデータを取ってくる
        $posts = Post::all();
        $posts = Post::latest()->get();
        //latest()関数で最新のポストを一番上に表示する
        // dd($posts);
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
        // dd($request->all());

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

    function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->body = $request->body;
        $post->save();

        return view('posts.show', compact('post'));
    }

    function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('posts.index');
    }
}
