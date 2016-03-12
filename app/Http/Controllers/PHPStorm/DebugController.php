<?php

namespace Academy\Http\Controllers\PHPStorm;

use Academy\Http\Controllers\Controller;
use Academy\User;

class DebugController extends Controller
{
    public function index()
    {
        return view('phpstorm.index');
    }

    public function basicDebug()
    {
        $variable = 'debug me!';

        if($variable = 'can you ?') {
            return '<img src="http://goo.gl/kCjVPY" />';
        } else {
            return "<img src='http://goo.gl/Z3SwiO'/>";
        }
    }

    public function conditionalDebug()
    {
        for($i=0; $i < 200; $i++) {
            $finalString = 'No condition';
            if($i % 112 == 0) {
                $string = $this->returnString();
                $newString = $this->newString($string);
                $finalString = parent::parentString($newString);
            }

            echo $finalString;
        }
    }

    private function returnString()
    {
        $string = "Debugging";
        $string .= " With";
        $string .= " PhpStorm!";

        return $string;
    }

    private function newString($string)
    {
        if($string == "Debugging With PhpStorm!") {
            return "parent_call";
        }

        return "sum ting wong!";
    }
}