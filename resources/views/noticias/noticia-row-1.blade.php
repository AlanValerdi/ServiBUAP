@extends('layouts.app-noticias-layout')
@section('title', 'Noticias BUAP')
@push('css')
    <style>
        .main-banner .banner-content {
            background-image: url({{asset('assets/noticiasVarias/notivar1.png')}});
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
                                            <h4><em>Inaugura rectora Lilia Cedillo Primer Encuentro de Diseño DiBuap
                                                    2024</em>.
                                            </h4>
                                            <span>28/04/2024</span>
                                            <p>
                                                <strong>Celebrado de forma gratuita en la Unidad de Seminarios de Ciudad
                                                    Universitaria, estuvo encabezado por la rectora Lilia Cedillo</strong>.
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
                                <h4>Inaugura rectora Lilia Cedillo Primer Encuentro de Diseño DiBuap 2024</h4>
                                <p>
                                    Al inaugurar el Primer Encuentro de Diseño DiBuap 2024, la Rectora María Lilia Cedillo
                                    Ramírez consideró que esta área es una de las formas más efectivas de comunicar sin
                                    recurrir a las palabras, ya que con sus líneas y colores, puede transmitir distintos
                                    mensajes y despertar entusiasmo y alegría en el espectador.

                                    “Conocí a grandes diseñadores en la universidad. Para mí, el diseño es parte de esa
                                    comunicación sin palabras, que se requiere para muchos temas, desde lo más delicados
                                    hasta aquellos que nos invitan a valorar con alegría la cultura, así de efectiva es su
                                    comunicación”, consideró.

                                    El Primer Encuentro de Diseño DiBuap 2024, celebrado de forma gratuita en la Unidad de
                                    Seminarios de Ciudad Universitaria, congregó a profesionales del área como Juan
                                    Xolocotzi de la empresa Markísima; Jorge Garnica; “Jony Tentáculos”; Mirari Chan; o José
                                    M. Morelos, director del Instituto de Artes Plásticas de la Universidad Veracruzana,
                                    entre otros ponentes que compartieron sus experiencias, así como los retos tecnológicos
                                    de esta disciplina.

                                    En el acto estuvo presente la doctora Mariana Vaquero Martínez, directora del Complejo
                                    Regional Sur, quien agradeció el apoyo que brindó la doctora Cedillo a este encuentro
                                    que rinde tributo a la imaginación y permite vislumbrar otros mundos. También
                                    participaron los maestros José Daniel Arenas Balderas y Sebastián Eduardo Condado
                                    Picazo, del Centro de Innovación y Creatividad de la BUAP.


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
