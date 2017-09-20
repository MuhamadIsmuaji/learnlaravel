<?php

namespace App\Http\Controllers;

use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getAuthData()
    {
        $user = Auth::user();
        dd($user->name);
    }

    public function checkauth()
    {
        if (Auth::check()) {
            echo "Authenticated";
        } else {
            echo "Please login first";
        }
    }
}
