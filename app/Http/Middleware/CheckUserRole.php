<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, int $role)
    {
        // dd($request->user()->role_id !=  $role, $request->user()->role_id, (int)$role);
        // if ($request->user()->role_id !=  $role) {
        //     abort(403, 'You don\'t have the right role to access this page');
        // }

        return $next($request);
    }
}
