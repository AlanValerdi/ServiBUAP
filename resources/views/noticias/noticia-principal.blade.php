@extends('layouts.app-noticias-layout')
@section('title', 'Noticias BUAP')
@push('css')
    <style>
        .main-banner .banner-content {
            background-image: url({{ asset('assets/noticia-principal.jpg') }});
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
@endpush

@section('content')
    <div id="main">
        <div class="inner">
            <!-- Header -->
            <header id="header">
                <div class="logo">
                    <a href="{{route('home')}}">ServiBUAP</a>
                </div>
                <button class="toggle-button">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
            </header>
            <!-- Seccion Noticias -->
            <!-- Seccion principal -->
            <section class="main-banner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="banner-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="banner-caption">
                                            <h4><em>Avance de Obra</em> en Ciudad Universitaria BUAP 2 es del
                                                <em>82%</em>.
                                            </h4>
                                            <span>05/05/2024</span>
                                            <p>
                                                Se construyen siete edificios: Tres <strong>multiaulas</strong>, dos
                                                <strong>multilaboratorios</strong>,
                                                uno <strong>administrativo</strong> y un <strong>laboratorio de
                                                    ciencias</strong>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Fin de seccion principal  -->

            <!-- Seccion noticias -->
            <!-- Seccion noticia-secundaria-derecha -->
            <section class="right-image">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="left-content">
                                <h4>Lilia Cedillo reconoce la calidad que brinda la Facultad de Estomatología</h4>
                                <p>
                                    La construcción de Ciudad Universitaria 2 (CU2) registra un avance de obra del 85 por
                                    ciento, lo que permite asegurar el inicio de sus actividades académicas en agosto
                                    próximo, con una matrícula estimada de 5 mil alumnos de nuevo ingreso, correspondiente
                                    al periodo 2024-2025, en 28 programas de licenciatura en Ingenierías y Ciencias Exactas,
                                    y Ciencias Naturales y de la Salud, así como 10 posgrados.

                                    En esta primera etapa del nuevo campus se construyen siete edificios: tres multiaulas de
                                    tres niveles cada uno, los cuales albergan 25 aulas, una sala de maestros y tres
                                    cubículos; dos multilaboratorios, también de tres niveles, con laboratorios de
                                    Electrónica Digital, Metrología Electrónica, Cómputo y Física Virtual.

                                    Además, un inmueble para oficinas de la Dirección General de Cómputo y Tecnologías de la
                                    Información y Comunicaciones, cubículos para docentes y biblioteca; y un laboratorio de
                                    ciencias de dos niveles para las áreas de Química, Físico-Química, Automotriz, Biología,
                                    Química Orgánica, Física, Biología Celular y Bioquímica, Ingeniería Sustentable y
                                    Química Analítica.

                                    En la construcción de estos siete edificios se consideran criterios ambientales para la
                                    conservación de los recursos naturales y servicios ecosistémicos de la región. Para
                                    ello, contarán con paneles solares en las azoteas para la iluminación y cisternas de
                                    agua potable y pluvial. En sus fachadas se instalará una piel a base de textiles
                                    verticales para mitigar la entrada de calor y luz directa.

                                    La edificación de los tres multiaulas se basa en el modelo Aula del Futuro de la Unión
                                    Europea y the Smart Classroom Project. Por su parte, los laboratorios
                                    multidisciplinarios permitirán que los estudiantes investiguen con tecnología,
                                    materiales y equipo adecuados, lo cual redundará en el desarrollo de sus habilidades.

                                    Cabe mencionar que en el transcurso del año se construirán dos edificios de
                                    multitalleres, un edificio de multilaboratorios de Cómputo y un edificio
                                    multilaboratorios de Ingenierías, así como vialidades principales para transporte y
                                    andadores peatonales con cubiertas metálicas.

                                    Esta nueva sede de la BUAP, que permitirá atender la creciente demanda educativa y
                                    resolver limitantes que existen en espacios para el trabajo multidisciplinario, tiene
                                    como objetivo convertirse en el centro de formación de recursos humanos en Ingenierías y
                                    Ciencias Naturales más importante de la región centro-sur del país.

                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 image-container">
                            <img src="{{ asset('assets/bkg-columna.jpg') }}" alt="" class="bkg-columna">
                            <img src="{{ asset('assets/serviBuap.png') }}" alt="Logo" class="logoColumn">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Fin de Seccion noticia-secundaria-derecha -->
        </div>
    </div>
@endsection
