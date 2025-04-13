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

            if ($request->user()->role === "admin"){
                return redirect()->intended(route('admin.dashboard', absolute: false));
            }
        if ($request->user()->role === "keuangan"){
            return redirect()->intended(route('keuangan.dashboard', absolute: false));
        }

            if ($request->user()->role === "asesor"){
                return redirect()->intended(route('asesor.dashboard', absolute: false))->with('message', 'you should login via mobile');
            }

        return redirect('/')->with('message', 'you should login via mobile');
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
