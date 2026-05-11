<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class GoogleController extends Controller
{
    /**
     * Redirect to Google login
     */
    public function redirect()
    {
        session(['google_auth_flow' => true]);
        return Socialite::driver('google')
            ->with(['prompt' => 'select_account']) // 🔥 prevents silent auto-login
            ->redirect();
    }

    /**
     * Handle Google callback
     */
    public function callback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $email = $googleUser->getEmail();

        // ✅ 1. DOMAIN RESTRICTION
        if (!Str::endsWith($email, '@iimk.ac.in')) {
            return redirect('/login')->withErrors([
                'email' => 'Only @iimk.ac.in emails are allowed.',
            ]);
        }

        // Optional safety: ensure login flow started from app
        if (!session('google_auth_flow')) {
            return redirect('/login')->withErrors([
                'email' => 'Invalid login session. Please try again.',
            ]);
        }

        session()->forget('google_auth_flow');

        // ✅ 2. CREATE OR UPDATE USER
        $user = User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $googleUser->getName(),
                'password' => bcrypt(Str::random(16)), // not used (Google auth only)
                'role' => 'admin', // or change dynamically later
            ]
        );

        // ✅ 3. LOGIN USER
        Auth::login($user);

        return redirect('/admin');
    }

    /**
     * Logout user properly
     */
    public function logout()
    {
        Auth::logout();

        Session::flush();
        Session::invalidate();
        Session::regenerateToken();

        return redirect('/login');
    }
}
