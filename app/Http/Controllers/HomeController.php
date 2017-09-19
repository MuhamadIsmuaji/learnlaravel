<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();

        foreach ($users as $user) {
            echo $user->name . ' - ' . $user->email;
            echo '<a href="">Detail</a>';
        }

        echo '<br><br><a href="">Create New</a>';
    }
}
