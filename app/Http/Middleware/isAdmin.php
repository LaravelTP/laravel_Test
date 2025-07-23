<?php

namespace App\Http\Middleware;

use Closure;
use App\Role;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function isAdmin() : bool{
        $user = Auth::user();
        return $user && $user->role === Role::Admin ;
    }

    public function handle(Request $request, Closure $next): Response
    {
        if(!$this->isAdmin()){
             abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
