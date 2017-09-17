<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class QuController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();

        foreach ($posts as $post) {
            echo 'ID: ' . $post->id . ' || Title: ' . $post->title . ' || Content: ' . $post->content;
            echo ' <a href="' . route('qu.delete', ['id' => $post->id]) . '">Delete</a> || ';
            echo ' <a href="' . route('qu.update', ['id' => $post->id]) . '">Update</a><br>';
        }

        echo '<br><br><a href="' . route('qu.create') . '">Create New</a> || <a href="' . route('qu.retrieve') . '">Retrieve</a>';

    }

    public function create()
    {
        $data = [
            'title' => str_shuffle('This is some title string'),
            'content' => 'Lorem ipsum dolor sir amet.',
        ];

        DB::table('posts')->insert($data);
        return redirect()->route('qu.index');
    }

    public function delete($id)
    {

        DB::table('posts')
            ->where('id', $id)
            ->delete();

        return redirect()->route('qu.index');
    }

    public function update($id)
    {
        $data = [
            'title' => 'Updated Title',
            'content' => 'Updated content.',
        ];

        DB::table('posts')
            ->where('id', $id)
            ->update($data);

        return redirect()->route('qu.index');
    }

    public function retrieve()
    {
        // $posts = DB::table('posts')->first();
        // $posts = DB::table('posts')->value('title');
        $posts = DB::table('posts')->pluck('title');
        // $posts = DB::table('posts')->pluck('title', 'content');

        dd($posts);
    }

}
