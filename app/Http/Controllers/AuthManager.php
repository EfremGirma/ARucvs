<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout.post');
    }
    public function registerformPost(Request $request)
    {
        Validator::make($request->all(),[
        'name'=>"required",
        'email'=>"required|email",
        'password'=>"required|confirmed",
        ])->validate();

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'type'=>0,
        ]);
        return redirect()->route('login');
    }
    public function loginPost(Request $request)
    {
    
        Validator::make($request->all(), 
     [
        'email'=>'required|email',
        'password'=>'required'
     ])->validate();

     if (!Auth::attempt($request->only('email','password'),$request->boolean('remember'))) 
     {
            throw ValidationException::withMessages([
                'email'=>trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        if(auth()->user()->type == 'Manager'){
            return redirect()->route('managerhome.get');
        }
        elseif(auth()->user()->type == 'Admin')
        {
            return redirect()->route('adminhome.get');
        }elseif(auth()->user()->type == 'User')
        {
            return redirect()->route('userhome.get');
        }else{
            return redirect()->route('home.get');
        }
        
        

    }
    public function logoutPost(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();

        return redirect('/login');
    }
}
