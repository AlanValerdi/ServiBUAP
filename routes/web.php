<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeTeacherController;
use App\Http\Controllers\TeacherCrudController;
use App\Http\Controllers\UserCrudController;
use App\Http\Controllers\UserInterfaceController;
use App\Http\Controllers\userlogin;
use App\Http\Controllers\userRegistration;
use App\Models\Materia;
use Illuminate\Support\Facades\Route;

// Esta ruta es la que vamos a utilizar para mostrar la vista de login-registro
Route::get('/', function () {
    return view('login');
});

//Rutas login
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/', [userlogin::class, 'login']);  

Route::post('/login', [userlogin::class, 'login']);
Route::post('/logout', [userlogin::class, 'logout']);

//Rutas registro
Route::get('/register', function () {
    return view('register');
}) ->name('register');

Route::post('/register', [userRegistration::class, 'store']);



// Vistas de noticias (home)
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/home-teacher', [HomeTeacherController::class, 'index'])->name('home-teacher')->middleware('auth:profesor');



// Vistas de noticias (home) con un valor dado
Route::get('/home/{noticia}', [HomeController::class, 'show'])->name('noticias.show')->middleware('auth');

Route::get('/home-teacher/{noticia}', [HomeTeacherController::class, 'show'])->name('noticias-teacher.show')->middleware('auth:profesor');




// Vistas de usuario
// Esta ruta es la que vamos a utilizar para mostrar la vista de usuario
Route::get('/user', [UserInterfaceController::class, 'index'])->name('user')->middleware('auth');
Route::get('/user/{option}', [UserInterfaceController::class, 'show'])->name('user.show')->middleware('auth');

Route::get('/teacher', [UserInterfaceController::class, 'indexTeacher'])->name('teacher')->middleware('auth:profesor');
Route::get('/teacher/{option}', [UserInterfaceController::class, 'showTeacher'])->name('teacher.show')->middleware('auth:profesor');

//CRUD para dashboard de profesores
Route::get('/teacher-materias-dashboard', [TeacherCrudController::class, 'mostrarMaterias'])->middleware('auth:profesor');
Route::post('teacher/teacher-materias-dashboard', [TeacherCrudController::class, 'guardarMateria'])->middleware('auth:profesor');
Route::delete('teacher/teacher-materias-dashboard', [TeacherCrudController::class, 'eliminarMateria'])->middleware('auth:profesor');
Route::delete('/teacher-materias-dashboard/{materia_id}', [TeacherCrudController::class, 'eliminarMateria'])->middleware('auth:profesor');
Route::post('/calificarAlumno', [TeacherCrudController::class, 'calificarAlumno'])->middleware('auth:profesor');




//CRUD para dashboard de usuarios
Route::post('/clases', [UserCrudController::class, 'insertarClases'])->middleware('auth');
Route::delete('/clasesDelete', [UserCrudController::class, 'eliminarClase'])->middleware('auth');
