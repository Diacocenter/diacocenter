<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if (!auth()->user()->roles()->first()) {
                    return redirect()->route("choose-role");
                }
                return redirect(
                    match (auth()->user()->roles()->first()->name) {
                        "manager" => route("manager-panel"),
                        "admin" => route("admin-panel"),
                        "seeker" => route("technology-seeker-panel"),
                        "advisor" => route("advisor-panel"),
                        default => route("technology-provider-panel")
                    });
            }
        }

        return $next($request);
    }
}
