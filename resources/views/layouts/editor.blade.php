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
    <script src="{{asset('js/app.js')}}"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="{{asset('mdbootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('mdbootstrap/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('mdbootstrap/css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="{{asset('ckeditor5/ckeditor.js')}}"></script>
    <script src="{{asset('ckeditor5/translations/ru.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/site/style.css')}}">
</head>
<body>

<div class="top-line">
    <div class="logo"><a href="{{route('index')}}">
            <img src="{{asset('svg/logo.svg')}}" alt="Компания Аквагарант">
        </a>
    </div>
    <div class="menu">
        <ul>
            <li><a>Наши объекты</a></li>
            <li><a>Статьи</a></li>
            <li><a>Интернет-магазин</a></li>
            <li><a>Контакты</a></li>
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

<div id="footer">
    <div class="footer_contacts">
        <div class="contact_title">
            Контакты
        </div>
        <div class="contact_item"><i class="fas fa-phone-volume"></i> 8 (473) 251-64-10</div>
        <div class="contact_item"><i class="far fa-envelope-open"></i> info@akwagarant.ru</div>
        <div class="contact_title">
            Режим работы компании
        </div>
        <div class="contact_item"><i class="fas fa-stopwatch"></i> Понедельник - Пятница: с 9:00 - 18:00</div>
        <div class="contact_item"><i class="fas fa-home"></i>  г. Воронеж, ул. Матросова, 6в, 3 Этаж оф. 5</div>
    </div>
    <div id="footer_maps">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aec4442c709fa9aa0754413ea780077071850565ddefbe303965dbd8eea6dd28b&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
</div>

<div class="menu-modal">
    <i class="fas fa-times close-modal-menu"></i>
    <ul>
        <li><a href="#">Наши объекты</a></li>
        <li><a href="#">Статьи</a></li>
        <li><a href="#">Интернет-магазин</a></li>
        <li><a href="#">Контакты</a></li>
    </ul>
</div>
<script src="{{asset('mdbootstrap/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('mdbootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('mdbootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('mdbootstrap/js/mdb.min.js')}}"></script>
</body>
</html>