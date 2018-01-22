<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Andy's Laravel 5.6 </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/andy.css') }}" rel="stylesheet">


</head>

<body>

<div id="app">
    <nav class="navbar navbar-static-top navbar-inverse">
        <div class="container">

            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Andys') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                @if (Route::has('login'))
                        @auth
                            <li><a href="{{ url('/home') }}" lass="navbar-toggle btn btn-primary btn-sm">Home</a></li>
                        @else
                            <li><a href="{{ route('login') }}" lass="navbar-toggle btn btn-primary btn-sm">Login</a></li>
                            <li><a href="{{ route('register') }}" lass="navbar-toggle btn btn-primary btn-sm">Register</a></li>
                        @endauth
                @endif
                </ul>
            </div>
        </div>
    </nav>
</div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.js"></script>

        @yield('scripts')

    </body>
</html>
