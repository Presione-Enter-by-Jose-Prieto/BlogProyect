<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $role = Role::where('name', 'user')->first();
        $data['role_id'] = $role->id;
        $data['password'] = Hash::make($data['password']);

        User::create($data);
        Auth::attempt($request->only('email', 'password'));
        return redirect()->route('home.index')->with('success', 'Bienvenido a la plataforma');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('home.index')->with('success', 'Sesión iniciada');
        }

        return back()->withErrors(['email' => 'Las credenciales son inválidas'])->onlyInput('email');
    }
}
