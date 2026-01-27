<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Tampilkan form login
    public function showLogin()
    {
        return view('login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        // Coba login
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate(); // cegah session fixation
            return redirect()->intended(route('admin.dashboard'))
                ->with('success', 'Login berhasil!');
        }

        // Jika gagal
        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->onlyInput('username');
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate(); // hapus session
        $request->session()->regenerateToken(); // regenerate CSRF token

        return redirect()->route('login')->with('success', 'Anda sudah logout.');
    }
}
