<?php

namespace App\Http\Controllers;

use App\Post;
use App\Role;
use App\User;

class ElrelController extends Controller
{
    public function index()
    {
        $users = User::all();
        $posts = Post::all();
        $roles = Role::all();

        return view('elrel.index', compact('users', 'posts', 'roles'));
    }

    public function userposts($user_id)
    {
        $posts = User::find($user_id)->posts;
        return view('elrel.user_posts', compact('posts'));
    }

    public function userroles($user_id)
    {
        $user = User::find($user_id);

        return view('elrel.user_roles', compact('user'));
    }

    public function postdetail($post_id)
    {
        $post = Post::find($post_id);
        return view('elrel.post_detail', compact('post'));
    }

    public function roledetail($role_id)
    {
        $role = Role::find($role_id);
        return view('elrel.role_detail', compact('role'));
    }
}
