<?php

namespace App\Http\Controllers;

class ManualController extends Controller
{
    public function index()
    {
        return 'Manual controller index';
    }

    public function withparams($params)
    {
        return 'Manual controller with params:' . $params;
    }
}
