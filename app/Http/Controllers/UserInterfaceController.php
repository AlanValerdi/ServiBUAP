<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Profesor_Materia;
use App\Models\Profesores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserInterfaceController extends Controller
{
    //
    public function index(){
        return view('user');
    }

    public function indexTeacher(){
        return view('teacher');
    }

    public function show($option){
        // Si la vista existe, la muestra, si no, muestra el error 404 predeterminado de laravel
        if(view()->exists('userDashboard.' . $option)){
            $profesoresMaterias = DB::table('profesor_materias AS PM')
                ->join('profesores AS P', 'PM.profesor_id', '=', 'P.id')
                ->join('materia AS M', 'PM.materia_id', '=', 'M.id')
                ->select('PM.profesor_id AS id_profesor', 'P.name AS profesor_nombre', 'P.name_p AS profesor_apellido_p', 'P.name_m AS profesor_apellido_m', 'PM.materia_id AS id_materia', 'M.nombre_materia')
            ->get();

            $alumnoClases = DB::table('clases AS C')
                ->join('users AS A', 'C.user_id', '=', 'A.id')
                ->join('materia AS M', 'C.materia_id', '=', 'M.id')
                ->join('profesores AS P', 'C.profesor_id', '=', 'P.id')
                ->select('A.name AS Alumno', 'A.name_p AS Apellido_P', 'A.name_m AS Apellido_M', 'M.nombre_materia AS Materia_a_Cursar', 'P.name AS Profesor', 'P.name_p AS Apellido_P', 'P.name_m AS Apellido_M')
                ->where('A.id', auth()->user()->id)
            ->get(); 
            
            $userId = Auth::id();

            $calificaciones = DB::table('calificaciones as C')
                ->join('users as A', 'C.user_id', '=', 'A.id')
                ->join('materia as M', 'C.materia_id', '=', 'M.id')
                ->where('A.id', $userId)
                ->select('A.name as nombre', 'A.name_p as apellido_p', 'A.name_m as apellido_m', 'M.nombre_materia', 'C.calificacion_total')
            ->get();

            return view('userDashboard.' . $option, ['profesoresMaterias' => $profesoresMaterias, 'alumnoClases' => $alumnoClases, 'calificaciones' => $calificaciones]);
        } else {
            abort(404);
        }
    }

    public function showTeacher($option){
        // Si la vista existe, la muestra, si no, muestra el error 404 predeterminado de laravel
        if(view()->exists('teacherDashboard.' . $option)){
            $profesorId = auth()->user()->id;
            $materias = Materia::all();
            $profesores = Profesores::all();
            $profesorMateria = Profesor_Materia::where('profesor_id', $profesorId)
                ->with('materia')
            ->get();

           

            $alumnos = DB::table('clases as C')
                ->join('users as A', 'C.user_id', '=', 'A.id')
                ->join('materia as M', 'C.materia_id', '=', 'M.id')
                ->join('profesores as P', 'C.profesor_id', '=', 'P.id')
                ->where('P.id', $profesorId)
                ->select('A.id as alumno_id', 'A.name as alumno_nombre', 'A.name_p as alumno_apellido_p', 'A.name_m as alumno_apellido_m', 'M.id as materia_id', 'M.nombre_materia')
            ->get();


            return view('teacherDashboard.' . $option, ['materias' => $materias, 'profesores' => $profesores, 'profesorMateria' => $profesorMateria, 'alumnos' => $alumnos]);
        } else {
            abort(404);
        }

    }
}
