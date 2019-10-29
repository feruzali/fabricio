@extends('front.layouts.app')

@section('title', $product->title)

@section('content')
    <section class="card" id="card">
        <div class="container">
{{--            @foreach($product->colors as $color)--}}
{{--                <div uk-slideshow class="card--slider" data-color="{{ $color->id }}">--}}

{{--                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">--}}

{{--                        <ul class="uk-slideshow-items card-slideshow__bg" style="min-height: 624.375px;">--}}
{{--                            @foreach ($color->images as $image)--}}
{{--                                <li class="card-slideshowItem">--}}
{{--                                    <img class="uk-position-center uk-margin-large-left" src="{{ $image->getImage() }}" alt="">--}}

{{--                                    <div class="uk-overlay uk-position-bottom-right uk-position-large">--}}
{{--                                        <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            @endforeach--}}

{{--                        </ul>--}}

{{--                        <div class="uk-position-bottom-right uk-position-medium card-slideshow__nav">--}}
{{--                            <i class="fa fa-long-arrow-left" uk-slideshow-item="previous"></i>--}}
{{--                            <i class="fa fa-long-arrow-right" uk-slideshow-item="next"></i>--}}
{{--                        </div>--}}
{{--                        <div class="uk-position-center-right uk-position-large">--}}
{{--                            <ul class="uk-slideshow-nav uk-dotnav uk-dotnav-vertical"></ul>--}}
{{--                        </div>--}}

{{--                        <div class="uk-position-center-left uk-position-small">--}}
{{--                            @foreach($product->colors as $key => $prodColor)--}}
{{--                                <div class="circle-wrapper @if($key === 1) circle-wrapper--active @endif" data-color="{{ $prodColor->id }}">--}}
{{--                                    <div class="circle" style="background-color: {{ $prodColor->colorHEX }};"><i class="fa fa-check"></i></div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}

{{--                        <div class="uk-position-bottom-left uk-position-small">--}}
{{--                            <div class="stepper stepper--style-3 js-spinner card-stepper">--}}
{{--                                <input autofocus type="number" min="1" max="10" step="1" value="1" class="stepper__input card-stepper__input quantity-field">--}}
{{--                                <div class="stepper__controls">--}}
{{--                                    <button style="background-color: transparent; right: 18px;" type="button" spinner-button="up"><i class="fa fa-chevron-right"></i></button>--}}
{{--                                    <button style="background-color: transparent;" type="button" spinner-button="down"><i class="fa fa-chevron-left"></i></button>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <button class="card-slideshow__btn add-to-card-button" data-product-id="{{ $product->id }}"><i class="fa fa-shopping-cart"></i>&nbsp; Добавить в корзину</button>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div>--}}
{{--            @endforeach--}}
            <div uk-slideshow class="card--slider" data-color="black">

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slideshow-items card-slideshow__bg">
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="{{ asset('front/img/card/1.png') }}" alt="">

                            <div class="uk-overlay uk-position-bottom-right uk-position-large">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="{{ asset('front/img/card/1.png') }}" alt="">
                            <div class="uk-overlay uk-position-bottom-right uk-position-large">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="{{ asset('front/img/card/1.png') }}" alt="">
                            <div class="uk-overlay uk-position-bottom-right uk-position-large">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="{{ asset('front/img/card/1.png') }}" alt="">
                            <div class="uk-overlay uk-position-bottom-right uk-position-large">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>

                    </ul>

                    <div class="uk-position-bottom-right uk-position-medium card-slideshow__nav">
                        <i class="fa fa-long-arrow-left" uk-slideshow-item="previous"></i>
                        <i class="fa fa-long-arrow-right" uk-slideshow-item="next"></i>
                    </div>
                    <div class="uk-position-center-right uk-position-large card-slideshow__dotnav">
                        <ul class="uk-slideshow-nav uk-dotnav uk-dotnav-vertical"></ul>
                    </div>

                    <div class="uk-position-center-left uk-position-small card-colors">
                        <div class="circle-wrapper circle-wrapper--active" data-color="black">
                            <div class="circle" style="background-color: #4986ff;"><i class="fa fa-check"></i></div><span>Синий</span>
                        </div>
                        <div class="circle-wrapper" data-color="white">
                            <div class="circle" style="background-color: #76d2e6;"><i class="fa fa-check"></i></div>
                        </div>
                        <div class="circle-wrapper" data-color="red">
                            <div class="circle" style="background-color: #f593a7;"><i class="fa fa-check"></i></div>
                        </div>
                    </div>

                    <div class="uk-position-bottom-left uk-position-small md_hidden">
                        <div class="stepper stepper--style-3 js-spinner card-stepper">
                            <input autofocus type="number" min="1" max="10" step="1" value="1" class="stepper__input card-stepper__input quantity-field">
                            <div class="stepper__controls">
                                <button style="background-color: transparent; right: 18px;" type="button" spinner-button="up"><i class="fa fa-chevron-right"></i></button>
                                <button style="background-color: transparent;" type="button" spinner-button="down"><i class="fa fa-chevron-left"></i></button>
                            </div>
                        </div>

                        <button class="card-slideshow__btn add-to-card-button" data-product-id="{{ $product->id }}"><i class="fa fa-shopping-cart"></i>&nbsp; Добавить в корзину</button>
                    </div>
                    <div class="stepper stepper--style-3 js-spinner card-stepper md_visible">
                        <input autofocus type="number" min="1" max="10" step="1" value="1" class="stepper__input card-stepper__input">
                        <div class="stepper__controls">
                            <button style="background-color: transparent; right: 18px;" type="button" spinner-button="up"><i class="fa fa-chevron-right"></i></button>
                            <button style="background-color: transparent;" type="button" spinner-button="down"><i class="fa fa-chevron-left"></i></button>
                        </div>
                    </div>

                    <button class="card-slideshow__btn md_visible"><i class="fa fa-shopping-cart"></i>&nbsp; Добавить в корзину</button>

                </div>

            </div>

            <div uk-slideshow class="card--slider" data-color="white" style="display: none;">

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slideshow-items card-slideshow__bg">
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="{{ asset('front/img/card/1.png') }}" alt="">

                            <div class="uk-overlay uk-position-bottom-right uk-position-large">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="{{ asset('front/img/card/1.png') }}" alt="">
                            <div class="uk-overlay uk-position-bottom-right uk-position-large">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="{{ asset('front/img/card/1.png') }}" alt="">
                            <div class="uk-overlay uk-position-bottom-right uk-position-large">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="{{ asset('front/img/card/1.png') }}" alt="">
                            <div class="uk-overlay uk-position-bottom-right uk-position-large">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>

                    </ul>

                    <div class="uk-position-bottom-right uk-position-medium card-slideshow__nav">
                        <i class="fa fa-long-arrow-left" uk-slideshow-item="previous"></i>
                        <i class="fa fa-long-arrow-right" uk-slideshow-item="next"></i>
                    </div>
                    <div class="uk-position-center-right uk-position-large card-slideshow__dotnav">
                        <ul class="uk-slideshow-nav uk-dotnav uk-dotnav-vertical"></ul>
                    </div>

                    <div class="uk-position-center-left uk-position-small card-colors">
                        <div class="circle-wrapper"data-color="black">
                            <div class="circle" style="background-color: #4986ff;"><i class="fa fa-check"></i></div>
                        </div>
                        <div class="circle-wrapper  circle-wrapper--active" data-color="white">
                            <div class="circle" style="background-color: #76d2e6;"><i class="fa fa-check"></i></div><span>Зелёныйя</span>
                        </div>
                        <div class="circle-wrapper" data-color="red">
                            <div class="circle" style="background-color: #f593a7;"><i class="fa fa-check"></i></div>
                        </div>
                    </div>

                    <div class="uk-position-bottom-left uk-position-small md_hidden">
                        <div class="stepper stepper--style-3 js-spinner card-stepper">
                            <input autofocus type="number" min="1" max="10" step="1" value="1" class="stepper__input card-stepper__input">
                            <div class="stepper__controls">
                                <button style="background-color: transparent; right: 18px;" type="button" spinner-button="up"><i class="fa fa-chevron-right"></i></button>
                                <button style="background-color: transparent;" type="button" spinner-button="down"><i class="fa fa-chevron-left"></i></button>
                            </div>
                        </div>

                        <button class="card-slideshow__btn add-to-card-button" data-product-id="{{ $product->id }}"><i class="fa fa-shopping-cart"></i>&nbsp; Добавить в корзину</button>
                    </div>
                    <div class="stepper stepper--style-3 js-spinner card-stepper md_visible">
                        <input autofocus type="number" min="1" max="10" step="1" value="1" class="stepper__input card-stepper__input">
                        <div class="stepper__controls">
                            <button style="background-color: transparent; right: 18px;" type="button" spinner-button="up"><i class="fa fa-chevron-right"></i></button>
                            <button style="background-color: transparent;" type="button" spinner-button="down"><i class="fa fa-chevron-left"></i></button>
                        </div>
                    </div>

                    <button class="card-slideshow__btn md_visible"><i class="fa fa-shopping-cart"></i>&nbsp; Добавить в корзину</button>

                </div>

            </div>

            <div uk-slideshow class="card--slider" data-color="red" style="display: none;">

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slideshow-items card-slideshow__bg">
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="{{ asset('front/img/card/1.png') }}" alt="">

                            <div class="uk-overlay uk-position-bottom-right uk-position-large">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="{{ asset('front/img/card/1.png') }}" alt="">
                            <div class="uk-overlay uk-position-bottom-right uk-position-large">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="{{ asset('front/img/card/1.png') }}" alt="">
                            <div class="uk-overlay uk-position-bottom-right uk-position-large">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="img/card/1.png" alt="">
                            <div class="uk-overlay uk-position-bottom-right uk-position-large">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>

                    </ul>

                    <div class="uk-position-bottom-right uk-position-medium card-slideshow__nav">
                        <i class="fa fa-long-arrow-left" uk-slideshow-item="previous"></i>
                        <i class="fa fa-long-arrow-right" uk-slideshow-item="next"></i>
                    </div>
                    <div class="uk-position-center-right uk-position-large card-slideshow__dotnav">
                        <ul class="uk-slideshow-nav uk-dotnav uk-dotnav-vertical"></ul>
                    </div>

                    <div class="uk-position-center-left uk-position-small card-colors">
                        <div class="circle-wrapper"data-color="black">
                            <div class="circle" style="background-color: #4986ff;"><i class="fa fa-check"></i></div>
                        </div>
                        <div class="circle-wrapper" data-color="white">
                            <div class="circle" style="background-color: #76d2e6;"><i class="fa fa-check"></i></div>
                        </div>
                        <div class="circle-wrapper circle-wrapper--active" data-color="red">
                            <div class="circle" style="background-color: #f593a7;"><i class="fa fa-check"></i></div><span>Красный</span>
                        </div>
                    </div>

                    <div class="uk-position-bottom-left uk-position-small md_hidden">
                        <div class="stepper stepper--style-3 js-spinner card-stepper">
                            <input autofocus type="number" min="1" max="10" step="1" value="1" class="stepper__input card-stepper__input">
                            <div class="stepper__controls">
                                <button style="background-color: transparent; right: 18px;" type="button" spinner-button="up"><i class="fa fa-chevron-right"></i></button>
                                <button style="background-color: transparent;" type="button" spinner-button="down"><i class="fa fa-chevron-left"></i></button>
                            </div>
                        </div>

                        <button class="card-slideshow__btn add-to-card-button" data-product-id="{{ $product->id }}"><i class="fa fa-shopping-cart"></i>&nbsp; Добавить в корзину</button>
                    </div>
                    <div class="stepper stepper--style-3 js-spinner card-stepper md_visible">
                        <input autofocus type="number" min="1" max="10" step="1" value="1" class="stepper__input card-stepper__input">
                        <div class="stepper__controls">
                            <button style="background-color: transparent; right: 18px;" type="button" spinner-button="up"><i class="fa fa-chevron-right"></i></button>
                            <button style="background-color: transparent;" type="button" spinner-button="down"><i class="fa fa-chevron-left"></i></button>
                        </div>
                    </div>

                    <button class="card-slideshow__btn md_visible"><i class="fa fa-shopping-cart"></i>&nbsp; Добавить в корзину</button>

                </div>

            </div>

            <h2 class="card__title">{{ $product->title }}</h2>
        </div>
    </section>


    <section class="card-descr" id="card-descr">

        <div class="container">
            <h2 class="section-title">{{ number_format($product->price, 0, ',', ' ') }} сум</h2>

            <div class="row">
                <div class="col-lg-4">
                    <h4 class="card-descr__title">Описание</h4>
                    <p class="card-descr__txt">{{ $product->description }}</p>
                </div>
                <div class="col-lg-4 order-last order-lg-0">
                    <h4 class="card-descr__title">Доставка</h4>
                    <p class="card-descr__txt">
                        Бесплатная доставка в Узбекистан. Политика возврата 30 дней. Оплата пошлин и налогов (DDP). Пятилетняя гарантия.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h4 class="card-descr__title">Характеристики</h4>
                    <p class="card-descr__txt">
                        Тщательно разработанный в Швеции и изготовленный в Пфорцхайме, Германия, с использованием тщательно продуманных высококачественных компонентов. Механизм от всемирно известного швейцарского производителя Ronda и стальной корпус 316L, изготовленный с тщательным сочетанием полированной и шлифованной отделки.
                    </p>
                </div>
            </div>

        </div>
        @if ($product->hasSidesImages())
            <div class="promoBlock">
                <div class="promoBlock__wrapper">
                    <div class="promoBlock__images">
                        <div class="promoBlock__img" style="background-image: url('{{ $product->getLeftImage() }}')"></div>
                        <div class="promoBlock__img" style="background-image: url('{{ $product->getLeftImage() }}')"></div>
                        <div class="promoBlock__img promoBlock__img--active" style="background-image: url('{{ $product->getFrontImage() }}')"></div>
                        <div class="promoBlock__img" style="background-image: url('{{ $product->getRightImage() }}')"></div>
                        <div class="promoBlock__img" style="background-image: url('{{ $product->getRightImage() }}')"></div>
                    </div>
                    <div class="promoBlock__hoverFields">
                        <div class="promoBlock__field"></div>
                        <div class="promoBlock__field"></div>
                        <div class="promoBlock__field"></div>
                        <div class="promoBlock__field"></div>
                        <div class="promoBlock__field"></div>
                    </div>
                </div>
            </div>
        @endif

    </section>
@endsection

@section('js')
    <script>
        jQuery(function() {
            $('.add-to-card-button').on('click', function(e) {
                e.preventDefault();
                let element = $(this);
                let quantity = parseInt(element.prev().find('.card-stepper__input').val());
                let productId = element.data('product-id');
                $.ajax({
                    url: '{{ route('cart.add') }}',
                    'method': 'post',
                    data: {_token: '{{ csrf_token() }}', productId, quantity: quantity},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            });
        })
    </script>
@endsection
