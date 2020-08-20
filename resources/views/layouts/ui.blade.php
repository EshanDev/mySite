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
    <div class="ui-wrapper">
        <div class="ui top-container">
            <div class="container-fluid">
                <nav class="navbar navbar-expend-lg navbar-ligth bg-light shawdow-sm fixed-top mb-4">
                    <a href="{{ url('/') }}" class="navbar-brand">{{ config('app.name') }}</a>
                </nav>
            </div>
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

    @yield('script')
</body>
</html>