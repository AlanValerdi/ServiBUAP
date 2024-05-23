@extends('layouts.app-noticias-layout')
@section('title', 'Noticias BUAP')
@push('css')
    <style>
        .main-banner .banner-content {
            background-image: url({{ asset('assets/noticiasVarias/notivar4.png') }});
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
                                            <h4><em>Eduardo Rivera se compromete en BUAP a elevar niveles de competitividad
                                                    en Puebla</em>.
                                            </h4>
                                            <span>28/04/2024</span>
                                            <p>
                                                <strong>Ante la rectora Lilia Cedillo, dijo que se pavimentarán todas las
                                                    calles de CU2 y trabajará para incrementar el presupuesto federal a la
                                                    universidad.</strong>.
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
                                <h4>Eduardo Rivera se compromete en BUAP a elevar niveles de competitividad
                                    en Puebla</h4>
                                <p>
                                    El candidato a gobernador de un "Mejor Rumbo para Puebla", Eduardo Rivera Pérez, recordó
                                    que el estado, en todos los sectores, ha descendido cuatro puntos, como en
                                    competitividad, seguridad, salud, sector primario, anclaje de inversiones, ecología y en
                                    infraestructura básica. Además, en la presentación de sus propuestas a alumnos y
                                    catedráticos de la BUAP, se comprometió con la rectora Lilia Cedillo a pavimentar todas
                                    las calles de CU2 y a trabajar para incrementar el presupuesto federal a la universidad.

                                    Indicó que un estado más "chiquito" que el territorio de Puebla capital, como
                                    Aguascalientes se encuentra con mejores índices de competitividad y mejor desarrollo
                                    económico que el estado de Puebla, que ahora ocupa el lugar 22.

                                    "A mí no me gusta eso, a mí me molesta eso, sí; y necesitamos sacar esta fuerza y este
                                    talento que tenemos en Puebla con diferentes capacidades para poderla llevar a los
                                    primeros lugares. No tengo nada en contra de Aguascalientes. Es más la gobernadora Tere
                                    es de mi partido".

                                    En caso de llegar a ser gobernador de Puebla, después del primer domingo de junio, se
                                    comprometió ante la comunidad universitaria a llevar a Puebla al top ten de los estados
                                    de México con mayores índices de productividad en todos los sectores.

                                    Pero, recordó que el primer reto de su primera gestión fue el de la gobernabilidad,
                                    derivado de la tórrida relación con el exgobernador, Rafael Moreno Valle Rosas, aunque
                                    con diálogo logró dar resultados positivos.

                                    "Como bien mencionas (respondió a una alumna) fueron distintos periodos y distintas
                                    épocas. El reto más complejo que podría decir de la primera etapa fue el tema de la
                                    gobernabilidad y la coordinación entre las autoridades. No fue fácil la relación con el
                                    gobernador del estado Rafael Moreno Valle, en ese entonces; me tocó tener dos
                                    presidentes de la República el presidente Felipe Calderón y el presidente Enrique Peña,
                                    pero siempre se privilegió el diálogo".

                                    Recordó a los estudiantes de la BUAP que, al privilegiar el diálogo, logró realizar
                                    varias avenidas de concreto hidráulico en diferentes zonas de la metrópoli, pero también
                                    construyó mil nuevas calles en diferentes sectores del municipio, además de todos los
                                    programas sociales para atender las demandas de la población.

                                    Rivera Pérez insistió que, entre sus propuestas, están las "tarjetas de salud contigo"
                                    con las que las personas sin seguridad social podrán acceder a realizarse tomografías,
                                    rayos x y diferentes consultas para detectar algunas enfermedades o para que los
                                    pacientes sanen.

                                    Valoró que durante su segunda gestión, al frente del principal municipio de Puebla,
                                    logró atender gratuitamente a más de 400 pacientes con cataratas en los ojos para que
                                    nuevamente los beneficiarios se valgan por ellos mismos. Aseguró que el seguro popular
                                    que desapareció sí funcionó.

                                    Rivera Pérez también dio su palabra a las y los chicos universitarios a instalar cámaras
                                    de vídeo-vigilancia en los sectores más transitados por estudiantes y profesores, no
                                    solo de la Benemérita Universidad Autónoma de Puebla (BUAP), sino de todas las
                                    instituciones educativas para mejorar la seguridad.

                                    Dijo que trabajará en atraer nuevas empresas, creará nuevos parques industriales, sin
                                    olvidar los existentes para que venga la nueva tecnología y los jóvenes que ahora
                                    estudian diferentes carreras dedicadas a la tecnología tengan la oportunidad de
                                    encontrar un trabajo.

                                    A los jóvenes interesados en el sector turístico, ofreció atraer inversiones de otros
                                    países pero sobre todo de la iniciativa privada poblana y nacional para comenzar a
                                    detonar verdaderamente a este sector tanto en las Sierras Norte y Nororiental, como en
                                    la propia Mixteca.

                                    Recapituló, como un gobernador demócrata que será, después del proceso electoral del
                                    primer domingo de junio, no impondrá sus ideas ideología creencias. Pero lo único que sí
                                    impondrá es un trabajo ordenado y conjunto, con estrategia entre los 217 municipios para
                                    sacar a Puebla del atolladero a donde la han sumergido.

                                    La rectora Lilia Cedillo agradeció a Rivera Pérez la cercanía con la que siempre trabajó
                                    cuando fue presidente municipal para mejorar los alrededores de los diferentes campos de
                                    la BUAP.

                                    Priorizó que el trabajo se enfocó también en mejorar la seguridad de las diferentes
                                    unidades académicas de la universidad.

                                    Acentuó que que la administración municipal también otorgó fluidez para otorgar los
                                    permisos para la generación de CU2.



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
