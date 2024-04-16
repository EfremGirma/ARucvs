<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $userType)
    {
        if( auth()->user()->type){
            return $next($request);
        }
    //    return response()->json(['You do not have the permision to access this page): Sorry!!!',auth()->user()->type,'and you are now',$userType]);
    //    return response()->view('error.check-permission');
    switch($userType){
        case 'Manager':
            Log::info('Manager user Resource');
            return $next($request);
        case 'Admin':
            Log::info('Admin user Resource');
            return $next($request);
        case 'User':
            Log::info('User user Resource');
            return $next($request);
       default:
            return $next($request);
    }
    }
}
