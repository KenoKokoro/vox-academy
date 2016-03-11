<?php

namespace Academy\Http\Controllers\PHPStorm;

use Academy\Http\Controllers\Controller;

class DebugController extends Controller
{
    public function firstRoute()
    {
        return 'ok';
    }

    public function secondRoute()
    {
        $variable = 'debug me!';

        if($variable = 'can you ?') {
            return '<img src="http://goo.gl/kCjVPY" />';
        } else {
            return "<img src='http://goo.gl/Z3SwiO'/>";
        }
    }
}