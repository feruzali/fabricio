@extends('front.layouts.app')

@section('content')
	<?php include 'header.php'; ?>


	<section class="cart" id="cart">
		<div class="container">

			<div class="row">

				<div class="col-lg-8">

					<div class="cart-goods">
						<span class="cart-goods__title">Наименование</span>
						<span class="cart-goods__quantity">Кол-во</span>
						<div class="cart-good">
							<div class="cart-good__img">
								<img src="img/cart/1.png" alt="">
							</div>
							<span class="cart-good__title">Fabricio 1845</span>
							<input type="checkbox" class="cart-good__checkbox uk-checkbox"></input>

							<div class="stepper stepper--style-3 js-spinner card-good__quantity-wrapper">
							    <input autofocus type="number" min="1" max="10" step="1" value="1" class="stepper__input cart-good__quantity__input">
							    <div class="stepper__controls">
							        <button class="cart-good__quantity__btn" type="button" spinner-button="up"><i class="fa fa-caret-right"></i></button>
							        <button class="cart-good__quantity__btn" type="button" spinner-button="down"><i class="fa fa-caret-left"></i></button>
							    </div>
							</div>
							<span class="cart-good_m">М</span>

							<button class="cart-good_delete"><span>Удалить</span><i class="fa fa-times"></i></button>
						</div>
						<div class="cart-good">
							<div class="cart-good__img">
								<img src="img/cart/2.png" alt="">
							</div>
							<span class="cart-good__title">Fabricio 1845</span>
							<input type="checkbox" class="cart-good__checkbox uk-checkbox"></input>

							<div class="stepper stepper--style-3 js-spinner card-good__quantity-wrapper">
							    <input autofocus type="number" min="1" max="10" step="1" value="1" class="stepper__input cart-good__quantity__input">
							    <div class="stepper__controls">
							        <button class="cart-good__quantity__btn" type="button" spinner-button="up"><i class="fa fa-caret-right"></i></button>
							        <button class="cart-good__quantity__btn" type="button" spinner-button="down"><i class="fa fa-caret-left"></i></button>
							    </div>
							</div>
							<span class="cart-good_m">М</span>

							<button class="cart-good_delete"><span>Удалить</span><i class="fa fa-times"></i></button>
						</div>
						<div class="cart-good">
							<div class="cart-good__img">
								<img src="img/cart/3.png" alt="">
							</div>
							<span class="cart-good__title">Fabricio 1845</span>
							<input type="checkbox" class="cart-good__checkbox uk-checkbox"></input>

							<div class="stepper stepper--style-3 js-spinner card-good__quantity-wrapper">
							    <input autofocus type="number" min="1" max="10" step="1" value="1" class="stepper__input cart-good__quantity__input">
							    <div class="stepper__controls">
							        <button class="cart-good__quantity__btn" type="button" spinner-button="up"><i class="fa fa-caret-right"></i></button>
							        <button class="cart-good__quantity__btn" type="button" spinner-button="down"><i class="fa fa-caret-left"></i></button>
							    </div>
							</div>
							<span class="cart-good_m">М</span>

							<button class="cart-good_delete"><span>Удалить</span><i class="fa fa-times"></i></button>
						</div>
					</div>

					<form action="#" class="choose-req uk-form-horizontal uk-margin-medium-top">

						<div class="uk-form-label choose-req__title">Способ заказа</div>
				        <div class="uk-form-controls uk-form-controls-text">
				            <label><input class="uk-radio uk-margin-small-right" type="radio" name="choose-req-radio" required="" checked="">Использовать реквизиты введенные при регистрации</label><br>
				            <label><input class="uk-radio uk-margin-small-right" type="radio" name="choose-req-radio">Указать другие реквизиты для выставления вам счета</label>
				        </div>

					</form>

					<form action="#" class="new-req-form">

						<div class="new-req-form__textarea">
							<label class="new-req-form__label" for="new-req-form-client">Заказчик:</label>
							<textarea class="new-req-form__txtarea" name="new-req-form-client" id="" cols="45" rows="6" placeholder="Полное название компании" required=""></textarea>
						</div>

						<div class="new-req-form__textarea">
							<label class="new-req-form__label" for="new-req-form-bank">Банк:</label>
							<textarea class="new-req-form__txtarea" name="new-req-form-bank" id="" cols="45" rows="6" placeholder="Полный адрес" required=""></textarea>
						</div>




						<div class="new-req-form__textarea">
							<label class="new-req-form__label" for="new-req-form-address">Адрес:</label>
							<textarea class="new-req-form__txtarea" name="new-req-form-address" id="" cols="45" rows="6" placeholder="Полный адрес" required=""></textarea>
						</div>

							<div class="new-req-form__inputs">
								<label class="new-req-form__label" for="new-req-form-inn">ИНН:</label>
								<input class="new-req-form__input" type="text" name="new-req-form-inn" required="">
							</div>

							<div class="new-req-form__inputs">
								<label class="new-req-form__label" for="new-req-form-oked">ОКЕД:</label>
								<input class="new-req-form__input" type="text" name="new-req-form-oked" required="">
							</div>

							<div class="new-req-form__inputs">
								<label class="new-req-form__label" for="new-req-form-mfo">МФО:</label>
								<input class="new-req-form__input" type="text" name="new-req-form-mfo" required="">
							</div>




					</form>

				</div>

				<div class="col-lg-4 cart-aside">

					<p class="cart-aside__txt">*Не весь товар бывает в наличии на складе, оставьте контактный телефон, либо вы можете связаться с офисом для уточнения наличия товара</p>

					<form action="#" class="cart-aside-form">
						<label for="cart-name" class="cart-aside-form__label">Имя</label>
						<input name="cart-name" type="text" class="cart-aside-form__input">
						<label for="cart-tel" class="cart-aside-form__label">Телефон</label>
						<input name="cart-tel" type="tel" class="cart-aside-form__input">
						<label for="cart-email" class="cart-aside-form__label">Почта</label>
						<input name="cart-email" type="email" class="cart-aside-form__input">
						<label for="cart-comment" class="cart-aside-form__label">Комментарий</label>
						<textarea name="cart-comment" id="" cols="30" rows="10" class="cart-aside-form__txtarea"></textarea>
					</form>

						<button type="submit" class="cart-aside-form__btn btn-submit"><i class="fa fa-envelope"></i>Отправить</button>

				</div>

			</div>

		</div>
	</section>



	<?php include 'feedback.php'; ?>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script src="js/stepper.min.js"></script>

	<?php include 'footer.php'; ?>
@endsection
