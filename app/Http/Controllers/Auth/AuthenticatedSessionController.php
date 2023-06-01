<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\RegisterDonorRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
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
     * Display the register view.
     */
    public function createDonor(): View
    {
        return view('auth.registerDonor');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $remember = (bool) $request->remember;
        // $route="/";
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_active' => true], $remember)) {
            $user = User::where('email', $request->email)->first();
            if ($user) {
                if (Hash::check($request->password, $user->password)) {
                    $message = 'auth.disabled';
                } else {
                    $message = 'auth.failed';
                }
            } else {
                $message = 'auth.failed';
            }
            throw ValidationException::withMessages([
                'email' => trans($message),
            ]);
        }
        $request->authenticate();
        $request->session()->regenerate();

        $redirect = match (auth()->user()->role->name) {
            'Admin' => 'admin/dashboard',
            default => '/'
        };

        return redirect()->intended($redirect);
    }

    /**
     *register donor
     */
    public function storeDonor(RegisterDonorRequest $request)
    {
        
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
