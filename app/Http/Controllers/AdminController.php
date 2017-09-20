<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('isadmin');
    }

    public function index()
    {
        return 'AdminController@index';
    }
}
