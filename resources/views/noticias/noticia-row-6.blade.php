@extends('layouts.app-noticias-layout')
@section('title', 'Noticias BUAP')
@push('css')
    <style>
        .main-banner .banner-content {
            background-image: url({{asset('assets/noticiasVarias/notivar6.png')}});
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
                                            <h4><em>Ofrece Fernando Morales “autonomía financiera” para la BUAP</em>.
                                            </h4>
                                            <span>28/04/2024</span>
                                            <p>
                                                <strong> El candidato al gobierno de Puebla dijo que buscará la aprobación
                                                    del Congreso de Puebla,
                                                    para darle un 5 por ciento anual a la máxima casa de estudios.</strong>.
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
                                <h4>Ofrece Fernando Morales “autonomía financiera” para la BUAP</h4>
                                <p>
                                    La BUAP no puede estar al "contentillo" de ningún gobernador, “es la BUAP", pero le
                                    falta algo muy importante, la autonomía financiera, por eso, buscará la aprobación del
                                    Congreso del Estado de Puebla, para darle un 5 por ciento anual.

                                    Así lo aseguró el candidato a gobernador del estado de Puebla, Fernando Morales
                                    Martínez, por el partido Movimiento Ciudadano, “así será si soy gobernador, quiero la
                                    autonomía completa de la universidad”.

                                    La máxima casa de estudios del Estado de Puebla dijo que la institución tendrá más
                                    dinero para mejores salarios, mejores pensiones, mejor matricula y mejor innovación
                                    tecnológica, “lo que debe hacer un gobernador es entender que debe dar mayor educación y
                                    no politiquerías”.

                                    Recordó que, son 121 mil millones 500 mil pesos es el presupuesto que tiene el gobierno
                                    del Estado, es decir, hoy la BUAP, recibe el 2 por ciento del presupuesto, pero hoy, "si
                                    soy gobernador recibirían 6 mil millones con 600 mil pesos, 3 veces más de lo que
                                    actualmente reciben".

                                    Por eso, el aspirante a gobernador del partido naranja dijo que el presupuesto de la
                                    BUAP, estarían cerca de los 13 mil millones de pesos.

                                    Recordó que ya se hizo en el Estado de Jalisco donde se logró un acuerdo con el Congreso
                                    del Estado, que se incremente el presupuesto para su universidad estatal y eso es lo que
                                    se buscará que se aumente el presupuesto para la BUAP.

                                    “Le regresaré a mi alma mater lo que me ha dado, porque me tocó épocas de 120 alumnos en
                                    un salón”, por eso, el gobierno del Estado siempre recibe más presupuesto y ustedes
                                    recibirán igual, más presupuesto y con eso, será completamente autónoma y no dependerá
                                    de ninguna dádiva.

                                    Al darle la bienvenida a la BUAP, la rectora Lilia Cedillo Ramírez, le dijo al candidato
                                    a la gubernatura del Estado de Puebla, Fernando Morales Martínez, gracias por su amor a
                                    la institución, “esta es su casa, usted conoció a la BUAP cuando era un poquito
                                    diferente a los que es ahora”.

                                    Además, le dijo, “cuando uno se formó en la BUAP hace pocos años, se dan cuenta que han
                                    cambiado, cuando los asientos no eran suficientes, cuando recibir clases hincado, cuando
                                    los baños no tenían agua y mucho menos papel higiénico que, parecen épocas muy lejanas,
                                    pero sucedió hace pocos años”.
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
