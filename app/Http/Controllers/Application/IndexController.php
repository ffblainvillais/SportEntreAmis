<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function indexAction()
    {
        //return view('welcome');
        return view('application/index');
    }
}
