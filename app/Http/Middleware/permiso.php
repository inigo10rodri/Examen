<?php

namespace App\Http\Middleware;

use App\usuPermitido;
use Closure;

class permiso
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
        if(usuPermitido::where('nombreUsu',$request->input('usuario'))->first()->hasPermiso()) {
            return $next($request);
        }
            return redirect('/denegado');
    }
}
