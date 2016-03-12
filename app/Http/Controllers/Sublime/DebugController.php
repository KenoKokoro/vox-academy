<?php

namespace Academy\Http\Controllers\Sublime;

use Academy\Http\Controllers\Controller;

class DebugController extends Controller
{
    public function index()
    {
        return view('sublime.index');
    }

    public function basicDebug()
    {
        $variable = 'debug me!';

        if ($variable = 'can you ?') {
            return '<img src="http://goo.gl/kCjVPY" />';
        } else {
            return "<img src='http://goo.gl/Z3SwiO'/>";
        }
    }
}
