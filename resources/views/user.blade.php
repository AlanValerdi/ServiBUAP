@extends('layouts.app-user-layout')
@section('title', 'ServiBUAP - Inicio')
@push('styles')
    <style>
        body {
            background-image: url({{asset('assets/userAssets/background.jpg')}});
            background-size: cover;
        }
    </style>
@endpush
@section('content')
    <div class="text-card">
        <h1><span>¡Ya formas parte de ServiBUAP!</span></h1>
        <p><span>Tu crendencial:</p>
    </div>
    <div class="card-container">
        <div class="card">
            <div class="card__inner">
                <div class="card__front" style="background: url({{asset('assets/userAssets/bg-card.jpg')}}); background-size: cover;">
                    <img src="{{asset('assets/userAssets/user-logo.jpg')}}" alt="Laplace" class="logo">
                    <div class="heading">
                        <h1 class="logo-buap"><strong>BUAP</strong></h1>
                        <ul class="subtitle">
                        <li>Benemerita</li>
                        <li>Universidad Autonoma</li>
                        <li>de Puebla</li>
                        </ul>
                    </div>
                    <div class="chip">
                        <div class="chip-line"></div>
                        <div class="chip-line"></div>
                        <div class="chip-line"></div>
                        <div class="chip-line"></div>
                        <div class="chip-main"></div>
                    </div>
                    <div class="card-info__bottom">
                        <div class="card-holder">{{Auth::user()->matricula}}</div>
                        <div class="card-holder">{{Auth::user()->name}} {{Auth::user()->name_p}} {{Auth::user()->name_m}}</div>
                        <div class="card-holder-university">Ingenieria en Tecnologias de la informacion</div>
                    </div>
                </div>

                <div class="card__back" style="background: url({{asset('assets/userAssets/bg2-card.jpg')}}); background-size: cover;">
                    <div class="card-strip"></div>
                    <div class="card-signature-wrapper">
                        <div class="card-signature-field">
                            <div class="card-signature-headline">Authorized Signature</div>
                            <div class="card-signature">{{Auth::user()->name}} {{Auth::user()->name_p}}</div>
                        </div>
                        <img src="{{asset('assets/userAssets/mastercard-logo.png')}}" alt="Laplace" class="logo-santander">
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-card-bottom">
        <p><span>Tambien te podria interesar:</p>
    </div>
    <div class="section-bottoms">
        <button class="button-52" role="button" onclick="window.location.href='{{route('user.show', ['option' => 'user-materias-dashboard'])}}'">Tomar materias</button>
        <button class="button-52" role="button" onclick="window.location.href='{{route('user.show', ['option' => 'user-grades-dashboard'])}}'">Mis Calificaciones</button>
    </div>
@endsection