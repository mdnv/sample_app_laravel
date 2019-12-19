<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    {{-- <title>{{ full_title(@yield('title')) }}</title> --}}
    {{-- https://laravel.io/forum/02-06-2014-check-if-yieldsomething-is-set --}}
    {{-- https://devdojo.com/tutorials/custom-global-helpers-in-laravel --}}
    <title>{{ full_title($__env->yieldContent('title')) }}</title>
    {{-- <title>
        @if(View::hasSection('title'))
            {{ full_title($__env->yieldContent('title')) }}
        @else
            {{ full_title() }}
        @endif
    </title> --}}
    {{-- <title>
        @if(View::hasSection('title'))
            @yield('title') | Laravel Tutorial Sample App
        @else
            Laravel Tutorial Sample App
        @endif
    </title> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.header')
    <div class="container">
      @yield('content')
      @include('layouts.footer')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
