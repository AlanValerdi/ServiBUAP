<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Etiquetas comunes --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'ServiBUAP')</title>

    {{-- Bootstrap core CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Estilos Adicionales --}}
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/user.css')}}">
    @stack('styles')
</head>

<body>
    {{-- Seccion header --}}
    <header id="header">
        <div class="header-logo">
            <a href="index.html">ServiBUAP</a>
        </div>
        <button class="toggle-button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>
    </header>
    {{-- Fin seccion header --}}
    
    {{-- Seccion dashboard/tarjeta --}}
    @yield('content')
    {{-- Fin seccion dashboard/tarjeta --}}

    {{-- Seccion sidebar --}}
    <div id="sidebar">
        <div class="inner">
            {{-- Seccion logo --}}
            <section class="alt">
                <img src="{{asset('assets/serviBuap.png')}}" alt="ServiBUAP">
            </section>
            {{-- Menu --}}
            <nav id="menu">
                <ul>
                    <li><a href="{{route('home')}}">Inicio</a></li>
                    <li><a href="{{route('user')}}">Configuracion de cuenta</a></li>
                    <li>
                        <p>Seccion Autoservicios:</p>
                    </li>
                    <li>
                        <span class="opener">Sobre ti:</span>
                        <ul>
                            <li><a href="{{route('user.show', ['option' => 'user-teacher-dashboard'])}}">Mis profesores</a></li>
                            <li><a href="{{route('user.show', ['option' => 'user-grades-dashboard'])}}">Mis calificaciones</a></li>
                            <li><a href="{{route('user.show', ['option' => 'user-schedule-dashboard'])}}">Mi horario</a></li>
                        </ul>
                    </li>
                    <li>
                        <form action="/logout" method="Post"> 
                            @csrf <a href="#" onclick="this.closest('form').submit()" style="color:Red">Salir de la sesion</a>
                        </form>
                    </li>
                </ul>
            </nav>
            {{-- Fin de Barra Lateral --}}

            {{-- Seccion "Te puede interesar" --}}
            <div class="featured-posts">
                <div class="heading">
                    <h2>Te puede interesar:</h2>
                </div>
                <div class="owl-carousel owl-theme">
                    <a href="{{route('noticias.show', ['noticia' => 'noticia-row-5'])}}">
                        <div class="featured-item">
                            <img src="{{asset('assets/noticiasVarias/notivar5.png')}}" alt="featured one">
                            <p>Seguridad, traslado y servicios garantizados en CU2: rectora BUAP.</p>
                        </div>
                    </a>
                    <a href="{{route('noticias.show', ['noticia' => 'noticia-row-1'])}}">
                        <div class="featured-item">
                            <img src="{{asset('assets/noticiasVarias/notivar1.png')}}" alt="featured two">
                            <p>Lilia Cedillo: "Preparatoria Benito Juárez forma jóvenes competitivos".</p>
                        </div>
                    </a>
                    <a href="{{route('noticias.show', ['noticia' => 'noticia-row-2'])}}">
                        <div class="featured-item">
                            <img src="{{asset('assets/noticiasVarias/notivar2.png')}}" alt="featured three">
                            <p>Lilia Cedillo reconoce la calidad que brinda la Facultad de Estomatología.</p>
                        </div>
                    </a>
                </div>
            </div>
            {{-- Fin de Seccion "Te puede interesar" --}}

            {{-- Footer --}}
            <footer id="footer">
                <p class="copyright">Copyright &copy; 2024 Desarrollo de Sitios Web
                    <br>Diseñado por <a rel="nofollow" href="https://www.instagram.com/alan_valerdi/">Alan
                        Valerdi</a>
                </p>
            </footer>
            {{-- Fin seccion Footer --}}

        </div>
    </div>

    {{-- Fin Seccion sidebar --}}

    {{-- Scripts --}}
    <script src="{{asset('js/funcionalidad.js')}}"></script>
</body>
</html>





