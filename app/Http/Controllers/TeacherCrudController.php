<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Profesor_Materia;
use App\Models\Profesores;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherCrudController extends Controller
{
    
    

    public function guardarMateria(Request $request){
        $profesorMateria = new Profesor_Materia();
    
        // Asignar los datos del formulario a las propiedades de la instancia
        $profesorMateria->profesor_id = $request->input('profesor_id');
        $profesorMateria->materia_id = $request->input('materia_id');
    
        try {
            // Intentar guardar la instancia en la base de datos
            $profesorMateria->save();
    
            // Si se guarda con éxito, redirigir a teacher-materias-dashboard con un mensaje de éxito
            return redirect()->back()->with('success', 'Se ha guardado con éxito');
        } catch (QueryException $e) {
            // Si hay un error al guardar, redirigir a teacher-materias-dashboard con un mensaje de error
            return redirect()->back()->with('error', 'Error al guardar los datos');
        }
    }

    public function eliminarMateria(Request $request){
        $materia_id = $request->input('materia_id');
        $deletedRows = Profesor_Materia::where('profesor_id', auth()->user()->id)->where('materia_id', $materia_id)->delete();
    
        if ($deletedRows) {
            return redirect('teacher/teacher-materias-dashboard')->with('success', 'Se ha eliminado con éxito');
        } else {
            return redirect('teacher/teacher-materias-dashboard')->with('error', 'Error al eliminar datos');
        }
    }
    
    public function calificarAlumno(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'profesor_materia' => 'required',
            'calificacion' => 'required|numeric|min:0|max:10',
        ]);

        // Dividir el valor de profesor_materia en alumno_id y materia_id
        list($alumno_id, $materia_id) = explode('_', $request->profesor_materia);

        try {
            // Insertar la calificación en la base de datos
            DB::table('calificaciones')->insert([
                'user_id' => $alumno_id,
                'materia_id' => $materia_id,
                'calificacion_total' => $request->calificacion,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Redirigir al profesor a la página de calificaciones con un mensaje de éxito
            return redirect()->back()->with('success', 'Calificación guardada con éxito.');
        } catch (\Exception $e) {
            // Redirigir al profesor a la página anterior con un mensaje de error
            return redirect()->back()->with('error', 'Hubo un error al guardar la calificación.');
        }
    }
    
}
