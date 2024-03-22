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
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if ($user && in_array($user->role, $roles)) {
            // User has one of the specified roles

            if ($user->role === 'admin') {
                // Additional authorization logic for admin users
                // For example:
                // Allow access to certain routes or perform additional checks
            }

            return $next($request);
        }

        // User does not have one of the specified roles
        abort(403, 'Unauthorized');
    }
}
