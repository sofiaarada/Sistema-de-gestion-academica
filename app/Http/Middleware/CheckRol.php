<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRol
{
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        foreach ($roles as $rol) {
            if (Auth::guard($rol)->check()) {
                return $next($request);
            }
        }

        return redirect('/login');
    }
}
