<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Auth\SessionGuard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && Auth::user()->usuario == 1){

            return $next($request);
        }else{
            return redirect(RouteServiceProvider::HOME)->with('danger','Você não tem acesso a essa aba!');
        }
    }
}
