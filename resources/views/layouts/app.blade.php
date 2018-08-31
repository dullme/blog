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
</head>
<body class="docs language-php">
<div id="app" class="min-h-screen flex flex-col">
    @if(isset($postPage))
        <header class="w-full pt-10 {{ isset($bgHeadColor) ? $bgHeadColor : '' }} {{ isset($absolute)?$absolute:'' }}">
            <div class="container m-auto flex justify-between items-center">
                <img class="w-14" src="{{ isset($bgHeadColor) ? asset('images/logo-black.png') : asset('images/logo-white.png') }}"/>
                <nav class="head-link">
                    <a class="{{ isset($bgHeadColor) ? 'text-black' : 'text-white' }} pl-9 active" href="{{ url('/') }}">首页</a>
                    <a class="{{ isset($bgHeadColor) ? 'text-black' : 'text-white' }} pl-9" href="#">归档</a>
                    <a class="{{ isset($bgHeadColor) ? 'text-black' : 'text-white' }} pl-9" href="#">标签</a>
                    <a class="{{ isset($bgHeadColor) ? 'text-black' : 'text-white' }} pl-9" href="#">分类</a>
                    <a class="{{ isset($bgHeadColor) ? 'text-black' : 'text-white' }} pl-9" href="#">相册</a>
                    <a class="{{ isset($bgHeadColor) ? 'text-black' : 'text-white' }} pl-9" href="#">关于</a>
                </nav>
            </div>
        </header>
    @else
        <header class="w-full pt-10 mb-10 header-bg-color {{ isset($bgHeadColor) ? $bgHeadColor : '' }} {{ isset($absolute)?$absolute:'' }}">
            <div class="overlay"></div>
            <div class="container m-auto flex justify-between items-center">
                <img class="w-14" src="{{ asset('images/logo-white.png') }}"/>
                <nav class="head-link">
                    <a class="active text-white pl-9" href="{{ url('/') }}">首页</a>
                    <a class="text-white pl-9" href="#">归档</a>
                    <a class="text-white pl-9" href="#">标签</a>
                    <a class="text-white pl-9" href="#">分类</a>
                    <a class="text-white pl-9" href="#">相册</a>
                    <a class="text-white pl-9" href="#">关于</a>
                </nav>
            </div>
            <div class="container pt-10 pb-15">
                <div class="text-white text-center text-5xl font-bold">
                    <span>Erocode</span>
                </div>
            </div>
            <div class="mask"></div>
        </header>
    @endif


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
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
