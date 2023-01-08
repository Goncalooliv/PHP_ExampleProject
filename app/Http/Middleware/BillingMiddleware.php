<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BillingMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = $request->user();
     
        if ($user && !$user->currentTeam->subscribed('default')) {
            return redirect('subscription');
        }
     
        return $next($request);
    }
}
