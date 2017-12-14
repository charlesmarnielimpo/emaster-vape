<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
<<<<<<< HEAD

    public function test()
    {
        return view('test');
    }
=======
>>>>>>> 10c1ac6f5145cdaf5a2afc3b039b436ea7a1f1f7
}
