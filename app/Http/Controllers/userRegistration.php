<?php

namespace App\Http\Controllers;

use App\Models\Profesores;
use Illuminate\Validation\Rules;
use App\Models\User;

use Illuminate\Http\Request;

class userRegistration extends Controller
{
    //Cuando se registra se redirige a la ruta login
    public function index(){
        return view('login');
    }

    public function store(Request $request){
        //Validación de los campos
        
        $request->validate([
            'role' => ['required', 'string', 'in:profesor,alumno'],
            'matricula' => ['required', 'string', 'min:9', 'max:9', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'name_p' => ['required', 'string', 'max:255'],
            'name_m' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', Rules\Password::defaults()],
        ]);

        if($request->role == 'alumno'){
            // Creación de un nuevo usuario (alumno)
            User::create([
                'matricula' => $request->matricula,
                'name' => $request->name,
                'name_p' => $request->name_p,
                'name_m' => $request->name_m,
                'email' => $request->email,
                'password' => bcrypt($request->password), //encriptación de la contraseña
            ]);
            // //Redirección a la ruta login
            return redirect('login?registered=true');
        }else{
            // Creacion de un nuevo usuario (profesor)
            Profesores::create([
                'matricula' => $request->matricula,
                'name' => $request->name,
                'name_p' => $request->name_p,
                'name_m' => $request->name_m,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
            return redirect('login?registered=true');
        }    
    }
}
