<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DomingoMiddleware
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
        if(date('w')==='0'){
            echo "Es domingo!";
        }else{
            echo "No es domingo";
        }
            
        return $next($request);
    }
}
