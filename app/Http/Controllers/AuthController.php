<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\User;

class AuthController extends Controller
{
    // ===============================
    // 🔐 LOGIN METHODS
    // ===============================
    
    public function showLoginForm()
    {
        if (auth()->check()) {
            return redirect()->route('home');
        }
        return view('frontend.pages.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ], [
            'email.required' => 'Please enter your email address',
            'email.email' => 'Please enter a valid email address',
            'password.required' => 'Please enter your password',
            'password.min' => 'Password must be at least 6 characters'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            
            // Restore cart if preserved
            if (Session::has('cart_before_auth')) {
                $existing = Session::get('cart', []);
                $preserved = Session::get('cart_before_auth', []);
                Session::put('cart', array_merge($existing, $preserved));
                Session::forget('cart_before_auth');
            }
            
            // Redirect to intended page or home
            $redirect = session('url.intended', route('home'));
            session()->forget('url.intended');
            
            return redirect()->intended($redirect)->with('success', 'Welcome back!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ])->withInput($request->only('email'));
    }

    // ===============================
    // 👤 REGISTER METHODS
    // ===============================
    
    public function showRegisterForm()
    {
        if (auth()->check()) {
            return redirect()->route('home');
        }
        return view('frontend.pages.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable|string|max:20',
            'password' => 'required|min:6|confirmed',
            'terms' => 'accepted'
        ], [
            'name.required' => 'Please enter your full name',
            'email.required' => 'Please enter your email address',
            'email.unique' => 'This email is already registered',
            'password.required' => 'Please create a password',
            'password.min' => 'Password must be at least 6 characters',
            'password.confirmed' => 'Passwords do not match',
            'terms.accepted' => 'You must agree to the Terms & Conditions'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'email_verified_at' => now()
        ]);

        Auth::login($user);
        
        // Restore cart if preserved
        if (Session::has('cart_before_auth')) {
            $existing = Session::get('cart', []);
            $preserved = Session::get('cart_before_auth', []);
            Session::put('cart', array_merge($existing, $preserved));
            Session::forget('cart_before_auth');
        }

        return redirect()->route('home')->with('success', 'Account created successfully! Welcome aboard.');
    }

    // ===============================
    // 🚪 LOGOUT
    // ===============================
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('home')->with('success', 'Logged out successfully.');
    }

    // ===============================
    // 🔑 PASSWORD RESET (Optional)
    // ===============================
    
    public function showForgotForm()
    {
        return view('frontend.pages.auth.forgot-password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        
        // TODO: Implement actual password reset logic
        // For now, just show success message
        return back()->with('status', 'If that email exists in our system, you will receive a reset link.');
    }

    public function showResetForm($token)
    {
        return view('frontend.pages.auth.reset-password', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed'
        ]);
        
        // TODO: Implement actual password reset logic
        return redirect()->route('login')->with('success', 'Password reset successfully. Please login.');
    }
}