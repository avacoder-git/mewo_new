<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {

        foreach ($roles as $role){
            if ($request->user()->userHasRole($role))
            {
                return $next($request);
            }
        }
        abort(403, 'Вы не авторизовано');

    }
}
