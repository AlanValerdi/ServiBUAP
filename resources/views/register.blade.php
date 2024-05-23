<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registro-ServiBUAP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Mulish&display=swap"
            rel="stylesheet"
        >
        <link rel="stylesheet" href="{{asset('css/reglog.css')}}">
    </head>
    <body class="body-reg">
        <div class="register-wrapper">
            <div class="login-side">
                <a href="#" title="Logo">
                    <img class="logo" src="assets/serviBuap.png" alt="Logo">
                </a>
                <div class="my-form__wrapper">
                    <div class="login-welcome-row">
                        <h1>Registrate 👌</h1>
                        <p>Por favor registra tus datos para acceder a la comunidad de serviBUAP</p>
                    </div>
                    <form method="POST" class="my-form">
                        @csrf
                        <div class="divider">
                            <div class="divider-line"></div>
                        </div>
                        <div class="text-field">
                            <label for="role">Porfavor, verifica si eres Profesor o Alumno:</label>
                            <select name="role" required>
                                <option value="profesor">Profesor</option>
                                <option value="alumno">Alumno</option>
                            </select>
                        </div>
                        <div class="text-field">
                            <label for="text-field">Matricula:</label>
                            <input
                                type="text"
                                name="matricula"
                                placeholder="202400000 (9 digitos)"
                                required
                            >
                            @error('matricula')
                                <label for="text-field" style="color: red"> Revisa los datos insertados </label>
                            @enderror
                        </div>
                        <div class="text-field">
                            <label for="text-field">Nombre/s:</label>
                            <input
                                type="text"
                                name="name"
                                placeholder="Nombre"
                                required
                            >
                            @error('name')
                                <label for="text-field" style="color: red"> Revisa los datos insertados </label>
                            @enderror
                        </div>
                        <div class="text-field">
                            <label for="text-field">Apellido Paterno:</label>
                            <input
                                type="text"
                                name="name_p"
                                placeholder="Apellido Paterno"
                                required
                            >
                            @error('name_p')
                                <label for="text-field" style="color: red"> Revisa los datos insertados </label>
                            @enderror
                        </div>
                        <div class="text-field">
                            <label for="text-field">Apellido Materno:</label>
                            <input
                                id="name_m"
                                type="text"
                                name="name_m"
                                placeholder="Apellido Materno"
                                required
                            >
                            @error('name_m')
                                <label for="text-field" style="color: red"> Revisa los datos insertados </label>
                            @enderror
                        </div>
                        <div class="text-field">
                            <label for="email">Correo:</label>
                            <input
                                type="email"
                                name="email"
                                placeholder="Correo"
                                required
                            >
                            @error('email')
                                <label for="text-field" style="color: red"> Revisa los datos insertados </label>
                            @enderror
                            <!-- requiered para indicar al navegador que el campo es requerido -->
                        </div>
                        <div class="text-field">
                            <label for="password">Contraseña:</label>
                            <input
                                type="password"
                                name="password"
                                placeholder="Contraseña (8 caracteres minimo)"
                                required
                            >
                            @error('password')
                                <label for="text-field" style="color: red"> Revisa los datos insertados </label>
                            @enderror
                        </div>
                        <input type="submit" class="my-form__button" value="Registrarse">
                        <div class="my-form__actions">
                            <div class="my-form__row">
                                <span>¿Ya formas parte de esta comunidad?</span>
                            </div>
                            <div class="my-form__signup">
                                <a href="{{route('login')}}" title="Log in">
                                    Ingresa sesión
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="info-side-reg" style="background-image:url('{{asset('assets/background_reg.jpg')}}')">
                <img src="assets/serviBuap.png" alt="Mock" class="mockup">
                <div class="welcome-message">
                    <p>
                       Registrate para acceder a la comunidad de serviBUAP y empezar a disfrutar de los beneficios que tenemos para ti.
                    </p>    
                </div>
            </div>
        </div>
        <script src="{{asset('js/funcionalidad.js')}}"></script>
    </body>
</html>

