<!DOCTYPE html>
<html lang="en">
<head>
    <title>Izzi Tendencias 2021</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ url('images/icons/iconoizzi.svg') }}"/>
    <link rel="stylesheet" type="text/css" href="{{  asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('css/main.v1.css') }}">
</head>
<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form method="post" action="{{ route('_login') }}" class="login100-form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <span class="login100-form-title p-b-57">
                    {{-- <i class=""> <img src="{{ url('images/santander_empresas.svg') }}" alt=""></i> --}}
                    <h1 style="color: white">Login</h1>
                </span>

                <div class="wrap-input100 validate-input" data-validate="Ingresar correo valido">
                    <span class="lotginstyle" data-placeholder="Email">Email</span>
                    <input class="input100" type="text" name="email" value="">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Ingresar una contraseña">
                    <span class="lotginstyle" data-placeholder="Password">Password</span>
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="password" value="">
                </div>

                {{-- <div class="text-uppercase text-center" style="font-size: 0.8rem;">
                    Toda la información transmitida en este evento es estrictamente confidencial.
                </div> --}}

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">
                            <span class="bob">Login</span>
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-30">
                    <a class="txt2" href="https://api.whatsapp.com/send?phone=5215562329209&text=" target="_target">
                        ¿Necesitas ayuda?
                    </a><br>
                    <a class="txt2" href="https://api.whatsapp.com/send?phone=5215562329209&text=" target="_target">
                        Envía un WhatsApp al +55 62 32 92 09
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ url('vendor/jquery/jquery-3.2.1.min.js')  }}"></script>
<script src="{{ url('vendor/animsition/js/animsition.min.js')  }}"></script>
<script src="{{ url('vendor/bootstrap/js/popper.js')  }}"></script>
<script src="{{ url('vendor/bootstrap/js/bootstrap.min.js')  }}"></script>
<script src="{{ url('vendor/select2/select2.min.js')  }}"></script>
<script src="{{ url('vendor/daterangepicker/moment.min.js')  }}"></script>
<script src="{{ url('vendor/daterangepicker/daterangepicker.js')  }}"></script>
<script src="{{ url('vendor/countdowntime/countdowntime.js')  }}"></script>
<script src="{{ url('js/main-login.js')  }}"></script>
</body>
</html>
