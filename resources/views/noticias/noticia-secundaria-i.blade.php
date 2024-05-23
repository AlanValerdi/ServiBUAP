@extends('layouts.app-noticias-layout')
@section('title', 'Noticias BUAP')
@push('css')
    <style>
        .main-banner .banner-content {
            background-image: url({{ asset('assets/noticia-secundaria1.png') }});
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
                                            <h4><em>Rectora BUAP: preparatoria Benito Juárez forma jóvenes
                                                    competitivos</em>.
                                            </h4>
                                            <span>02/05/2024</span>
                                            <p>
                                                <strong>Rectora BUAP: preparatoria Benito Juárez forma jóvenes
                                                    competitivos</strong>.
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
                                    Desde su creación, la Preparatoria Benito Juárez García de la BUAP es una escuela que se
                                    caracteriza por su nivel académico, logros deportivos y participación en actividades
                                    culturales, aspectos que se traducen en la formación de jóvenes competitivos,
                                    disciplinados y emprendedores, aseveró la Rectora María Lilia Cedillo Ramírez.

                                    Al presidir el Segundo Informe de Labores de Hilda Ocaña Meléndez, directora de esta
                                    unidad académica, la doctora Cedillo señaló que esta preparatoria atiende las
                                    necesidades de su entorno, por lo que es un referente en el nivel medio superior. “En
                                    esta preparatoria han egresado muchas generaciones y continúa liderando el ingreso de
                                    estudiantes de secundaria”.

                                    De igual manera, reconoció la labor de los docentes, quienes dotan a los alumnos de
                                    capacidades y habilidades para su ingreso a la licenciatura, además de brindar apoyo
                                    emocional en esta etapa de su vida en la que atraviesan momentos críticos, personales y
                                    familiares.

                                    Por otra parte, la Rectora Lilia Cedillo se comprometió a atender las necesidades de
                                    esta unidad académica, en cuanto a movilidad e infraestructura, con el fin de mejorar la
                                    preparación de los estudiantes.

                                    En la presentación de su informe, Hilda Ocaña Meléndez refirió que en la Preparatoria
                                    Benito Juárez 92 docentes atienden una matrícula de más de mil estudiantes, la
                                    eficiencia terminal es de 84.34 por ciento, 27 profesores tienen becas al desempeño
                                    profesional docente, 31 alumnas recibieron becas TecnoLochicas y otros estudiantes 10
                                    becas alimentarias. Por otra parte, hay un registro de 37 lobomentores, 19 prestadores
                                    de servicio social, ocho de prácticas profesionales y 36 estudiantes se capacitan para
                                    acudir a jornadas de alfabetización.

                                    En las actividades del último año, mencionó la realización de 10 sesiones del Consejo de
                                    Unidad Académica, jornada de capacitación docente en igualdad y género, difusión del
                                    protocolo para erradicar violencia de género, entrega de uniformes a selectivos
                                    deportivos y la emisión de convocatorias internas para la participación de las academias
                                    en el empoderamiento de las mujeres.

                                    Asimismo, señaló la adquisición de pantallas y bancas zurdas y diestras, la habilitación
                                    del bebedero y cafetería, colocación de rampas y construcción de una escalera de
                                    emergencia, baño mixto, lavamanos para personas con discapacidad y palapas.

                                    En investigación, Ocaña Meléndez dio a conocer el desarrollo de 18 proyectos, entre
                                    éstos, la creación de un huerto frutal y cuidado de ejemplares en peligro de extinción,
                                    principalmente cactáceas, donados por el Jardín Botánico Universitario. Igualmente,
                                    comentó la obtención de primeros lugares en la Universiada 2023 y otros torneos
                                    deportivos, así como la participación de docentes en el diseño curricular de programas
                                    de estudio.

                                    “Es posible trabajar en equipo y dar buenos resultados, para brindar una educación de
                                    calidad y con compromiso social. Somos un gran equipo, gracias por confiar. Seguiremos
                                    trabajando para enaltecer a la institución”, expresó.

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
