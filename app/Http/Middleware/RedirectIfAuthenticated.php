<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            /// if (Auth::guard($guard)->check()) {
            ///     return redirect(RouteServiceProvider::HOME);
            /// 
            if (Auth::guard($guard)->check() && Auth::user()->permissions == 1) {
                return redirect()->route('admin.dashboard');
            } elseif (Auth::guard($guard)->check() && Auth::user()->permissions == 2) {
                return redirect()->route('user.dashboard');
            }
        }

        return $next($request);
    }
    
}
