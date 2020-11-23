<?php

namespace App\Http\Middleware;

use Closure;

class memberMiddleware
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
        if (auth()->user()->type!=2){
            return redirect('/')->with('error','You are not authorized to access this !');
        }
        return $next($request);

    }
}
