<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userlogin extends Controller
{
    //
    public function login(Request $request){

        // Validar los datos del formulario
        $request->validate([
            'email' => ['required' ,'email'],
            'password' => ['required'],
        ]);
    

        // Intentar autenticar al usuario como un profesor
        if (Auth::guard('profesor')->attempt($request->only('email', 'password'))) {
            // Si la autenticación es exitosa, redirigir al usuario a su dashboard de profesor
            return redirect()->intended('/home-teacher');
        }

        // Si la autenticación del profesor falla, intentar autenticar al usuario como un usuario normal
        if (Auth::attempt($request->only('email', 'password'))) {
            // Si la autenticación es exitosa, redirigir al usuario a su dashboard normal
            return redirect()->intended('/home');
        }

        // Si ambas autenticaciones fallan, redirigir al usuario de vuelta al formulario de login con un mensaje de error
        return redirect()->back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
            'password' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
        
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login?logged_out=true');
    }
}
