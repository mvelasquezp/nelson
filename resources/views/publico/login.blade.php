<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-t-50 p-b-90">
                    <form method="post" action="{{ route('login') }}" class="login100-form validate-form flex-sb flex-w">
                        @csrf
                        <span class="login100-form-title p-b-51">
                            Bienvenido
                        </span>

                        
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Ingrese su nombre de usuario">
                            <input class="input100" type="text" name="usuario" id="lg-usuario" placeholder="Usuario">
                            <span class="focus-input100"></span>
                        </div>
                        
                        
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Debe ingresar su clave">
                            <input class="input100" type="password" name="clave" id="lg-clave" placeholder="Contraseña">
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="flex-sb-m w-full p-t-3 p-b-24">
                            <div class="contact100-form-checkbox">
                                <input class="input-checkbox100" id="ckb1" type="checkbox" checked>
                                <label class="label-checkbox100" for="ckb1">Recordar mis datos</label>
                            </div>

                            <div>
                                <a href="#" class="txt1">Olvidé mi clave</a>
                            </div>
                        </div>

                        <div class="container-login100-form-btn m-t-17">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div id="dropDownSelect1"></div>
        <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
        <script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
        <script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>