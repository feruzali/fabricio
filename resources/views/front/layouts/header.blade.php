<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OpticalPro</title>

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
    <ul class="nav-bar-list">
        <li class="nav-bar-list__elem">Главная</li>
        <li class="nav-bar-list__elem">Каталог&nbsp; <i class="fa fa-angle-down"></i></li>
        <li class="nav-bar-list__elem">О компании</li>
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
                        <button  class="header__auth_adap"><i class="fa fa-user"></i></button>
                    @endguest
                    @auth
                        <img class="header__bag" src="{{asset('front/img/header-bag.png')}}" alt="Bag">
                        <span class="header__bag__quan" id="cartCount">@if(isset($cartTotalCount)) {{ $cartTotalCount }} @else 0 @endif</span>
                        <span class="header__price"> &nbsp;@if (isset($cartTotalSum)) {{ number_format($cartTotalSum, 0, ',', ' ') }} @else 0 @endif сум</span>
                    @endauth
                </div>
            </div>
            <!-- /.col-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</header>
