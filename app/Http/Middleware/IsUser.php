<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if (! in_array($user?->role, ['instructor', 'user'], true)) {
            abort(403, 'Access Denied');
        }

        if ($user->isRejected()) {
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login')->with([
                'message' => 'Your instructor account has been rejected. You cannot login.',
                'alert-type' => 'error',
            ]);
        }

        if ($user->isPending() && ! $request->routeIs('instructor.pending', 'instructor.logout')) {
            return redirect()->route('instructor.pending');
        }

        if ($user->isApproved() && $request->routeIs('instructor.pending')) {
            return redirect()->route('instructor.dashboard');
        }

        return $next($request);
    }
}
