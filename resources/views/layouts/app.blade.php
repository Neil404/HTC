<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HTC') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/htc.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand d-flex justify-content-start align-items-center" href="#">
            <img src="{{ asset('images/htc.png') }}" width="55" height="55" class="d-inline-block align-top mr-3" alt="">
            <span class="menu-collapsed d-flex flex-column">
                <b>{{ config('app.name', 'HTC') }}</b>
                <b class="font-weight-normal h6 font-italic">Electronic Class Record</b>
            </span>
        </a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li> -->
                @guest
                @else
                    @if(Auth::user()->type == 'ADMIN')
                        @include('layouts.adminCollapsedMenu')
                    @elseif(Auth::user()->type == 'TEACHER')
                        @include('layouts.teacherAdviserCollapsedMenu')
                    @endif
                @endguest

            </ul>
            <ul class="navbar-nav ml-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav><!-- NavBar END -->


<!-- Bootstrap row -->
<div class="row" id="body-row">
    <!-- Sidebar -->
    @guest
    @else
        @if(Auth::user()->type == 'ADMIN')
            @include('layouts.admin')
        @elseif(Auth::user()->type == 'TEACHER')
            @include('layouts.teacherAdviser')
        @endif
    @endguest

    <!-- MAIN -->
    <div class="col">
        <main class="py-4">
            @yield('content')
        </main>
    </div><!-- Main Col END -->

</div><!-- body-row END -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/toggle.js') }}" defer></script>
</body>
</html>
