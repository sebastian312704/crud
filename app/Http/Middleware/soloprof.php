<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class soloprof
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        switch(auth::user()->tipo){

            case('1'):
                return redirect('Principal-Admin');
            break;

            case('2'):
                return $next($request);
            break;

            case('3'):
                return redirect('Principal-Est');
            break;
        }
    }
}
