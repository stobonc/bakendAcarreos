<?php

namespace Products\Http\Middleware;

use Closure;

class Cors
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
        return $next($request)
        ->header('Access-Control-Allow-Origin', 'http://127.0.0.1:8101')
        ->header('Access-Control-Allow-Credentials', 'true')
        ->header('Access-Control-Allow-Methods', 'GET,HEAD,OPTIONS,POST,PUT"')
        ->header('Access-Control-Allow-Headers', 'Origin, Content-Type'); 
    }
}
