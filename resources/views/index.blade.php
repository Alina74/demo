<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Главная страница')</title>
    <link rel="stylesheet" href="/public/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <script src="/public/assets/js/bootstrap.bundle.js"></script>
    <script src="/public/assets/js/script.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container d-flex">
        <a class="navbar-brand" href="#">Мир цветов</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('about')}}">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contacts')}}">Где нас найти?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('catalog')}}">Каталог</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Регистрация</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Вход</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('basket')}}">Корзина</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('orders')}}">Мои заказы</a>
                    </li>
                    @if(auth()->user()->role=='Администратор')
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('admin.panel')}}">Панель администратора</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}">Выход</a>
                    </li>

                @endauth

            </ul>
        </div>
    </div>
</nav>
@yield('content')
</body>
</html>
