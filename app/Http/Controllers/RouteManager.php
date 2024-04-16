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
    
}
