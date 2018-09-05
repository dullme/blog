<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('style')

    <style>
        .loading::before {
            content: '';
            position: fixed;
            z-index: 100000;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
        }

        .loading::after {
            content: '';
            position: fixed;
            z-index: 100000;
            top: 50%;
            left: 50%;
            width: 60px;
            height: 60px;
            margin: -30px 0 0 -30px;
            pointer-events: none;
            border-radius: 50%;
            opacity: 0.4;
            background: red;
            animation: loaderAnim 0.7s linear infinite alternate forwards;
        }

        @keyframes loaderAnim {
            to {
                opacity: 1;
                transform: scale3d(0.5,0.5,1);
            }
        }
    </style>

</head>
<body class="docs language-php loading">

<div id="app" class="min-h-screen flex flex-col">
    @yield('header')
    @yield('content')
    @include('layouts.footer')
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
