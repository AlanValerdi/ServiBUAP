@extends('layouts.app-noticias-layout')
@section('title', 'Noticias BUAP')
@push('css')
    <style>
        .main-banner .banner-content {
            background-image: url({{asset('assets/noticiasVarias/notivar2.png')}});
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
                                            <h4><em>Inicia en la BUAP el XXXIII Congreso Nacional de ANFADE</em>.
                                            </h4>
                                            <span>28/04/2024</span>
                                            <p>
                                                <strong>
                                                    Cerca de 90 instituciones se reúnen en el Salón Barroco del Edificio
                                                    Carolino
                                                    de la máxima casa de estudios.
                                                </strong>.
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
                                <h4>Inicia en la BUAP el XXXIII Congreso Nacional de ANFADE</h4>
                                <p>
                                    Con la participación de alrededor de 90 instituciones del país iniciaron los trabajos
                                    del XXXIII Congreso Nacional de la Asociación Nacional de Facultades, Escuelas de
                                    Derecho, Departamentos de Derecho e Institutos de Investigación Jurídica (ANFADE), en el
                                    Salón Barroco del Edificio Carolino, en el cual se discutirán los principales problemas
                                    en la enseñanza de esta disciplina y se reflexionará sobre un tema central: la
                                    administración de justicia y el Estado de Derecho.

                                    Al inaugurar este foro, la Rectora María Lilia Cedillo Ramírez deseó éxito en estos
                                    trabajos de vital importancia para la vida social, cuyas contribuciones abonan a
                                    construir sociedades con paz y armonía.

                                    “No podemos concebir sociedades alejadas de la impartición de justicia. Ustedes hacen
                                    posible esa armonía y que disfrutemos de democracias sólidas; ustedes son los guardianes
                                    de la justicia, confiamos en ese buen criterio y juicio para proteger los derechos más
                                    sagrados que tiene un individuo”, expresó.

                                    Por su parte, el presidente de la ANFADE, Máximo Carvajal Contreras refirió algunos
                                    planteamientos para fortalecer la impartición de justicia y el Estado de Derecho. A
                                    saber: que el Poder Judicial, del estado y la federación, goce de absoluta autonomía,
                                    para lo cual es importante que un porcentaje del Producto Interno Bruto se destine para
                                    su financiamiento; además, que la Suprema Corte de Justicia de la Nación tenga
                                    facultades para iniciar leyes y decretos en asuntos de su competencia, entre otras
                                    propuestas.

                                    En esta inauguración participaron también la directora de la Facultad de Derecho de la
                                    BUAP, Georgina Tenorio Martínez; y en representación del gobierno del estado, José
                                    Jiménez Flores, y del Ayuntamiento de Puebla, Lucero Saldaña Pérez.

                                    El XXXIII Congreso Nacional de la ANFADE tiene lugar los días 25 y 26 de abril. La
                                    conferencia magistral tendrá lugar este martes y estará a cargo de Luis María Aguilar
                                    Morales, ministro de la Suprema Corte de Justicia de la Nación; además, se realizarán
                                    cinco mesas de trabajo y una relatoría para elaborar la “Declaración de Puebla 2024”.
                                    Así también, en las asambleas generales ordinaria y extraordinaria se presentarán los
                                    informes de tesorería y presidencia de esta asociación, y se entregarán los premios a la
                                    Docencia e Investigación 2024 por parte de ANFADE.
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
