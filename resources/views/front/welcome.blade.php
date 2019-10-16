@extends('front.layouts.app')

@section('content')

    <section class="main" id="main">

        <div class="main-slider xs_visible">
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="max-height: 490" index="1">

                <ul class="uk-slideshow-items">
                    <li>
                        <img src="img/slider/slide1.jpg" alt="" uk-cover>
                        <div class="uk-position-top slideshow-items uk-margin-medium-left">
                            <h1 class="slideshow-items__title">Модные очки</h1>
                            <p class="slideshow-items__subtitle">По доступным ценам!</p>
                        </div>
                        <div class="uk-position-center main-slider-play">
                            <button class="main-slider-play__btn"><i class="fa fa-play"></i></button>
                        </div>
                        <div class="uk-position-bottom-left uk-position-small uk-margin-medium-left">
                            <button class="slideshow-items__btn">Смотреть каталог</button>
                        </div>
                    </li>
                    <li>
                        <img src="img/slider/slide1.jpg" alt="" uk-cover>
                        <div class="uk-position-top slideshow-items uk-margin-medium-left">
                            <h1 class="slideshow-items__title">Модные очки</h1>
                            <p class="slideshow-items__subtitle">По доступным ценам!</p>
                        </div>
                        <div class="uk-position-center main-slider-play">
                            <button class="main-slider-play__btn"><i class="fa fa-play"></i></button>
                        </div>
                        <div class="uk-position-bottom-left uk-position-small uk-margin-medium-left">
                            <button class="slideshow-items__btn">Смотреть каталог</button>
                        </div>
                    </li>
                    <li>
                        <img src="img/slider/slide1.jpg" alt="" uk-cover>
                        <div class="uk-position-top slideshow-items uk-margin-medium-left">
                            <h1 class="slideshow-items__title">Модные очки</h1>
                            <p class="slideshow-items__subtitle">По доступным ценам!</p>
                        </div>
                        <div class="uk-position-center main-slider-play">
                            <button class="main-slider-play__btn"><i class="fa fa-play"></i></button>
                        </div>
                        <div class="uk-position-bottom-left uk-position-small uk-margin-medium-left">
                            <button class="slideshow-items__btn">Смотреть каталог</button>
                        </div>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover slide-btn" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover slide-btn" href="#" uk-slidenav-next uk-slideshow-item="next"></a>


            </div>
        </div>

        <div class="container">

            <div class="main-slider xs_hidden">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="min-height: 0; max-height: 490" index="1">

                    <ul class="uk-slideshow-items">
                        @foreach($sliders as $slider)
                            <li>
                                <img src="{{asset($slider->getImage())}}" alt="" uk-cover>
                                <div class="uk-position-top slideshow-items">
                                    <h1 class="slideshow-items__title">
                                        {{$slider->ru_title}}
                                    </h1>
                                    <p class="slideshow-items__subtitle">{!! $slider->ru_description !!}</p>
                                    <button class="slideshow-items__btn">Смотреть каталог</button>
                                </div>
                                <div class="uk-position-bottom-left scrolldown"><img src="{{asset('front/img/slider/mouse.png')}}" alt="" class="scrolldown__img"><span class="scrolldown__txt">Листай вниз</span></div>
                                <div class="uk-position-center main-slider-play">
                                    <button class="main-slider-play__btn"><i class="fa fa-play"></i></button><br class="adap_hidden"> <br>
                                    <p class="main-slider-play__txt">Посмотреть <br>  видео 1 мин.</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover slide-btn" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover slide-btn" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                    <div class="uk-position-bottom-center uk-position-small">
                        <ul class="uk-dotnav">
                            <li uk-slideshow-item="0"><a href="#">Item 1</a></li>
                            <li uk-slideshow-item="1"><a href="#">Item 2</a></li>
                            <li uk-slideshow-item="2"><a href="#">Item 3</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-4 offset-sm-0 col-sm-6 offset-1 col-10">
                    <div class="main-card first">
                        <h4 class="main-card__title">Заголовок</h4>
                        <span>Мужские</span> <br>
                        <span>Женские</span>
                    </div>
                    <!-- /.main-card -->
                </div>
                <!-- /.col-4 -->
                <div class="col-md-4 offset-sm-0 col-sm-6 offset-1 col-10">
                    <div class="main-card second">
                        <h4 class="main-card__title">Заголовок</h4>
                        <span>Мужские</span> <br>
                        <span>Женские</span>
                    </div>
                    <!-- /.main-card -->
                </div>
                <!-- /.col-4 -->
                <div class="offset-md-0 col-md-4 offset-sm-3 col-sm-6 offset-1 col-10">
                    <div class="main-card third">
                        <h4 class="main-card__title">Заголовок</h4>
                        <span>Футляры</span> <br>
                        <span>Платочки</span>
                    </div>
                    <!-- /.main-card -->
                </div>
                <!-- /.col-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#main.main -->

    <section class="waranty" id="waranty">
        <div class="container">
            <h2 class="section-title">Заголовок</h2>
            <div class="row">
                <div class="offset-lg-0 col-lg-6 offset-md-1 col-md-10">

                    <div class="quality-card">
                        <h4 class="quality-card__title">Гарантия качества</h4>
                        <!-- /.quality-card__title -->
                        <p class="quality-card__descr">ООО "Optical Pro" ведущая компания в сфере оптической индустрии по всей Республике. Мы занимаем 1 место по поставке оптической продукции.</p>
                        <!-- /.quality-card__descr -->
                        <p class="quality-card__descr">Предоставляем оптическую продукцию международного уровня и ее широкий ассортимент. Мы, также, заботимся о благополучии партнеров. Благодаря взаимовыгодному сотрудничеству, у наших партнеров появляется больше - возможностей для процветания.</p>
                        <!-- /.quality-card__descr -->
                    </div>
                    <!-- /.quality-card -->
                </div>
                <!-- /.col-6 -->

                <div class="offset-lg-0 col-lg-3 offset-md-1 col-md-5 offset-sm-0 col-sm-6 offset-1 col-10">
                    <div class="waranty-card bg-wave">
                        <img src="{{asset('front/img/waranty/card2.png')}}" alt="" class="waranty-card__img">
                        <h5 class="waranty-card__title">Заголовок</h5>
                        <!-- /.waranty-card__title -->
                        <p class="waranty-card__descr">Мы нацелены на улуч- шения своего сервиса, расширения салонов и повышения узнавае-мости наших брендов.</p>
                        <!-- /.waranty-card__descr -->
                    </div>
                    <!-- /.waranty-card -->
                </div>
                <!-- /.col-3 -->

                <div class="col-lg-3 col-md-5 offset-sm-0 col-sm-6 offset-1 col-10">
                    <div class="waranty-card">
                        <img src="{{asset('front/img/waranty/card3.png')}}" alt="" class="waranty-card__img">
                        <h5 class="waranty-card__title">Заголовок</h5>
                        <!-- /.waranty-card__title -->
                        <p class="waranty-card__descr">Компания Optical Pro -  дружный коллектив со своими принципами и традициями. Для нас на 1 месте это качество.</p>
                        <!-- /.waranty-card__descr -->
                    </div>
                    <!-- /.waranty-card -->
                </div>
                <!-- /.col-3 -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#waranty.waranty -->

    <section class="map" id="map">
        <div class="container">
            <h2 class="section-title">Заголовок</h2>
            <!-- /.section-title -->
            <div class="map-wrapper">
                <div class="map-txt">
                    <h4 class="map-txt__title">Заголовок</h4>
                    <!-- /.map-txt__title -->
                    <p class="map-txt__descr">Мы гарантируем бесперебойность поставок с нашего производства - в ваш магазин.</p>
                    <!-- /.map-txt__descr -->
                </div>
                <!-- /.map-txt -->
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /#map.map -->

    <section class="features" id="features">
        <div class="container">
            <h2 class="section-title">Заголовок</h2>
            <!-- /.section-title -->
            <div class="features-wrapper">

                <div class="row">

                    <div class="col-lg-4 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="features-block">
                            <img src="{{asset('front/img/features/1.png')}}" alt="" class="features-block__img">
                            <div class="features-block__txt">
                                <h5 class="features-block__title">Преимущество</h5>
                                <p class="features-block__descr">В этом месте рекомендуется раз- тить инфу о всех преимуществах</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-6 -->

                    <div class="offset-xl-4 offset-lg-3 col-lg-4 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="features-block">
                            <img src="{{asset('front/img/features/2.png')}}" alt="" class="features-block__img">
                            <div class="features-block__txt">
                                <h5 class="features-block__title">Преимущество</h5>
                                <p class="features-block__descr">В этом месте рекомендуется раз- тить инфу о всех преимуществах</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-6 -->

                </div>
                <!-- /.row -->

                <div class="row features-blocks">

                    <div class="col-lg-4 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="features-block">
                            <img src="{{asset('front/img/features/3.png')}}" alt="" class="features-block__img">
                            <div class="features-block__txt">
                                <h5 class="features-block__title">Преимущество</h5>
                                <p class="features-block__descr">В этом месте рекомендуется раз- тить инфу о всех преимуществах</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-6 -->

                    <div class="offset-xl-4 offset-lg-3 col-lg-4 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="features-block">
                            <img src="{{asset('front/img/features/4.png')}}" alt="" class="features-block__img">
                            <div class="features-block__txt">
                                <h5 class="features-block__title">Преимущество</h5>
                                <p class="features-block__descr">В этом месте рекомендуется раз- тить инфу о всех преимуществах</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-6 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.features-wrapper -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#features.features -->


    <section class="goods" id="goods">
        <div class="container">



            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="">

                <h2 class="section-title uk-position-relative" style="color: black;">Заголовок</h2>

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m uk-child-width-1-4@l">
                    <li>

                        <div class="goods-card">
                            <div class="goods-card__img"><img src="{{asset('front/img/goods/1.png')}}" alt=""></div>
                            <!-- /.goods-card__img -->
                            <h5 class="goods-card__title">Название очков</h5>
                            <!-- /.goods-card__title -->
                            <div class="goods-card__price">70 000 сум</div>
                            <!-- /.goods-card__price -->
                            <span class="color">Цвет:</span> <br>
                            <div class="goods-card__color"></div>
                            <div class="goods-card__color"></div>
                            <div class="goods-card__bag"></div>
                        </div>
                        <!-- /.goods-card -->

                    </li>
                    <li>

                        <div class="goods-card">
                            <div class="goods-card__img"><img src="{{asset('front/img/goods/2.png')}}" alt=""></div>
                            <!-- /.goods-card__img -->
                            <h5 class="goods-card__title">Название очков</h5>
                            <!-- /.goods-card__title -->
                            <div class="goods-card__price">70 000 сум</div>
                            <!-- /.goods-card__price -->
                            <span class="color">Цвет:</span> <br>
                            <div class="goods-card__color"></div>
                            <div class="goods-card__color"></div>
                            <div class="goods-card__bag"></div>
                        </div>
                        <!-- /.goods-card -->

                    </li>
                    <li>

                        <div class="goods-card">
                            <div class="goods-card__img"><img src="{{asset('front/img/goods/3.png')}}" alt=""></div>
                            <!-- /.goods-card__img -->
                            <h5 class="goods-card__title">Название очков</h5>
                            <!-- /.goods-card__title -->
                            <div class="goods-card__price">70 000 сум</div>
                            <!-- /.goods-card__price -->
                            <span class="color">Цвет:</span> <br>
                            <div class="goods-card__color" style="background-color: #fed0d2"></div>
                            <div class="goods-card__color"></div>
                            <div class="goods-card__bag"></div>
                        </div>
                        <!-- /.goods-card -->

                    </li>
                    <li>

                        <div class="goods-card">
                            <div class="goods-card__img"><img src="{{asset('front/img/goods/4.png')}}" alt=""></div>
                            <!-- /.goods-card__img -->
                            <h5 class="goods-card__title">Название очков</h5>
                            <!-- /.goods-card__title -->
                            <div class="goods-card__price">70 000 сум</div>
                            <!-- /.goods-card__price -->
                            <span class="color">Цвет:</span> <br>
                            <div class="goods-card__color" style="background-color: #fed0d2"></div>
                            <div class="goods-card__color"></div>
                            <div class="goods-card__bag"></div>
                        </div>
                        <!-- /.goods-card -->

                    </li>
                    <li>

                        <div class="goods-card">
                            <div class="goods-card__img"><img src="{{asset('front/img/goods/1.png')}}" alt=""></div>
                            <!-- /.goods-card__img -->
                            <h5 class="goods-card__title">Название очков</h5>
                            <!-- /.goods-card__title -->
                            <div class="goods-card__price">70 000 сум</div>
                            <!-- /.goods-card__price -->
                            <span class="color">Цвет:</span> <br>
                            <div class="goods-card__color"></div>
                            <div class="goods-card__color"></div>
                            <div class="goods-card__bag"></div>
                        </div>
                        <!-- /.goods-card -->

                    </li>
                    <li>

                        <div class="goods-card">
                            <div class="goods-card__img"><img src="{{asset('front/img/goods/2.png')}}" alt=""></div>
                            <!-- /.goods-card__img -->
                            <h5 class="goods-card__title">Название очков</h5>
                            <!-- /.goods-card__title -->
                            <div class="goods-card__price">70 000 сум</div>
                            <!-- /.goods-card__price -->
                            <span class="color">Цвет:</span> <br>
                            <div class="goods-card__color"></div>
                            <div class="goods-card__color"></div>
                            <div class="goods-card__bag"></div>
                        </div>
                        <!-- /.goods-card -->

                    </li>
                    <li>

                        <div class="goods-card">
                            <div class="goods-card__img"><img src="{{asset('front/img/goods/3.png')}}" alt=""></div>
                            <!-- /.goods-card__img -->
                            <h5 class="goods-card__title">Название очков</h5>
                            <!-- /.goods-card__title -->
                            <div class="goods-card__price">70 000 сум</div>
                            <!-- /.goods-card__price -->
                            <span class="color">Цвет:</span> <br>
                            <div class="goods-card__color" style="background-color: #fed0d2"></div>
                            <div class="goods-card__color"></div>
                            <div class="goods-card__bag"></div>
                        </div>
                        <!-- /.goods-card -->

                    </li>
                    <li>

                        <div class="goods-card">
                            <div class="goods-card__img"><img src="{{asset('front/img/goods/4.png')}}" alt=""></div>
                            <!-- /.goods-card__img -->
                            <h5 class="goods-card__title">Название очков</h5>
                            <!-- /.goods-card__title -->
                            <div class="goods-card__price">70 000 сум</div>
                            <!-- /.goods-card__price -->
                            <span class="color">Цвет:</span> <br>
                            <div class="goods-card__color" style="background-color: #fed0d2"></div>
                            <div class="goods-card__color"></div>
                            <div class="goods-card__bag"></div>
                        </div>
                        <!-- /.goods-card -->

                    </li>

                </ul>


                <div class="slide-btns">
                    <a class=" slide-btn slide-btns_prev" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class=" slide-btn slide-btns_next" uk-slidenav-next uk-slider-item="next"></a>
                </div>


            </div>

        </div>
        <!-- /.container -->
    </section>
    <!-- /#goods.goods -->

    <section class="feedback" id="feedback">
        <div class="container">
            <h2 class="section-title">Заголовок</h2>

            <div class="row">

                <div class="offset-xl-0 offset-lg-1 col-md-8 col-10">
                    <div class="form-wrapper">
                        <h4 class="form-wrapper__title">Остались вопросы?</h4>
                        <div class="form-wrapper__subtitle">Отправьте их нам!</div>
                        <form action="#">
                            <input type="text" placeholder="Ваше имя">
                            <input type="email" placeholder="Ваш e-mail">
                            <input type="tel" placeholder="Ваш номер">
                            <textarea name="" id="" cols="50" rows="4" placeholder="Ваш вопрос"></textarea>
                            <button class="form__btn">Отправить</button>
                        </form>
                    </div>
                </div>
                <!-- /.col-8 -->

                <div class="offset-xl-0 col-xl-4 col-lg-6 offset-md-3 col-md-7 offset-sm-1 col-sm-9 offset-1 col-10">
                    <div class="contacts">
                        <h4 class="contacts__title">Наши контакты</h4>
                        <div class="contacts__subtitle">Позвоните нам!</div>
                        <div class="row flex_adap">
                            <div class="col-2">
                                <div class="contacts__time-img"></div>
                                <div class="contacts__mail-img"></div>
                                <div class="contacts__geo-img"></div>
                                <div class="contacts__phone-img"></div>
                            </div>
                            <div class="col-10">
                                <div class="contacts__time">{{$contact->time}}</div>
                                <div class="contacts__mail"><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></div>
                                <div class="contacts__geo">{{$contact->address}}</div>
                                <div class="contacts__phone">{{$contact->number}}</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.contacts -->
                </div>
                <!-- /.col-4 -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#feedback.feedback -->

@endsection
