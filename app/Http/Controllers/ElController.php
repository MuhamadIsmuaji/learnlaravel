<?php

namespace App\Http\Controllers;

use App\Post;

class ElController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::withTrashed()->get();

        foreach ($posts as $post) {
            echo 'ID: ' . $post->id . ' || Title: ' . $post->title . ' || Content: ' . $post->content;
            echo $post->deleted_at ? ' (Trashed)' : '';

            if ($post->deleted_at) {
                echo ' <a href="' . route('el.forcedelete', ['id' => $post->id]) . '">Force Delete</a> || ';
            } else {
                echo ' <a href="' . route('el.delete', ['id' => $post->id]) . '">Delete</a> || ';
            }

            echo ' <a href="' . route('el.updatebasic', ['id' => $post->id]) . '">Update Basic</a> || ';
            echo ' <a href="' . route('el.updatemass', ['id' => $post->id]) . '">Update Mass Assigment</a><br>';
        }

        echo '<br><br><a href="' . route('el.createbasic') . '">Create Basic</a> || <a href="' . route('el.createmass') . '">Create Mass Assigment</a>';

    }

    public function createbasic()
    {
        $post = new Post;
        $post->title = str_shuffle('This is some title string');
        $post->content = 'Lorem ipsum dolor sir amet.';
        $post->save();

        return redirect()->route('el.index');
    }

    public function createmass()
    {
        $data = [
            'title' => str_shuffle('This is some title string'),
            'content' => 'Lorem ipsum dolor sir amet.',
        ];

        Post::create($data);
        return redirect()->route('el.index');
    }

    public function delete($id)
    {
        Post::where('id', $id)->delete();
        return redirect()->route('el.index');
    }

    public function forcedelete($id)
    {
        Post::where('id', $id)->forcedelete();
        return redirect()->route('el.index');
    }

    public function updatebasic($id)
    {
        $post = Post::find($id);
        $post->title = 'Updated Title Basic';
        $post->content = 'Updated content basic.';
        $post->save();

        return redirect()->route('el.index');
    }

    public function updatemass($id)
    {
        $data = [
            'title' => 'Updated Title Mass',
            'content' => 'Updated content mass.',
        ];

        Post::where('id', $id)->update($data);

        return redirect()->route('el.index');
    }

}
