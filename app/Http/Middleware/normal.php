<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class normal
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        $userRole = Auth::user()->role;


        if($userRole ==='admin'){
            return redirect()->route('/admin');
        }
        if($userRole ==='staff'){
            return redirect()->route('/staff');
        } else{
            return $next($request);
        }
    }
}
