<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use CupsGenerator\Cups;

Route::get('/', function () {
     return view('cups/index', ['cups' => (new Cups())->generate()]);
});
Route::get('cups', function() {
    return view('cups/index', ['cups' => (new Cups())->generate()]);
});
Route::get('/cookies', function() {
    return view('cookies/cookies');
});

