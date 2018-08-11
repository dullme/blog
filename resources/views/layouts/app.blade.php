<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/markdown.css') }}" rel="stylesheet">

</head>
<body>
<div id="app" class="min-h-screen flex flex-col">
    <header class="w-full pt-10 pb-10 {{ isset($bgHeadColor) ? $bgHeadColor : '' }} {{ isset($absolute)?$absolute:'' }}">
        <div class="container m-auto flex justify-between items-center">
            <img class="w-14" src="{{ asset('images/logo-black.png') }}"/>
            <nav>
                <a class="text-black pl-9" href="{{ url('/') }}">首页</a>
                <a class="text-black pl-9" href="#">归档</a>
                <a class="text-black pl-9" href="#">标签</a>
                <a class="text-black pl-9" href="#">分类</a>
                <a class="text-black pl-9" href="#">相册</a>
                <a class="text-black pl-9" href="#">关于</a>
            </nav>
        </div>
    </header>
    <div class="flex-1">
        @yield('content')
    </div>
    <footer class="bg-grey-lightest text-sm pt-9 pb-9 flex">
        <div class="container m-auto flex justify-between items-center">
            <span class="text-grey">&copy;Copyright 2018. All Rights Reserved.</span>
            <nav>
                <a class="text-grey pl-6" href="#"><img src="{{ asset('svg/sina-weibo.svg') }}"></a>
                <a class="text-grey pl-6" href="#"><img src="{{ asset('svg/twitter.svg') }}"></a>
                <a class="text-grey pl-6" href="#"><img src="{{ asset('svg/hangouts.svg') }}"></a>
                <a class="text-grey pl-6" href="#"><img src="{{ asset('svg/github.svg') }}"></a>
                <a class="text-grey pl-6" href="#"><img src="{{ asset('svg/facebook.svg') }}"></a>
                <a class="text-grey pl-6" href="#"><img src="{{ asset('svg/linkedin.svg') }}"></a>
            </nav>
        </div>
    </footer>
</div>
</body>
</html>
