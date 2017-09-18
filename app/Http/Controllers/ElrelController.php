<?php

namespace App\Http\Controllers;

use App\Country;
use App\Photo;
use App\Post;
use App\Role;
use App\Tag;
use App\User;
use App\Video;

class ElrelController extends Controller
{
    public function index()
    {
        $users = User::all();
        // lazy loading
        // $posts = Post::all();
        // eager loading
        $posts = Post::with('user')->get();
        $roles = Role::all();
        $countries = Country::all();
        $photos = Photo::all();
        $videos = Video::all();
        $tags = Tag::all();

        return view('elrel.index', compact('users', 'posts', 'roles', 'countries', 'photos', 'videos', 'tags'));
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

    public function userphotos($user_id)
    {
        $user = User::find($user_id);

        return view('elrel.user_photos', compact('user'));
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

    public function countryposts($country_id)
    {
        $country = Country::find($country_id);
        return view('elrel.country_posts', compact('country'));
    }

    public function photodetail($photo_id)
    {
        $photo = Photo::find($photo_id);

        dd($photo->imageable->name);
    }

    public function videodetail($video_id)
    {
        $video = Video::find($video_id);

        return view('elrel.video_detail', compact('video'));
    }

    public function tagdetail($tag_id)
    {
        $tag = Tag::find($tag_id);

        dd($tag->posts);
    }
}
