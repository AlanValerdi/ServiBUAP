@extends('layouts.app-noticias-layout')
@section('title', 'Noticias BUAP')
@push('css')
    <style>
        .main-banner .banner-content {
            background-image: url({{ asset('assets/noticiasVarias/notivar5.png') }});
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
                                            <h4><em>Seguridad, traslado y servicios garantizados en CU2: rectora BUAP</em>.
                                            </h4>
                                            <span> 23/04/2024</span>
                                            <p>
                                                <strong>Lilia Cedillo aseguró que los estudiantes contarán con el Sistema de
                                                    Transporte Universitario.</strong>.
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
                                <h4>Seguridad, traslado y servicios garantizados en CU2: rectora BUAP</h4>
                                <p>
                                    La rectora de la BUAP, Lilia Cedillo Ramírez, aseguró que, trabajan con mucho cuidado
                                    con los detalles que se requieran para garantizar que los jóvenes y profesores que
                                    lleguen a CU2 tengan la seguridad, los traslados y los servicios que necesitan dentro
                                    del campus.

                                    Por eso, garantizarán que a los maestros y alumnos tengan salidas del Sistema de
                                    Transporte universitario (STU) de CU San Manuel a CU2, lo que es primordial porque es
                                    una preocupación de los papás por aspectos económicos, que es una carga más aumentar uno
                                    o dos transportes al día, además que van seguros.

                                    Dijo, “va a haber sistema de transporte universitario gratuito saliendo de CU San Manuel
                                    cada 15 minutos y además en horas pico saldrán más frecuentemente y los profesores
                                    también tendrán un sistema de transporte gratuito saliendo de CU San Manuel a CU2 y los
                                    van a regresar también cada 15 minutos”.

                                    Además, para dar tranquilidad a los padres de familia, dijo que, los horarios de clases
                                    ya los tienen y está la programación que ingresen a las 8 de la mañana y el último grupo
                                    saldrá a las 6 de la tarde, cuando todavía con luz del sol para que se sientan más
                                    seguros y sus padres estén más tranquilos.

                                    Asimismo, la administradora central de la BUAP señaló que, dentro del campus
                                    universitario en CU2 tendrán todos los servicios que requieran tanto de papelería y de
                                    insumos inherentes a su profesión.

                                    Por eso, van a tener una tienda de conveniencia adentro, por eso, no van a tener a que
                                    salir, “van a estar en un ambiente seguro que estarán bajo el resguardo de la
                                    universidad dentro del campus universitario, vamos a recibir con todo el gusto a los
                                    jóvenes que se volverán universitarios en fechas próximas”.

                                    Cabe mencionar que, la máxima casa de estudios del Estado de Puebla también tiene
                                    considerado instalar una sede de la Dirección de Administración Escolar (DAE) en CU2,
                                    para que los estudiantes de las diferentes licenciaturas que se instalarán allá no
                                    tengan que trasladarse a CU San Manuel.

                                    Lo que buscan con todo eso, es que se sientan que tienen todo a la mano y que no están
                                    alejados, que están cercanos a todos los servicios, con instalaciones nuevas, con los
                                    talleres y laboratorios con equipos nuevos, además, serán la primera generación allá.

                                    Desde su perspectiva, la rectora de la BUAP dijo que, eso los va a marcar, porque ya ha
                                    tenido oportunidad de platicar con gente que fueron la primera generación en San Manuel
                                    y se sienten muy orgullosos.

                                    Por eso, ahora que ya son gente mayor, comentan con emoción que fueron primera
                                    generación, por eso, la universidad estatal poblana trabaja muy fuerte por todos los
                                    estudiantes.

                                    Además, reveló que en CU2, habrá actividades deportivas con cancha multiusos,
                                    actividades culturales y recreativas, además de talleres culturales, para darles todos
                                    los servicios que se tienen en CU san Manuel.

                                    “Todas las facilidades que tienen en San Manuel también las tendrán allá”, por eso,
                                    aprovechó para aclarar que, los chicos que ingresaron hasta 2023 terminan sus estudios
                                    en CU San Manuel y los que ingresan a partir de 2024 ya lo hacen en CU2.
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
