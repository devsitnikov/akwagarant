<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Компания Аквагарант</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/site/style.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>

    <div class="top-line">
        <div class="logo">
        <img src="{{asset('svg/logo.svg')}}" alt="Компания Аквагарант">
        </div>
    <div class="menu">
        <ul>
            <li><a href="#">Наши объекты</a></li>
            <li><a href="#">Статьи</a></li>
            <li><a href="#">Интернет-магазин</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </div>
    <div class="contacts">
        <span class="number">
            8 (473) 251-64-10
        </span>
        <button class="blue-btn contact-btn">Заказать обратный звонок</button>
        <div class="toggle-menu">
            <i class="fas fa-bars"></i>
        </div>
    </div>
    </div>
    @yield('content')

<div class="menu-modal">
    <i class="fas fa-times close-modal-menu"></i>
    <ul>
        <li><a href="#">Наши объекты</a></li>
        <li><a href="#">Статьи</a></li>
        <li><a href="#">Интернет-магазин</a></li>
        <li><a href="#">Контакты</a></li>
    </ul>
</div>


    <script>
        window.onload = function() {
            $('.toggle-menu').click(function(){
                $('.menu-modal').fadeToggle()
            });
            $('.close-modal-menu').click(function(){
                $('.menu-modal').fadeToggle()
            });
        }
    </script>
</body>
</html>