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
        <a class="navbar-brand" href="#">SERVIBUAP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Impartir Materias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Calificar Alumnos</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <h1 class="text-center">Califica ya a tus alumnos</h1>
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
                    <br>
                {{-- Vista para visualizar los alumnos que meterion una materia con el profesor  autentificado --}}
                <h3 class="text-center">Alumnos a los que les imparte materias:</h3>
                <br>
                <div class="card card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre del Alumno</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Nombre de la Materia</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alumnos as $alumno)
                                <tr>
                                    <td>{{ $alumno->alumno_nombre }}</td>
                                    <td>{{ $alumno->alumno_apellido_p }}</td>
                                    <td>{{ $alumno->alumno_apellido_m }}</td>
                                    <td>{{ $alumno->nombre_materia }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            <form action="/calificarAlumno" method="POST">
                @csrf
                <div class="form-group">
                    <br>
                    <label for="profesor_materia">Califique a sus alumnos:</label>
                    <select class="form-control" id="profesor_materia" name="profesor_materia">
                        @foreach($alumnos as $alumno)
                            <option value="{{ $alumno->alumno_id }}_{{ $alumno->materia_id }}">
                                {{ $alumno->alumno_nombre }} {{ $alumno->alumno_apellido_p }} {{ $alumno->alumno_apellido_m }} - {{ $alumno->nombre_materia }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="calificacion">Calificación:</label>
                    <input type="number" class="form-control" id="calificacion" placeholder="min:0 max:10" name="calificacion" step="0.01" min="0" max="10" required>
                </div>
                <button type="submit" class="btn btn-primary">Calificar</button>
            </form>
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