<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Estudiante;
use App\Models\Profesor;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'password' => 'required',
            'rol' => 'required|in:estudiante,profesor'
        ]);

        $credentials = [
            'correo' => $request->correo,
            'password' => $request->password,
        ];

        if ($request->rol === 'estudiante') {
            if (Auth::guard('estudiante')->attempt($credentials)) {
                return redirect()->intended('/dashboard/estudiante');
            }
        } else {
            if (Auth::guard('profesor')->attempt($credentials)) {
                return redirect()->intended('/dashboard/profesor');
            }
        }

        return back()->withErrors([
            'correo' => 'Las credenciales no coinciden con nuestros registros.',
        ])->withInput();
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email|unique:estudiantes,correo|unique:profesores,correo',
            'password' => 'required|min:6|confirmed',
            'rol' => 'required|in:estudiante,profesor',
            'programa' => 'nullable|required_if:rol,estudiante|string|max:255'
        ]);

        if ($request->rol === 'estudiante') {
            $estudiante = Estudiante::create([
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'correo' => $request->correo,
                'programa' => $request->programa,
                'password' => $request->password,
            ]);

            Auth::guard('estudiante')->login($estudiante);
            return redirect('/dashboard/estudiante');
        } else {
            $profesor = Profesor::create([
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'correo' => $request->correo,
                'password' => $request->password,
            ]);

            Auth::guard('profesor')->login($profesor);
            return redirect('/dashboard/profesor');
        }
    }

    public function logout(Request $request)
    {
        if (Auth::guard('estudiante')->check()) {
            Auth::guard('estudiante')->logout();
        } elseif (Auth::guard('profesor')->check()) {
            Auth::guard('profesor')->logout();
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
