<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeTeacherController extends Controller
{
    //
    public function index(){
        return view('home-teacher');
    }
    
    // Método que recibe un parámetro de la URL y lo utiliza para mostrar una vista específica
    public function show($noticia){
        // Si la vista existe, la muestra, si no, muestra el error 404 predeterminado de laravel
        if(view()->exists('noticias.' . $noticia)){
            return view('noticias.' . $noticia);
        } else {
            abort(404);
        }
    }
    
}
