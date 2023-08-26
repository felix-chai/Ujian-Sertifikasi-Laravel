<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request; // Make sure to import the Request class
use Illuminate\Support\Facades\Auth; // Import the Auth facade

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/dashboard';
    protected $redirectToUser = '/users';

    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($credentials['email'] === 'admin@admin' && $credentials['password'] === 'admin') {
            return redirect()->route('users.index');        }

        if (Auth::attempt($credentials)) {
            return redirect()->intended($this->redirectTo);
        }

        return redirect()->back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    // Override the default logout method to customize the behavior
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login'); // Redirect to the login page after logout
    }
}
