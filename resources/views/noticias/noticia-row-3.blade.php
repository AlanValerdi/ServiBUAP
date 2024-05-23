@extends('layouts.app-noticias-layout')
@section('title', 'Noticias BUAP')
@push('css')
    <style>
        .main-banner .banner-content {
            background-image: url({{ asset('assets/noticiasVarias/notivar3.png') }});
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
                                            <h4><em>Presenta Eduardo Rivera sus propuestas ante Consejo Universitario
                                                    BUAP</em>.
                                            </h4>
                                            <span>25/04/2024 </span>
                                            <p>
                                                <strong>La rectora Lilia Cedillo recordó el apoyo que brindó a la
                                                    universidad durante su gestión como alcalde de Puebla.</strong>.
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
                                <h4>Presenta Eduardo Rivera sus propuestas ante Consejo Universitario BUAP</h4>
                                <p>
                                    Como parte de las visitas que realizan los candidatos al gobierno del estado de Puebla,
                                    el H. Consejo Universitario escuchó las propuestas de Eduardo Rivera Pérez, de la
                                    coalición Mejor Rumbo para Puebla, quien agradeció a la Rectora María Lilia Cedillo
                                    Ramírez la apertura de la comunidad que encabeza, además de comprometerse a mejorar las
                                    vialidades aledañas a Ciudad Universitaria 2, en caso de ganar la elección.

                                    Al darle la bienvenida, la Rectora Lilia Cedillo Ramírez reconoció la cercanía del
                                    candidato Rivera Pérez con la BUAP, específicamente durante su gestión como presidente
                                    municipal de Puebla, al apoyar en los trámites para la construcción de Ciudad
                                    Universitaria 2.

                                    Durante su presentación, el aspirante del PAN, PRI, PRD y PSI -que conforman la
                                    coalición Mejor Rumbo para Puebla- indicó que 50 por ciento de los jóvenes en edad
                                    universitaria no ingresan a las instituciones de educación superior, por lo cual se
                                    comprometió a gestionar en la Cámara de Diputados un incremento de los recursos
                                    asignados a la Máxima Casa de Estudios en Puebla.

                                    Al ser cuestionado por integrantes del Consejo Universitario, aseguró que promoverá una
                                    plataforma de educación en línea y la exención de impuestos a las empresas que contraten
                                    a egresados, a fin de impulsar la empleabilidad. Asimismo, se pronunció por la
                                    vinculación con instituciones como la BUAP para concretar proyectos sociales de largo
                                    alcance.

                                    Eduardo Rivera Pérez ocupó por primera vez la presidencia municipal de Puebla en 2011 y
                                    fue electo en el cargo nuevamente en 2021; fue diputado federal en la Cámara de
                                    Diputados de 2000 a 2003, y coordinador del grupo parlamentario de Puebla. Maestro en
                                    Gestión Pública, también se ha desempeñado en la iniciativa privada y en la docencia
                                    como catedrático de la Maestría en Gobernanza y Comunicación Política de la George
                                    Washington University.
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
