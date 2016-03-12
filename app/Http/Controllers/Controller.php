<?php

namespace Academy\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function parentString($string, $i)
    {
        if ($string == 'parent_call') {
            if ($i == 200) {
                $return = "<h2>Something we expect!</h2>";
                $return .= "<img src='http://www.navalica.com/wp-content/uploads/2013/04/kogatikaze.gif' />";

                return $return;
            } else {
                $return = "<h2>Well... Another bug.</h2>";
                $return .= "<img src='http://brkajrabota.mk/images/stories/2013/servisi/turlitava/gif/fevruari/26/koga-vo-turskata-serija-ke-zazvoni-telefonot.gif' />";

                return $return;
            }
        } else {
            $return = "<h2>Something we don't expect.</h2>";
            $return .= "<img src='http://media.tumblr.com/tumblr_mckgg6yHYp1rjizduo1_400.gif' />";

            return $return;
        }
    }
}
