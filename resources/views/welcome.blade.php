{{-- filepath: c:\laragon\www\TOEIC-NEW\resources\views\welcome.blade.php --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('welcome.title') }}</title>
        <link rel="stylesheet" href="{{ asset('themes/ezone/assets/css/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            html, body {
                background: url("{{ asset('img/graha.png') }}") no-repeat center center fixed !important;
                background-size: cover !important;
                background-color: transparent !important;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                z-index: 2; /* Pastikan konten di atas background */
            }

            .title {
                font-size: 84px;
                text-shadow: 2px 2px 5px #000;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-shadow: 1px 1px 3px #000;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
                
            .subtitle {
            font-size: 18px;
            font-weight: 300;
            line-height: 1.6;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
            color: #f8f9fa;
            text-shadow: 1px 1px 3px #000;
        }
        </style>
    </head>

    <body>
        <!-- Header -->
        <header class="bg-white shadow-sm">
            <nav class="navbar navbar-expand-lg navbar-light container-fluid py-3">
                <a class="navbar-brand d-flex align-items-center" href="/">
                    <img src="{{ asset('img/Polinema-Logo.png') }}" alt="Logo Polinema" style="height: 50px;">
                    <span class="ms-3 fw-bold text-primary fs-4">{{ __('welcome.header') }}</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark px-3" href="/">{{ __('welcome.home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark px-3" href="#">{{ __('welcome.terms') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark px-3" href="blog.html">{{ __('welcome.registration') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark px-3" href="contact.html">{{ __('welcome.schedule') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark px-3 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('welcome.language') }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('welcome', ['lang' => 'id']) }}">Indonesia</a></li>
                                <li><a class="dropdown-item" href="{{ route('welcome', ['lang' => 'en']) }}">English</a></li>
                            </ul>
                        </li>                                            
                    </ul>
                </div>
            </nav>
        </header>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">{{ __('welcome.home') }}</a>
                    @else
                        <a href="{{ route('login') }}">{{ __('welcome.login') }}</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">{{ __('welcome.register') }}</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{ __('welcome.title') }}
                </div>
                <div class="subtitle">
                    {{ __('welcome.subtitle') }}
                </div>
            </div>
        </div>

        <!-- JavaScript dan Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>