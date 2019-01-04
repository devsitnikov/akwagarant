<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="{{asset('mdbootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('mdbootstrap/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('mdbootstrap/css/style.css')}}">
    <title>{{ config('app.name', 'Laravel') }}</title>


</head>
<body class="grey lighten-4">
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container-fluid">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"></li>
            </ul>
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item mr-2">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"
                       class="nav-link border border-light rounded">
                        Выход <i class="fas fa-sign-out-alt"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <div class="sidebar-fixed position-fixed">
        <a class="logo-wrapper">
            <img src="{{asset('svg/logo.svg')}}" alt="">
        </a>
        <div class="list-group list-group-flush">
            <button type="button" class="btn btn-info">Главная</button>
            <button type="button" class="btn btn-info">Статьи</button>
            <button type="button" class="btn btn-info">Файлы</button>
            <button type="button" class="btn btn-info">Настройки</button>
        </div>
    </div>
</header>
<main class="pt-5">
    <div class="container-fluid mt-5">
        @yield('content')
    </div>
</main>
        <script src="{{asset('mdbootstrap/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('mdbootstrap/js/popper.min.js')}}"></script>
        <script src="{{asset('mdbootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('mdbootstrap/js/mdb.min.js')}}"></script>
</body>
</html>