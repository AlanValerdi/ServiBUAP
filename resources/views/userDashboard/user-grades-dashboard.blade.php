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
                    <a class="nav-link" href="#">Configuración de cuenta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tomar materias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mis calificaciones</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <h1 class="text-center">Kardex</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                {{-- Horario --}}
                <h3 class="text-center">Calificacion final:</h3>
                <div class="card card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Materia</th>
                                <th>Calificación</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($calificaciones as $calificacion)
                                <tr>
                                    <td>{{ $calificacion->nombre }}</td>
                                    <td>{{ $calificacion->apellido_p }}</td>
                                    <td>{{ $calificacion->apellido_m }}</td>
                                    <td>{{ $calificacion->nombre_materia }}</td>
                                    <td>{{ $calificacion->calificacion_total }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              
            </div>
        </div>

    </div>

</body>
</html>

