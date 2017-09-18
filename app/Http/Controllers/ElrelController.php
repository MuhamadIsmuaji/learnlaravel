<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;

class ElrelController extends Controller
{
    public function index()
    {
        $users = User::all();
        $posts = Post::all();

        return view('elrel.index', compact('users', 'posts'));
    }

    public function userposts($user_id)
    {
        $posts = User::find($user_id)->posts;
        return view('elrel.user_posts', compact('posts'));
    }

    public function postdetail($post_id)
    {
        $post = Post::find($post_id);
        return view('elrel.post_detail', compact('post'));
    }
}
