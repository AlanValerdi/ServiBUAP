<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserCrudController extends Controller
{
    public function insertarClases(Request $request) {
        $profesor_materia = explode('_', $request->input('profesor_materia'));
        $profesor_id = $profesor_materia[0];
        $materia_id = $profesor_materia[1];
    
        try {
            DB::table('clases')->insert([
                'user_id' => auth()->user()->id,
                'materia_id' => $materia_id,
                'profesor_id' => $profesor_id,
            ]);
    
            return redirect()->back()->with('success', 'Se ha guardado con éxito');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al guardar los datos');
        }
    }

    public function eliminarClase(Request $request) {
        $profesor_materia = explode('_', $request->input('profesor_materia'));
        $profesor_id = $profesor_materia[0];
        $materia_id = $profesor_materia[1];
    
        try {
            DB::table('clases')->where([
                ['user_id', '=', auth()->user()->id],
                ['materia_id', '=', $materia_id],
                ['profesor_id', '=', $profesor_id],
            ])->delete();
    
            return redirect()->back()->with('success', 'Se ha eliminado con éxito');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al eliminar los datos');
        }
    }

}
