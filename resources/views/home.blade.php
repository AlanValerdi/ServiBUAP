@extends('layouts.app-noticias-layout')
@section('title', 'ServiBUAP - Inicio')

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
                                                <em>82%</em>.</h4>
                                            <span>05/05/2024</span>
                                            <p>
                                                Se construyen siete edificios: Tres <strong>multiaulas</strong>, dos
                                                <strong>multilaboratorios</strong>,
                                                uno <strong>administrativo</strong> y un <strong>laboratorio de
                                                    ciencias</strong>.
                                            </p>
                                            <div class="primary-button">
                                                <a href="{{route('noticias.show', ['noticia' => 'noticia-principal'])}}">Leer más</a>
                                            </div>
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

            <div class="row tm-row">
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="{{route('noticias.show', ['noticia' => 'noticia-row-1'])}}" class="news-section">
                        <div>
                            <img src="{{asset('assets/noticiasVarias/notivar1.png')}}" alt="NoticiaImg">
                        </div>
                        <h2>Inaugura rectora Lilia Cedillo Primer Encuentro de Diseño DiBuap 2024</h2>
                    </a>
                    <p>
                        Celebrado de forma gratuita en la Unidad de Seminarios de Ciudad Universitaria,
                        estuvo encabezado por la rectora Lilia Cedillo.
                    </p>
                    <div class="d-flex justify-content-between">
                        <span class="tm-color-primary">Intolerancia Radio</span>
                        <span class="tm-color-primary">28/04/2024</span>
                    </div>
                    <hr>
                </article>

                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="{{route('noticias.show', ['noticia' => 'noticia-row-2'])}}" class="news-section">
                        <div>
                            <img src="{{asset('assets/noticiasVarias/notivar2.png')}}"alt="NoticiaImg">
                        </div>
                        <h2>Inicia en la BUAP el XXXIII Congreso Nacional de ANFADE</h2>
                    </a>
                    <p>
                        Cerca de 90 instituciones se reúnen en el Salón Barroco del Edificio Carolino
                        de la máxima casa de estudios.
                    </p>
                    <div class="d-flex justify-content-between">
                        <span class="tm-color-primary">Intolerancia Radio</span>
                        <span class="tm-color-primary">27/04/2024</span>
                    </div>
                    <hr>
                </article>

                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="{{route('noticias.show', ['noticia' => 'noticia-row-3'])}}" class="news-section">
                        <div>
                            <img src="{{asset('assets/noticiasVarias/notivar3.png')}}" alt="NoticiaImg">
                        </div>
                        <h2>Presenta Eduardo Rivera sus propuestas ante Consejo Universitario BUAP</h2>
                    </a>
                    <p>
                        La rectora Lilia Cedillo recordó el apoyo que brindó a la universidad durante
                        su gestión como alcalde de Puebla.
                    </p>
                    <div class="d-flex justify-content-between">
                        <span class="tm-color-primary">Intolerancia Radio</span>
                        <span class="tm-color-primary">25/04/2024</span>
                    </div>
                    <hr>
                </article>

                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="{{route('noticias.show', ['noticia' => 'noticia-row-4'])}}" class="news-section">
                        <div>
                            <img src="{{asset('assets/noticiasVarias/notivar4.png')}}" alt="NoticiaImg">
                        </div>
                        <h2>Eduardo Rivera se compromete en BUAP a elevar niveles de competitividad en Puebla</h2>
                    </a>
                    <p>
                        Ante la rectora Lilia Cedillo, dijo que se pavimentarán todas las calles de CU2
                        y trabajará para incrementar el presupuesto federal a la universidad.
                    </p>
                    <div class="d-flex justify-content-between">
                        <span class="tm-color-primary">Intolerancia Radio</span>
                        <span class="tm-color-primary">24/04/2024</span>
                    </div>
                    <hr>
                </article>

                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="{{route('noticias.show', ['noticia' => 'noticia-row-5'])}}" class="news-section">
                        <div>
                            <img src="{{asset('assets/noticiasVarias/notivar5.png')}}" alt="NoticiaImg">
                        </div>
                        <h2>Seguridad, traslado y servicios garantizados en CU2: rectora BUAP</h2>
                    </a>
                    <p>
                        Lilia Cedillo aseguró que los estudiantes contarán con el Sistema de Transporte
                        Universitario.
                    </p>
                    <div class="d-flex justify-content-between">
                        <span class="tm-color-primary">Intolerancia Radio</span>
                        <span class="tm-color-primary"> 23/04/2024</span>
                    </div>
                    <hr>
                </article>

                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="{{route('noticias.show', ['noticia' => 'noticia-row-6'])}}" class="news-section">
                        <div>
                            <img src="{{asset('assets/noticiasVarias/notivar6.png')}}"alt="NoticiaImg">
                        </div>
                        <h2>Ofrece Fernando Morales “autonomía financiera” para la BUAP</h2>
                    </a>
                    <p>
                        El candidato al gobierno de Puebla dijo que buscará la aprobación del Congreso de Puebla,
                        para darle un 5 por ciento anual a la máxima casa de estudios.
                    </p>
                    <div class="d-flex justify-content-between">
                        <span class="tm-color-primary">Intolerancia Radio</span>
                        <span class="tm-color-primary">25/04/202</span>
                    </div>
                    <hr>
                </article>

            </div>

            <!-- Seccion noticia-secundaria-izquierda -->
            <section class="left-image">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('assets/noticia-secundaria1.png')}}" alt="noticiaSecundaria1">
                        </div>
                        <div class="col-md-6">
                            <div class="right-content">
                                <h4>Lilia Cedillo: "Preparatoria Benito Juárez forma jóvenes competitivos"</h4>
                                <p>
                                    Desde su creación, la Preparatoria Benito Juárez García de la BUAP es una
                                    escuela que se
                                    caracteriza por su nivel académico,
                                    logros deportivos y participación en actividades culturales, aspectos que se
                                    traducen en
                                    la formación de jóvenes competitivos,
                                    disciplinados y emprendedores, aseveró la Rectora María Lilia Cedillo Ramírez.
                                    Al presidir el Segundo Informe de Labores de Hilda Ocaña Meléndez, directora de
                                    esta
                                    unidad académica, la doctora Cedillo señaló
                                    que esta preparatoria atiende las necesidades de su entorno, por lo que es un
                                    referente en
                                    el nivel medio superior.
                                    “En esta preparatoria han egresado muchas generaciones y continúa liderando el
                                    ingreso de
                                    estudiantes de secundaria”.
                                    <br>
                                </p>
                                <p>
                                    02/05/2024
                                </p>
                                <div class="primary-button">
                                    <a href="{{route('noticias.show', ['noticia' => 'noticia-secundaria-i'])}}">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Fin de Seccion noticia-secundaria-izquierda -->

            <!-- Seccion noticia-secundaria-derecha -->
            <section class="right-image">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="left-content">
                                <h4>Lilia Cedillo reconoce la calidad que brinda la Facultad de Estomatología</h4>
                                <p>
                                    En el Segundo Informe de Labores del doctor Fernando de Jesús Martínez Arroniz,
                                    director
                                    de la Facultad de Estomatología, la Rectora
                                    María Lilia Cedillo Ramírez reconoció a esta unidad académica por la calidad y
                                    calidez que
                                    brinda a sus pacientes, y aseguró que su
                                    infraestructura y logros académicos la convierten en la más solicitada en
                                    Puebla, dentro
                                    de su área.
                                    “Cuando veo todos los logros en lo académico y en infraestructura me da mucho
                                    orgullo
                                    recordar que formé parte de esta facultad,
                                    un lugar donde di clases por primera vez y la cual se caracteriza por la calidad
                                    y la
                                    calidez con la que atienden a sus pacientes”.
                                    <br>
                                </p>
                                <p>
                                    30/04/2024
                                </p>
                                <div class="primary-button">
                                    <a href="{{route('noticias.show', ['noticia' => 'noticia-secundaria-r'])}}">Leer más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('assets/noticia-secundaria2.png')}}" alt="noticiaSecundaria2">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Fin de Seccion noticia-secundaria-derecha -->
        </div>
    </div>
@endsection