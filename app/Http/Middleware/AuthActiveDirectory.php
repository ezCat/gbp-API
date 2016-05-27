<?php

namespace App\Http\Middleware;

use Closure;

class AuthActiveDirectory
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
        if (!$request->session()->has('id_user')) {
            $request->session()->put('id_user', 1);
        }
        return $next($request);
    }
}
