<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RouteManager extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
     public function homeGet(){
        return view('home');
    }
     public function aboutGet(){
        return view('aboutus');
    }
     public function contactusGet(){
        return view('contactus');
    }
     public function registerGet(){
        return view('registerform');
    }
     public function registerformGet(){
        return view('registers');
    }
     public function loginGet(){
        return view('signup');
    }
     public function verifycvGet(){
        return view('verifycv');
    }
    public function userhomeGet(){
        return view('user/userhome');
    }

    public function adminhomeGet(){
        return view('admin/Adminhome');
    }
    public function managerhomeGet(){
        return view('manager/Managerhome');
    }
}
