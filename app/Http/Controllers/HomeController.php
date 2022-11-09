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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function stdHome()
    {
        return view('StdPortal');
    }
    public function staffHome(){
        return view('StaffPortal');
    }
    public function admini(){
        return view('Admini');
    }

}
