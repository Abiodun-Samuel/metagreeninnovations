<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class is_client
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
        if (auth()->user()->is_clients == 1) {
            return $next($request);
        }
        return redirect()->route('home');
    }
}
