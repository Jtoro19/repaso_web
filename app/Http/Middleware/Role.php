<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ROle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $newRole = explode('|', $roles);
        $roleName = strtolower($request->user()->role->label);
        if (!in_array($roleName, $newRole)) {
            return abort(403,__('Unauthorized'));
        }
        return $next($request);
    }
}
