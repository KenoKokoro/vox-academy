<?php

namespace Academy\Http\Controllers;

//use View;

class DemoController extends Controller
{
    public function index()
    {
        return 'New Route Works !';
//        return View::make('demo', compact("user"));
    }
}