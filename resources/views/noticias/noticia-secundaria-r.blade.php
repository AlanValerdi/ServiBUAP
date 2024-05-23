@extends('layouts.app-noticias-layout')
@section('title', 'Noticias BUAP')
@push('css')
    <style>
        .main-banner .banner-content {
            background-image: url({{asset('assets/noticia-secundaria2.png')}});
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
                    <a href="{{ route('home') }}">ServiBUAP</a>
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
                                            <h4><em>Reconoce rectora BUAP calidad que brinda la Facultad de
                                                    Estomatología</em>.
                                            </h4>
                                            <span>02/05/2024</span>
                                            <p>
                                                <strong>Lilia Cedillo refirió que tiene grandes compromisos con esta
                                                    facultad y se mostró satisfecha del rumbo que sigue.</strong>.
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
                                <h4>Rectora BUAP: preparatoria Benito Juárez forma jóvenes
                                    competitivos</h4>
                                <p>
                                    En el Segundo Informe de Labores del doctor Fernando de Jesús Martínez Arroniz, director
                                    de la Facultad de Estomatología, la Rectora María Lilia Cedillo Ramírez reconoció a esta
                                    unidad académica por la calidad y calidez que brinda a sus pacientes, y aseguró que su
                                    infraestructura y logros académicos la convierten en la más solicitada en Puebla, dentro
                                    de su área.

                                    “Cuando veo todos los logros en lo académico y en infraestructura me da mucho orgullo
                                    recordar que formé parte de esta facultad, un lugar donde di clases por primera vez y la
                                    cual se caracteriza por la calidad y la calidez con la que atienden a sus pacientes”.

                                    La Rectora de la BUAP refirió que tiene grandes compromisos con esta facultad y se
                                    mostró satisfecha del rumbo que sigue en la gestión del doctor Martínez Arroniz, a quien
                                    le reconoció compromiso y sensibilidad para atender las necesidades de su comunidad, a
                                    la cual él también formó parte.

                                    Fernando de Jesús Martínez inició su informe reconociendo a los 153 académicos de la
                                    Facultad de Estomatología, por su labor en materia de docencia e investigación. Dio
                                    cuenta de las acciones emprendidas por su administración en el último año, las cuales se
                                    enmarcan en los objetivos establecidos en el Plan de Desarrollo Institucional.

                                    Habló de los apoyos a profesores para acceder a congresos y actividades académicas en el
                                    exterior y de los intercambios realizados con instituciones de España, Argentina y
                                    Colombia. Asimismo, dijo que el Consejo de Unidad Académica se ha dado a la tarea de
                                    revisar sus lineamientos internos y participar en la elaboración de estrategias de
                                    seguridad para su comunidad.

                                    Martínez Arroniz destacó la estabilidad financiera, el mantenimiento de los equipos, la
                                    rehabilitación de la clínica de derechohabientes, la modificación de los espacios
                                    destinados a las farmacias y la inauguración del aula de simulación que beneficia a
                                    cerca de mil alumnos.

                                    La infraestructura adecuada y la calidad en la formación de recursos humanos son el
                                    mejor referente para fortalecer la vinculación con la sociedad, a través de servicios en
                                    diversas regiones del estado. En este sentido, indicó la realización de 79 jornadas de
                                    práctica profesional, con la atención bucal a 7 mil 991 pacientes. En la sede de la
                                    facultad, a nivel de licenciatura se atendieron a 35 mil pacientes, y los alumnos de
                                    posgrado realizaron 12 mil tratamientos.

                                    En materia de investigación, el director informó que cuentan con cinco cuerpos
                                    académicos y este último año publicaron más de 38 artículos en revistas con
                                    reconocimiento nacional e internacional, además de la revista Oral, un órgano de
                                    divulgación científica-clínica de esta unidad académica. Finalmente, agradeció el apoyo
                                    de la Rectora Lilia Cedillo y reconoció el esfuerzo de su equipo de trabajo y de los
                                    docentes, a quienes les recordó que lo más importante son los estudiantes.

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
