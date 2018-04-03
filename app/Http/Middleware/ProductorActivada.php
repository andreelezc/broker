<?php

namespace inetweb\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class ProductorActivada
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
         if (Auth::guard('productor')->user()->estado) 
        {
            return redirect('/productor/acceso')->with('activacion','Su cuenta aun no ha sido activada, comuniquese con el Administrador');
        }
        return $next($request);
    }
}
