<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //Postモデルを使う宣言

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
}
