<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class IsadminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if (!$user->isAdmin()) {
            return redirect('/');
        }

        return $next($request);
    }
}
