@extends('front.layouts.app')

@section('content')
<section class="form" id="form">
	<legend class="form__title">Typeform</legend>
	<form action="#" class="form-login" method="post">
		<label class="form-login__label" for="login-email">Email</label>
		<input class="form-login__input" type="email" name="email" placeholder="Companyname@gmail.com" required="">
		<label class="form-login__label" for="login-password">Password</label>
		<input class="form-login__input" type="password" name="password" placeholder="At least 6 characters" required="">
		<a href="#" class="form-login_forgot">I forgot my password</a>
		<button class="form-login__btn">Log in to Typeform</button>
		<small>This site is protected by reCAPTCHA and the <br> Google Privacy Policy and Terms of Service apply.</small>
		<span class="form-login_or">Or</span>
		<div class="form-login_google">
			<a href="" class="uk-icon-button" uk-icon="icon: google-plus; ratio: 1.6"></a>
			<span>Sign in with Google</span>
		</div>
	</form>
</section>
@endsection
