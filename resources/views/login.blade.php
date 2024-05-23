<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login-ServiBUAP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Mulish&display=swap"
            rel="stylesheet"
        >
        <link rel="stylesheet" href="{{asset('css/reglog.css')}}">
    </head>
    <body>
        <div class="login-wrapper">
            <div class="login-side">
                <a href="#" title="Logo">
                    <img class="logo" src="assets/serviBuap.png" alt="Logo">
                </a>
                <div class="my-form__wrapper">
                    <div class="login-welcome-row">
                        <h1>Bienvenido de vuelta 👋</h1>
                        <p>Por favor ingresa tus datos para acceder a la comunidad de serviBUAP</p>
                    </div>
                    <form method="POST" class="my-form">
                        @csrf
                        <div class="divider">
                            <div class="divider-line"></div>
                        </div>
                        <div class="text-field">
                            <label for="email">Correo:</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Correo"
                                required
                            >
                            @error('email')
                                <label for="text-field" style="color: red"> Las credenciales no coinciden </label>
                            @enderror
                            <!-- requiered para indicar al navegador que el campo es requerido -->
                            
                        </div>
                        <div class="text-field">
                            <label for="password">Contraseña:</label>
                            <input
                                id="password"
                                type="password"
                                name="password"
                                placeholder="Contraseña"
                                required
                            >
                            @error('password')
                                <label for="text-field" style="color: red"> Revisa tu Contraseña </label>
                            @enderror
                        </div>
                        <input type="submit" class="my-form__button" value="Ingresar">
                        <div class="my-form__actions">
                            <div class="my-form__row">
                                <span>¿Aún no formas parte de esta comunidad?</span>
                            </div>
                            <div class="my-form__signup">
                                <a href="{{route('register')}}" title="Create Account">
                                    Crea una cuenta
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="info-side" style="background-image:url('{{asset('assets/background_log.jpg')}}')">
                <img src="assets/serviBuap.png" alt="Mock" class="mockup">
                <div class="welcome-message">
                    <p>
                       Es una nueva forma de mantenerse informado sobre las noticias que involucran a la comunidad BUAP, 
                       además de poder acceder a tus datos de una forma sencilla y rápida.
                    </p>    
                </div>
            </div>
        </div>
        <script src="{{asset('js/notificaciones.js')}}"></script>
        </body>
    </html>

