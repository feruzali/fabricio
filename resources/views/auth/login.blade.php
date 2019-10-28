@extends('front.layouts.app')

@section('title', 'Вход')

@section('content')
<section class="form" id="form">
	<legend class="form__title">Авторизация</legend>
	<form action="#" class="form-login" method="post">
		@csrf
		<label class="form-login__label" for="login-email">Email</label>
		<input class="form-login__input" type="email" name="email" placeholder="Companyname@gmail.com" required="">
		<label class="form-login__label" for="login-password">Пароль</label>
		<input class="form-login__input" type="password" name="password" placeholder="Как минимум 8 символов" required="">
		<a href="#" class="form-login_forgot">Забыли пароль?</a>
		<button class="form-login__btn">Войти</button>
		<small>This site is protected by reCAPTCHA and the <br> Google Privacy Policy and Terms of Service apply.</small>
		<span class="form-login_or">Или</span>
		<div class="form-login_google">
			<a href="" class="uk-icon-button" uk-icon="icon: google-plus; ratio: 1.6"></a>
			<span>Войти с помощью Google</span>
		</div>
	</form>
</section>
@endsection
