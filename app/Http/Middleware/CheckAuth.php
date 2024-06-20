<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $guardName = Auth::getDefaultDriver();
        //dump($guardName);

        $guards = ['super', 'admin', 'normal', 'vendor'];
        foreach ($guards as $guard) {
            // dump(['user_type' => $guard]);
            if (Auth::guard($guard)->check()) {
                session(['user_type' => $guard]);
                return $next($request);
            }


        }

        session(['user_type' => 'guest']);
        return $next($request);
    }
}
