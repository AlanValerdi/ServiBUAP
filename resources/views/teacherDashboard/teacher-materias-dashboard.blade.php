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
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: rgb(30, 75, 182);">
        <a class="navbar-brand" href="{{route('home-teacher')}}">SERVIBUAP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home-teacher')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('teacher')}}">Configuración de cuenta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('teacher.show', ['option' => 'teacher-materias-dashboard'])}}">Impartir Materias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('teacher.show', ['option' => 'teacher-grades-dashboard'])}}">Calificar Alumnos</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <h1 class="text-center">Empieza tu trayectoria como profesor</h1>
    <br>
    <div class="container">
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
        

        <div class="row justify-content-center">
            <div class="col-md-8">
                <button id="toggleButton" class="btn btn-primary mb-3">Mostrar materias que se pueden impartir este semestre</button>

                <table class="table" id="materiasTable" style="display: none;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materias as $materia)
                            <tr>
                                <th scope="row">{{ $materia->id }}</th>
                                <td>{{ $materia->nombre_materia }}</td>
                            
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="teacher-materias-dashboard" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="profesor_id">Profesor:</label>
                        <select class="form-control" id="profesor_id" name="profesor_id">
                            <option value="{{ auth()->user()->id }}">
                                {{ auth()->user()->name }} 
                                {{auth()->user()->name_p}}
                                {{auth()->user()->name_m}}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="materia_id">Por favor eliga la materia que va a impartir:</label>
                        <select class="form-control" id="materia_id" name="materia_id">
                            @foreach ($materias as $materia)
                                <option value="{{ $materia->id }}">{{ $materia->nombre_materia }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
                
                <h4><br>Estas son las materias que vas a impartir</h4>

                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th scope="col">ID de la materia</th>
                            <th scope="col">Nombre de la Materia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profesorMateria as $materiaProfesor)
                            @if ($materiaProfesor->materia)
                                <tr>
                                    <th scope="row">{{ $materiaProfesor->materia->id }}</th>
                                    <td>{{ $materiaProfesor->materia->nombre_materia }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>

                {{-- Formulario eliminar --}}
                <h4><br>¿Te equivocaste?, elimina la materia que no quieras:</h4>
                <form action="teacher-materias-dashboard" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                        <label for="materia_id">Materia a eliminar:</label>
                        <select class="form-control" id="materia_id" name="materia_id">
                            @foreach ($profesorMateria as $materiaProfesor)
                                @if ($materiaProfesor->materia)
                                    <option value="{{ $materiaProfesor->materia->id }}">{{ $materiaProfesor->materia->nombre_materia }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('toggleButton').addEventListener('click', function() {
            var table = document.getElementById('materiasTable');
            if (table.style.display === "none") {
                table.style.display = "table";
            } else {
                table.style.display = "none";
            }
        });
    </script>
</body>
</html>