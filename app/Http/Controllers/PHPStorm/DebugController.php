<?php

namespace Academy\Http\Controllers\PHPStorm;

use Academy\Http\Controllers\Controller;

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
            return '<h2>We have bug?</h2><img src="http://www.navalica.com/wp-content/uploads/2012/11/nisto1.gif" />';
        } else {
            return "<h2>Problem solved !</h2><img src='http://www.navalica.com/wp-content/uploads/2013/01/simpatija1.gif'/>";
        }
    }

    public function conditionalDebug()
    {
        $finalString = [];
        for($i=0; $i < 200; $i++) {
            $string = $this->returnString();
            $newString = $this->newString($string);
            $finalString = parent::parentString($newString, $i);
        }

        echo $finalString;
    }

    private function returnString()
    {
        $string = "Debugging";
        $string .= " With";
        $string .= " PhpStorm !";

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