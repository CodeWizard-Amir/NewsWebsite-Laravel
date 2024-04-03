<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Amir
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
        if (auth()->check()) {
            $role = auth()->user()->role;
            if ($role == 1) {
                return $next($request);
            }
            else
            {
                abort(403);
            }
        }
    }
}
