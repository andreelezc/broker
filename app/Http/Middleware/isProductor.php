<?php

namespace inetweb\Http\Middleware;

use Closure;

class isProductor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('productor')->check()) 
        {
            return redirect('/productor/acceso');
        }

        return $next($request);
    }
}
