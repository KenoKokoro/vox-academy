<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    # Sublime routes
    Route::group(['prefix' => 'sublime-debug', 'namespace' => 'Sublime'], function() {
        Route::get('/', ['uses' => 'DebugController@index']);
        Route::get('route-one',
            [
                'as' => 's.route-one',
                'uses' => 'DebugController@firstRoute'
            ]
        );
    });
    # PHPStorm routes
    Route::group(['prefix' => 'phpstorm-debug', 'namespace' => 'PHPStorm'], function() {
        Route::get('/', ['uses' => 'DebugController@index']);
        Route::get('route-one',
            [
                'as' => 'p.route-one',
                'uses' => 'DebugController@basicDebug'
            ]
        );
        Route::get('route-two',
            [
                'as' => 'p.route-two',
                'uses' => 'DebugController@conditionalDebug'
            ]
        );
    });
});
