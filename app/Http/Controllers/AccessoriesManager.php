<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessoriesManager extends Controller
{
    public function aboutGet(){
        return view('accessory/aboutus');
    }
     public function contactusGet(){
        return view('accessory/contactus');
    }
    public function userprofileGet(){
        return view('user/userprofile');
    }
    public function adminprofileGet(){
        return view('admin/adminprofile');
    }
    public function managerprofileGet(){
        return view('manager/managerprofile');
    }
}
