<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RouteManager extends Controller
{
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
        return view('register');
    }
     public function registerformGet(){
        return view('registerform');
    }
     public function loginGet(){
        return view('signup');
    }
     public function verifycvGet(){
        return view('verifycv');
    }
    public function userhomeGet(){
        return view('userhome');
    }

    // public function adminhomeGet(){
    //     return view('Admindash');
    // }
    // public function managerhomeGet(){
    //     return view('Managerdash');
    // }
}
