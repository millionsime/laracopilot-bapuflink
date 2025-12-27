<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    private $credentials = [
        'admin@business.com' => [
            'password' => 'admin123',
            'name' => 'Admin User',
            'role' => 'Administrator'
        ],
        'manager@business.com' => [
            'password' => 'manager123',
            'name' => 'Manager User',
            'role' => 'Manager'
        ],
        'supervisor@business.com' => [
            'password' => 'supervisor123',
            'name' => 'Supervisor User',
            'role' => 'Supervisor'
        ]
    ];

    public function showLogin()
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login', ['credentials' => $this->credentials]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if (array_key_exists($email, $this->credentials) && $this->credentials[$email]['password'] === $password) {
            session([
                'admin_logged_in' => true,
                'admin_user' => $this->credentials[$email]['name'],
                'admin_email' => $email,
                'admin_role' => $this->credentials[$email]['role']
            ]);

            return redirect()->route('admin.dashboard')->with('success', 'Login successful!');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function logout()
    {
        session()->forget(['admin_logged_in', 'admin_user', 'admin_email', 'admin_role']);
        return redirect()->route('admin.login')->with('success', 'You have been logged out successfully.');
    }
}