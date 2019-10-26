<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Optical Pro</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Uikit -->
    <link rel="stylesheet" href="{{asset('front/css/uikit.min.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
</head>

<body>

<div class="nav-menu">
    <span id="close">&times;</span>
    <ul class="uk-nav-parent-icon nav-bar-list " uk-nav style="padding: 30px;">
        <li class="nav-bar-list__elem"><a href="#">Главная</a></li>
        <li class="nav-bar-list__elem uk-parent">
            <a href="#">Каталог</a>
            <ul class="uk-nav-sub">
                <li class="nav-bar-list-dropdown__item"><a href="#">Мои талоны</a></li>
                <li class="nav-bar-list-dropdown__item"><a href="#">Корзина услуг</a></li>
                <li class="nav-bar-list-dropdown__item"><a href="#">Заявление на прикрепление</a></li>
                <li class="nav-bar-list-dropdown__item"><a href="#">Запись на прием</a></li>
                <li class="nav-bar-list-dropdown__item"><a href="#">Диспансеризация</a></li>
            </ul>
        </li>
        <li class="nav-bar-list__elem"><a href="#">О компании</a></li>
    </ul>
</div>

<header id="header" class="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-sm-8 col-7">
                <i id="open" class="fa fa-bars"></i>
                <img src="{{asset('front/img/main-logo.png')}}" alt="Logo" class="header__logo">
                <nav class="header__nav" uk-navbar="mode: click">
                    <ul class="uk-navbar-nav">
                        <li class="header__nav__item"><a href="{{ route('home') }}">Главная</a></li>
                        <li class="header__nav__item">
                            <a href="#">Каталог&nbsp; <i class="fa fa-angle-down"></i></a>
                            <div class="uk-navbar-dropdown" style="width: auto; padding: 0; white-space: nowrap; margin-top: 0;">
                                <ul class="uk-nav uk-navbar-dropdown-nav header__nav__dropdown">
                                    @foreach($categories as $category)
                                        <li class="header__nav__dropdown__item"><a href="{{ $category->getAncestorsSlugs() }}">{{ $category->ru_title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li class="header__nav__item"><a href="{{ route('about') }}">О компании</a></li>
                    </ul>
                </nav>
            </div>
            <!-- /.col-6 -->
            <div class="col-xl-5 col-lg-4 col-md-3 col-sm-4 col-5">
                <div class="header-wrapper">
                    @guest
                        <a class="header__auth" href="{{ route('login') }}">Войти</a>
                        <a class="header__auth_adap" href="{{ route('login') }}"><i class="fa fa-user"></i></a>
                        <a class="header__auth" href="{{ route('register') }}">Регистрация</a>
                        <a class="header__auth_adap" href="{{ route('register') }}"><i class="fa fa-address-card-o"></i></a>
                    @endguest
                    @auth
                        <img class="header__bag" src="{{asset('front/img/header-bag.png')}}" alt="Bag">
                        <span class="header__bag__quan" id="cartCount">@if(isset($cartTotalCount)) {{ $cartTotalCount }} @else 0 @endif</span>
                        <span class="header__price"> &nbsp;@if (isset($cartTotalSum)) {{ number_format($cartTotalSum, 0, ',', ' ') }} @else 0 @endif сум</span>
                        <a class="header__auth" href="{{ route('logout') }}">Выйти</a>
                    @endauth
                </div>
            </div>
            <!-- /.col-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</header>
