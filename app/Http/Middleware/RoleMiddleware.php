<?php

namespace App\Http\Middleware;

use App\Exceptions\CustomException;
use Closure;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!auth()->check()) {
            throw new Exception('Unauthorized User');
            // abort(401);
        }
        if(!auth()->user()->roles()->where('name', $role)->exists()){
            throw CustomException::forbidden();
            // abort(403);
        }
        return $next($request);
    }
}
