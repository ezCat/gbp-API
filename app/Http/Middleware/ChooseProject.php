<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Response;

class ChooseProject
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
        if (!$request->session()->has('id_projet')) {
            return redirect('/choose.projet');
        }
        return $next($request);
    }
}
