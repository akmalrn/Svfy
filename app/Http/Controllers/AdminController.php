<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/dashboard')->with('success', 'Selamat datang!');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/')->with('success', 'Anda telah logout.');
    }

    public function dashboard()
    {
        $user = Auth::user();
        return view('admin.index', compact('user'));
    }
}
