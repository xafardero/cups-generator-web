<?php

use App\Cups;

Route::get('/', function () {
     return view('cups/index', ['cups' => (new Cups())->generate()]);
});
Route::get('cups', function() {
    return view('cups/index', ['cups' => (new Cups())->generate()]);
});
