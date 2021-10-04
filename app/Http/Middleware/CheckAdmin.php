<?php

namespace App\Http\Middleware;

use Closure;
use Excpetion;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $usuario = Auth::user();
            $route = Route::current(); // Illuminate\Routing\Route
            $name = Route::currentRouteName(); // string
            $action = Route::currentRouteAction(); // string
            $prefix = Route::currentRouteAction(); // string

            if ($usuario->isAdmin()) {
                return $next($request);
            }
        } catch (Exception $e) {
            return redirect()->route('login');
        }
    }
}
