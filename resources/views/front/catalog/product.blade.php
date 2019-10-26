@extends('front.layouts.app')

@section('content')
    <section class="card" id="card">
        <div class="container">
            <div uk-slideshow class="card--slider" data-color="black">

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slideshow-items card-slideshow__bg" style="min-height: 624.375px;">
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="img/card/1.png" alt="">
                            
                            <div class="uk-overlay uk-position-bottom-right uk-position-small">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="img/card/1.png" alt="">
                            <div class="uk-overlay uk-position-bottom-right uk-position-small">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="img/card/1.png" alt="">
                            <div class="uk-overlay uk-position-bottom-right uk-position-small">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="img/card/1.png" alt="">
                            <div class="uk-overlay uk-position-bottom-right uk-position-small">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        
                    </ul>

                    <div class="uk-position-bottom-right uk-position-medium card-slideshow__nav">
                        <i class="fa fa-long-arrow-left" uk-slideshow-item="previous"></i>
                        <i class="fa fa-long-arrow-right" uk-slideshow-item="next"></i>
                    </div>
                    <div class="uk-position-center-right uk-position-large">
                        <ul class="uk-slideshow-nav uk-dotnav uk-dotnav-vertical"></ul>
                    </div>

                    <div class="uk-position-center-left uk-position-small">
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

                    <div class="stepper stepper--style-3 js-spinner">
                        <input autofocus type="number" min="1" max="10" step="1" value="1" class="stepper__input">
                        <div class="stepper__controls">
                            <button class="" type="button" spinner-button="up"><i class="fa fa-chevron-right"></i></button>
                            <button class="" type="button" spinner-button="down"><i class="fa fa-chevron-left"></i></button>
                        </div>
                    </div>

                    <button class="card-slideshow__btn"><i class="fa fa-shopping-cart"></i>&nbsp; Add to card</button>

                </div>

            </div>
            
            <div uk-slideshow class="card--slider" data-color="white" style="display: none;">

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slideshow-items card-slideshow__bg" style="min-height: 624.375px;">
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="img/card/1.png" alt="">
                            
                            <div class="uk-overlay uk-position-bottom-right uk-position-small">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="img/card/1.png" alt="">
                            <div class="uk-overlay uk-position-bottom-right uk-position-small">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="img/card/1.png" alt="">
                            <div class="uk-overlay uk-position-bottom-right uk-position-small">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                    </ul>

                    <div class="uk-position-bottom-right uk-position-medium card-slideshow__nav">
                        <i class="fa fa-long-arrow-left" uk-slideshow-item="previous"></i>
                        <i class="fa fa-long-arrow-right" uk-slideshow-item="next"></i>
                    </div>
                    <div class="uk-position-center-right uk-position-large">
                        <ul class="uk-slideshow-nav uk-dotnav uk-dotnav-vertical"></ul>
                    </div>

                    <div class="uk-position-center-left uk-position-small">
                        <div class="circle-wrapper" data-color="black">
                            <div class="circle" style="background-color: #4986ff;"><i class="fa fa-check"></i></div>
                        </div>
                        <div class="circle-wrapper circle-wrapper--active" data-color="white">
                            <div class="circle" style="background-color: #76d2e6;"><i class="fa fa-check"></i></div><span>Зелёный</span>
                        </div>
                        <div class="circle-wrapper" data-color="red">
                            <div class="circle" style="background-color: #f593a7;"><i class="fa fa-check"></i></div>
                        </div>
                    </div>

                    <div class="stepper stepper--style-3 js-spinner">
                        <input autofocus type="number" min="1" max="10" step="1" value="1" class="stepper__input">
                        <div class="stepper__controls">
                            <button class="" type="button" spinner-button="up"><i class="fa fa-chevron-right"></i></button>
                            <button class="" type="button" spinner-button="down"><i class="fa fa-chevron-left"></i></button>
                        </div>
                    </div>

                    <button class="card-slideshow__btn"><i class="fa fa-shopping-cart"></i>&nbsp; Add to card</button>

                </div>

            </div>

            <div uk-slideshow class="card--slider" data-color="red" style="display: none;">

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slideshow-items card-slideshow__bg" style="min-height: 624.375px;">
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="img/card/1.png" alt="">
                            
                            <div class="uk-overlay uk-position-bottom-right uk-position-small">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="img/card/1.png" alt="">
                            <div class="uk-overlay uk-position-bottom-right uk-position-small">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="img/card/1.png" alt="">
                            <div class="uk-overlay uk-position-bottom-right uk-position-small">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        <li class="card-slideshowItem">
                            <img class="uk-position-center uk-margin-large-left" src="img/card/1.png" alt="">
                            <div class="uk-overlay uk-position-bottom-right uk-position-small">
                                <p class="card-slideshow">Мужские солнцезащитные очки + ФУТЛЯР</p>
                            </div>
                        </li>
                        
                    </ul>

                    <div class="uk-position-bottom-right uk-position-medium card-slideshow__nav">
                        <i class="fa fa-long-arrow-left" uk-slideshow-item="previous"></i>
                        <i class="fa fa-long-arrow-right" uk-slideshow-item="next"></i>
                    </div>
                    <div class="uk-position-center-right uk-position-large">
                        <ul class="uk-slideshow-nav uk-dotnav uk-dotnav-vertical"></ul>
                    </div>

                    <div class="uk-position-center-left uk-position-small">
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

                    <div class="stepper stepper--style-3 js-spinner">
                        <input autofocus type="number" min="1" max="10" step="1" value="1" class="stepper__input">
                        <div class="stepper__controls">
                            <button class="" type="button" spinner-button="up"><i class="fa fa-chevron-right"></i></button>
                            <button class="" type="button" spinner-button="down"><i class="fa fa-chevron-left"></i></button>
                        </div>
                    </div>

                    <button class="card-slideshow__btn"><i class="fa fa-shopping-cart"></i>&nbsp; Add to card</button>

                </div>

            </div>
            
            <h2 class="card__title">{{ $product->title }}</h2>
        </div>
    </section>


    <section class="card-descr" id="card-descr">

        <div class="container">
            <h2 class="section-title">{{ number_format($product->price, 0, ',', ' ') }} сум</h2>

            <div class="row">
                <div class="col-4">
                    <h4 class="card-descr__title">Описание</h4>
                    <p class="card-descr__txt">{{ $product->description }}</p>
                </div>
                <div class="col-4">
                    <h4 class="card-descr__title">Доставка</h4>
                    <p class="card-descr__txt">Free shipping to Uzbekistan
                        30 days returns policy
                        Duty & tax paid (DDP)
                        Five-year warranty</p>
                </div>
                <div class="col-4">
                    <h4 class="card-descr__title">Характеристики</h4>
                    <p class="card-descr__txt">Designed with care in Sweden and crafted in Pforzheim, Germany using thoughtfully sourced, high-grade components. Movement from the world-renowned Swiss manufacturer Ronda and a 316L steel case produced with a careful combination of brushed and polished finishes. </p>
                </div>
            </div>

        </div>

        <div class="promoBlock">
            <div class="promoBlock__wrapper">
                <div class="promoBlock__images">
                    <div class="promoBlock__img" style="background-image: url('img/card/left.jpeg')"></div>
                    <div class="promoBlock__img" style="background-image: url('img/card/left.jpeg')"></div>
                    <div class="promoBlock__img promoBlock__img--active" style="background-image: url('img/card/center.jpeg')"></div>
                    <div class="promoBlock__img" style="background-image: url('img/card/right.jpeg')"></div>
                    <div class="promoBlock__img" style="background-image: url('img/card/right.jpeg')"></div>
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

    </section>
@endsection

@section('js')
    <script>
        jQuery(function() {
            $('#addToCartButton').on('click', function(e) {
                e.preventDefault();
                let element = $(this);
                let quantity = parseInt($('#quantityField').val());
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
