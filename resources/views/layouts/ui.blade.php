<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ui.css') }}">
    @yield('stylesheet')
</head>

<body>

    <div id="wrapper" class="ui-wrapper">
        <div class="sidebar fixed-left">
            sidebar
        </div>
        <div class="ui top-container">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-sm">
                <div class="container-lg">
                    <a href="{{ url('/') }}" class="navbar-brand">{{ config('app.name') }}</a>
                    <div class="offcanvas  ml-auto">
                        <ul id="top_navbar" class="navbar-nav d-none d-sm-block">
                            @guest
                            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                            @if(Route::has('register'))
                            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                            @endif
                            @endguest
                        </ul>
                        <ul class="navbar-nav d-block d-sm-none">
                            <li id="toggle_menu" class="nav-item nav-link" onclick="ToggleMenu(this)">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('top-container')
        </div>
        <div class="ui middle-container">
            @yield('middle-container')
        </div>
        <div class="ui bottom-container">
            <div class="footer-container">
                <div class="content">
                    <div class="text-center">&copy; {{ date('Y') }} {{ config('app.name') }} All right reserved</div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/ui.js') }}"></script>
    <script src="https://kit.fontawesome.com/915c079cb9.js" crossorigin="anonymous"></script>

    @yield('script')
    <script>

        function ToggleMenu(x) {
            var w = document.getElementById('wrapper');
        x.classList.toggle('change');
        w.classList.toggle('open');
        };

    </script>
</body>

</html>
