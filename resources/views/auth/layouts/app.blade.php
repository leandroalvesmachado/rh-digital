<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon-pmf.ico') }}">
    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login/login.css') }}" rel="stylesheet">
    <style lang="">
        #teste {
            position: absolute;
            top: 5%;
            left: 10%;
            right: 10%;
        }
    </style>
</head>
<body>
    <!-- particles.js container -->
    <div id="particles-js"></div>
    <!-- stats - count particles -->
    <!--
    <div class="count-particles">
        <span class="js-count-particles">--</span> particles
    </div>
    -->

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div class="account-pages" id="teste">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-5 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mt-4">
                                <div class="mb-3">
                                    <a href="{{ route('login') }}">
                                        <img src="{{ asset('images/logo-cgm.png') }}" width="80%" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="p-3">
                                <h4 class="font-size-18 mt-2 text-center">RH DIGITAL</h4>
                                @yield('content')
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center position-relative">
                        <p class="text-white">2021 © CGM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/login/login.js') }}" defer></script>
    <script src="{{ asset('js/admin.js') }}" defer></script>
</body>
</html>
