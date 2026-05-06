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

         if ($request->role !== Auth::user()->role) {
        Auth::logout();

        return back()->withErrors([
            'role' => 'Selected role does not match your account.'
        ]);
    }

        if (Auth::user()->role === 'admin') {
            return redirect()->intended(route('admin.dashboard', absolute: false));
        } elseif (Auth::user()->role === 'warden') {
            return redirect()->intended(route('warden.dashboard', absolute: false));
        } elseif (Auth::user()->role === 'student') {
            return redirect()->intended(route('student.dashboard', absolute: false));
        } elseif (Auth::user()->role === 'parent') {
            return redirect()->intended(route('parent.dashboard', absolute: false));
        }
        return redirect()->intended(route('home', absolute: false));

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
