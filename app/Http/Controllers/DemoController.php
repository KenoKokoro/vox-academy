<?php

namespace Academy\Http\Controllers;

//use View;

class DemoController extends Controller
{
    public function index()
    {
        $test = '';
        $test = 'demo watch expression';
        $test = 'test';
        $test = $this->demoRoute();
        return $test;
//        return View::make('demo', compact("user"));
    }

    public function demoRoute()
    {
        $value = 'new value';
        return $value;
    }
}