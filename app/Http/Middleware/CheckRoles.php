<?php

namespace App\Http\Middleware;

use Closure;

class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {
        //return $next($request);
        $rolesArray= explode("|",$roles);
        if (! $request->user()->hasAnyRoles($rolesArray)) {
            // Redirect...
            return redirect()->route('home')->with(['permission'=>"Action non autorisée"]);
        }

        return $next($request);
    }
}
