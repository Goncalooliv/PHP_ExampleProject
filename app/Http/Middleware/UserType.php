<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     * auth()->user()->tipo == 0 , ou seja, se for admin
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->tipo){
            return $next($request);
        }
        return redirect('homepage')->with('error',"You don't have admin access.");
    }
    
}
