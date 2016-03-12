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
            return '<h2>Houston, we have problem !</h2><img src="http://brkajrabota.mk/images/stories/2012/servisi/turlitava/gif/dekemvri/24/folder/koga-ke-dojdes-do-kafanata-a-pred-vratata-pisuva-zatvoreno.gif" />';
        } else {
            return "<h2>Problem solved !</h2><img src='http://www.navalica.com/wp-content/uploads/2012/11/pesna.gif'/>";
        }
    }
}
