<?php

namespace inetweb\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class IsAdmin
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
           if (!Auth::guard('admin')->check()) 
        {
            return redirect('/adminstracion/login');
        }
        return $next($request);
    }
}
