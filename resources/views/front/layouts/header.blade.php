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
                <ul class="header__nav">
                    <li>Главная</li>
                    <li>Каталог&nbsp; <i class="fa fa-angle-down"></i></li>
                    <li>О компании</li>
                </ul>
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
                        <span class="header__price">-&nbsp;10 000 сум</span>
                    @endauth
                </div>
            </div>
            <!-- /.col-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</header>
