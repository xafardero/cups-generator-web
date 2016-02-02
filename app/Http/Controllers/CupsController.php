<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Cups;

class CupsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('cups/index', ['cups' => (new Cups())->generate()]);
    }
}
