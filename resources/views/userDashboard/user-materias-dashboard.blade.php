<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{route('home')}}">SERVIBUAP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user')}}">Configuración de cuenta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.show', ['option' => 'user-materias-dashboard'])}}">Tomar materias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.show', ['option' => 'user-grades-dashboard'])}}">Mis calificaciones</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <h1 class="text-center">Añade ya tus materias para este semestre</h1><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                {{-- Formulario de seleccion de Materias --}}
                <form action="/clases" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="profesor_materia">Materias y profesor que se estan ofertando este semestre:</label>
                        <select class="form-control" id="profesor_materia" name="profesor_materia">
                            @foreach ($profesoresMaterias as $profesorMateria)
                                <option value="{{ $profesorMateria->id_profesor }}_{{ $profesorMateria->id_materia }}">
                                    {{ $profesorMateria->profesor_nombre }} 
                                    {{ $profesorMateria->profesor_apellido_p }} 
                                    {{ $profesorMateria->profesor_apellido_m }}, 
                                    imparte {{ $profesorMateria->nombre_materia }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
                <br>

                {{-- Horario --}}
                <h3 class="text-center">Horario final:</h3>
                <div class="card card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Alumno</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Materia a Cursar</th>
                                <th>Profesor</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumnoClases as $clase)
                                <tr>
                                    <td>{{ $clase->Alumno }}</td>
                                    <td>{{ $clase->Apellido_P }}</td>
                                    <td>{{ $clase->Apellido_M }}</td>
                                    <td>{{ $clase->Materia_a_Cursar }}</td>
                                    <td>{{ $clase->Profesor }}</td>
                                    <td>{{ $clase->Apellido_P }}</td>
                                    <td>{{ $clase->Apellido_M }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
               
                {{-- Formulario para eliminar un registro --}}
                <form action="/clasesDelete" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                        <br>
                        <label for="profesor_materia">¿Te equivocaste?, borra la meteria y acomoda tu horario con un click:</label>
                        <select class="form-control" id="profesor_materia" name="profesor_materia">
                            @foreach ($profesoresMaterias as $profesorMateria)
                                <option value="{{ $profesorMateria->id_profesor }}_{{ $profesorMateria->id_materia }}">
                                    {{ $profesorMateria->profesor_nombre }} 
                                    {{ $profesorMateria->profesor_apellido_p }} 
                                    {{ $profesorMateria->profesor_apellido_m }}, 
                                    imparte {{ $profesorMateria->nombre_materia }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>

            
            </div>
        </div>

        <div class="container">
        
           
        </div>


    </div>

</body>
</html>
