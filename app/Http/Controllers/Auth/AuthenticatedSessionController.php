<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = $request->user();

        if ($user->role === 'admin') {
            $notification = array(
                'message' => 'Admin Login Successfully',
                'alert-type' => 'success'
            );

            return redirect()->intended(route('admin.dashboard'))->with($notification);
        }

        $notification = array(
            'message' => 'Instructor Login Successfully',
            'alert-type' => 'success'
        );

        return redirect()->intended(route('instructor.dashboard'))->with($notification);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
        'message' => 'Admin Logout Successfully',
        'alert-type' => 'success'
     );


        return redirect('/')->with($notification);
    }
}
