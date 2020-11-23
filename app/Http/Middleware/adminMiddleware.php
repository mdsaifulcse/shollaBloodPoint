<?php

namespace App\Http\Middleware;

use Closure;

class adminMiddleware
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
        if (auth()->user()->type==3 || auth()->user()->type==1){
            return $next($request);
        }
        return redirect('/')->with('error','You are not authorized to access this !');


    }
}
