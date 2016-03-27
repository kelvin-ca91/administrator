<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        if(!Auth::user())
            return view('layouts.login');
        else
            return view('layouts.master');
    });

    Route::resource('log', 'LogController');

    Route::resource('usuario', 'UsuarioController');

    Route::get('logout', 'LogController@logout');
});
