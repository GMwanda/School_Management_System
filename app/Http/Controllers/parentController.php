<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class parentController extends Controller
{
    public function index(){
        return view('index');
    }

    public function courses(){
        return view('courses');
    }

    public function contact(){
        return view('contact');
    }

    public function LoginPortal(){
        return view('LoginPortal');
    }

    public function staffHome(){
        return view('StaffViews.StaffPortal');
    }

    
}
