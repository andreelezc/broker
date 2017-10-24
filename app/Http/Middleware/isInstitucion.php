<?php

namespace inetweb\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class isInstitucion
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
        if (!Auth::guard('institucion')->check()) 
        {
            return redirect('/institucion/acceso');
        }

        return $next($request);
    }
}
