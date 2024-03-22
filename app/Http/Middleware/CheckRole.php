<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Check if user is logged in
        if (!Auth::check()) {
            return redirect('/');
        }

        $userRole = Auth::user()->role;

        // If the user has the admin role, redirect to admin_panel (if they're not already there)
        if ($userRole === 'admin' && $request->path() !== 'profile/admin_panel') {
            return redirect('/profile/admin_panel');
        }
        
        // If the user is trying to access admin_panel but their role is not admin, redirect to home
        if ($userRole !== 'admin' && $request->path() === 'profile/admin_panel') {
            return redirect('/');
        }

        // If the user role matches the required role for the route, proceed
        if ($userRole === $role) {
            return $next($request);
        }

        // Default redirect if none of the above conditions are met
        return redirect('/');
    }
}
