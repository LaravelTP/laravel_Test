<?php

namespace App\Http\Middleware;

use Closure;
use App\Role;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isEntrepreneur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     public function isEntrepeneur() : bool{
        $user = Auth::user();
        return $user && $user->role === Role::Entrepreneur_approuve ;
    }
    public function handle(Request $request, Closure $next): Response
    {
        if(!$this->isEntrepeneur()){
            abort(403,'Unauthorized');
        }
        return $next($request);
    }
}
