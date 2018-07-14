<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('header.name', 'Banana Pirates') }}</title>

    <!-- Scripts -->
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/carousel.js') }}" defer></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}" type="text/javascript"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    {{-- using bootstrap 4 --}}
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/banana.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('https://www.w3schools.com/w3css/4/w3.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('header.name', 'Banana Pirates') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>
                <!-- Right Side Of Navbar -->

                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link font-color bold" href="{{ route('profile') }}">{{ __('PROFILE') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-color bold" href="#visi-misi">{{ __('VISI DAN MISI') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-color bold" href="{{ route('our-team') }}">{{ __('OUR TEAM') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-color bold" href="{{ route('project-event') }}">{{ __('PROJECT & EVENT') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-color bold" href="{{ route('blogs') }}">{{ __('BLOG') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-color bold" href="{{ route('gallery') }}">{{ __('GALLERY') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-color bold" href="{{ route('store') }}">{{ __('STORE') }}</a>
                </li>
                </ul>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>    
</body>
</html>
