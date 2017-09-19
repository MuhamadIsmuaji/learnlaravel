<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();

        foreach ($users as $user) {
            echo $user->name . ' - ' . $user->email;
            echo ' <a href="' . route('userposts', ['user_id' => $user->id]) . '">Posts</a> |';
            echo ' <a href="' . route('userdelete', ['user_id' => $user->id]) . '">Delete</a>';
            echo '<br>';
        }

        echo '<br><br><a href="' . route('createuser') . '">Create New</a>';
    }

    public function createuser()
    {
        $data = [
            'name' => 'New User',
            'email' => str_shuffle('abscdasd') . '@gmail.com',
            'password' => 'secret',
        ];

        User::create($data);

        return redirect()->route('home');
    }

    public function userdelete($user_id)
    {
        $user = User::find($user_id);
        $user->posts()->delete();
        $user->delete();

        return redirect('/');
    }

    public function userposts($user_id)
    {

        $user = User::find($user_id);

        echo $user->name . ' Posts';
        echo '<hr>';

        foreach ($user->posts as $post) {
            echo $post->title;
            echo ' <a href="' . route('deletepost', ['post_id' => $post->id]) . '">Delete This Post</a> | ';
            echo '<a href="' . route('updatepost', ['post_id' => $post->id]) . '">Update This Post</a>';
            echo '<br>';
        }

        echo '<br><br>';
        echo '<a href="' . route('createpost', ['user_id' => $user_id]) . '">Create Post</a> || ';
        echo '<a href="' . route('home') . '">Home</a> || ';
        echo '<a href="' . route('deleteallpost', ['user_id' => $user_id]) . '">Delete All Post</a>';
    }

    public function createpost($user_id)
    {
        $post = new Post(['title' => 'New Post', 'body' => 'This is some body']);

        $user = User::find($user_id);

        $user->posts()->save($post);

        return redirect()->route('userposts', ['user_id' => $user_id]);
    }

    public function deletepost($post_id)
    {
        $post = Post::find($post_id);
        $post->delete();

        return redirect()->route('userposts', ['user_id' => $post->user->id]);
    }

    public function updatepost($post_id)
    {
        $post = Post::find($post_id);
        $post->title = 'Updated Title';
        $post->body = 'Updated body';
        $post->save();

        return redirect()->route('userposts', ['user_id' => $post->user->id]);
    }

    public function deleteallpost($user_id)
    {
        $user = User::find($user_id);
        $user->posts()->delete();

        return redirect()->route('userposts', ['user_id' => $user_id]);
    }

}
