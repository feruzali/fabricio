@extends('front.layouts.app')

@section('title', $category->ru_title)

@section('content')
  <section class="catalog" id="catalog">
    <div class="container">
      <h2 class="page-title">{{ $category->ru_title }}</h2>

      <div class="catalog__filter_md md_visible">
        <ul class=" uk-nav-parent-icon nav-bar-list catalog__sort_md" uk-nav="multiple: true">
          <li class="catalog__sortItem_md uk-parent">
            <a href="#">All types</a>
            <ul class="uk-nav-sub catalog__sort_md-dropdown">
              <li class="catalog__sort_md-dropdown__item"><a href="#">Мои талоны</a></li>
              <li class="catalog__sort_md-dropdown__item"><a href="#">Корзина услуг</a></li>
              <li class="catalog__sort_md-dropdown__item"><a href="#">Заявление на прикрепление</a></li>
              <li class="catalog__sort_md-dropdown__item"><a href="#">Запись на прием</a></li>
              <li class="catalog__sort_md-dropdown__item"><a href="#">Диспансеризация</a></li>
            </ul>
          </li>
          <li class="catalog__sortItem_md uk-parent">
            <a href="#">Категории</a>
            <ul class="uk-nav-sub catalog__sort_md-dropdown">
              @foreach ($categories as $categoryObject)
                  <li class="catalog__sort_md-dropdown__item" data-category-id="{{ $categoryObject->id }}">{{ $categoryObject->ru_title }}</li>
              @endforeach"
            </ul>
          </li>
          <li class="catalog__sortItem_md uk-parent">
            <a href="#">Бренд</a>
            <ul class="uk-nav-sub catalog__sort_md-dropdown">
                @foreach ($category->getAllBrands() as $brand)
                    <li class="catalog__sort_md-dropdown__item" data-brand-id=" {{$brand->id }} ">{{ $brand->title }}</li>
                @endforeach
            </ul>
          </li>
          <li class="catalog__sortItem_md uk-parent">
            <a href="#">Сортировать</a>
            <ul class="uk-nav-sub catalog__sort_md-dropdown">
              <li class="catalog__sort_md-dropdown__item"><a href="#">Мои талоны</a></li>
              <li class="catalog__sort_md-dropdown__item"><a href="#">Корзина услуг</a></li>
              <li class="catalog__sort_md-dropdown__item"><a href="#">Заявление на прикрепление</a></li>
              <li class="catalog__sort_md-dropdown__item"><a href="#">Запись на прием</a></li>
              <li class="catalog__sort_md-dropdown__item"><a href="#">Диспансеризация</a></li>
            </ul>
          </li>
          <li class="catalog__sortItem_md uk-parent">
            <a href="#">Price</a>
            <ul class="uk-nav-sub catalog__sort_md-dropdown">
              <li class="catalog__sort_md-dropdown__item"><a href="#">Мои талоны</a></li>
              <li class="catalog__sort_md-dropdown__item"><a href="#">Корзина услуг</a></li>
              <li class="catalog__sort_md-dropdown__item"><a href="#">Заявление на прикрепление</a></li>
              <li class="catalog__sort_md-dropdown__item"><a href="#">Запись на прием</a></li>
              <li class="catalog__sort_md-dropdown__item"><a href="#">Диспансеризация</a></li>
            </ul>
          </li>
        </ul>
      </div>

      <div class="catalog__filter md_hidden">
        <div class="catalog__sort">
          <div class="catalog__sortItem">
            <div class="catalog__sortCurrent" id="catalogType">
              <span class="lbl">All types&nbsp; <i class="fa fa-angle-down"></i></span>
              <div class="" style="width: auto; padding: 0; white-space: nowrap; margin-top: 0; box-shadow: 0 0 62px rgba(20, 47, 106, 0.47); border-radius: 8px 10px 10px; background-color: #ffffff;" uk-dropdown="mode: hover; offset: 30">
                <ul class="uk-nav catalog__sort__dropdown">
                  <li class="catalog__sort__dropdown__item"><a href="#">Мои талоны</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Корзина услуг</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Заявление на прикрепление</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Запись на прием</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Диспансеризация</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="catalog__sortItem">
            <div class="catalog__sortCurrent" id="catalogPeople">
              <span class="lbl">Категории&nbsp; <i class="fa fa-angle-down"></i></span>
              <div class="" style="width: auto; padding: 0; white-space: nowrap; margin-top: 0; box-shadow: 0 0 62px rgba(20, 47, 106, 0.47); border-radius: 8px 10px 10px; background-color: #ffffff;" uk-dropdown="mode: hover; offset: 30">
                <ul class="uk-nav catalog__sort__dropdown">
                  <li class="catalog__sort__dropdown__item"><a href="#">Мои талоны</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Корзина услуг</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Заявление на прикрепление</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Запись на прием</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Диспансеризация</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="catalog__sortItem">
            <div class="catalog__sortCurrent" id="catalogBrand">
              <span class="lbl">Бренд&nbsp; <i class="fa fa-angle-down"></i></span>
              <div class="" style="width: auto; padding: 0; white-space: nowrap; margin-top: 0; box-shadow: 0 0 62px rgba(20, 47, 106, 0.47); border-radius: 8px 10px 10px; background-color: #ffffff;" uk-dropdown="mode: hover; offset: 30">
                <ul class="uk-nav catalog__sort__dropdown">
                  <li class="catalog__sort__dropdown__item"><a href="#">Мои талоны</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Корзина услуг</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Заявление на прикрепление</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Запись на прием</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Диспансеризация</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="catalog__sortItem">
            <div class="catalog__sortCurrent" id="popularity">
              <span class="lbl">Сортировать&nbsp; <i class="fa fa-angle-down"></i></span>
              <div class="" style="width: auto; padding: 0; white-space: nowrap; margin-top: 0; box-shadow: 0 0 62px rgba(20, 47, 106, 0.47); border-radius: 8px 10px 10px; background-color: #ffffff;" uk-dropdown="mode: hover; offset: 30">
                <ul class="uk-nav catalog__sort__dropdown">
                  <li class="catalog__sort__dropdown__item"><a href="#">Мои талоны</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Корзина услуг</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Заявление на прикрепление</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Запись на прием</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Диспансеризация</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="catalog__sortItem">
            <div class="catalog__sortCurrent" id="catalogPrice">
              <span class="lbl">Price&nbsp; <i class="fa fa-angle-down"></i></span>
              <div class="" style="width: auto; padding: 0; white-space: nowrap; margin-top: 0; box-shadow: 0 0 62px rgba(20, 47, 106, 0.47); border-radius: 8px 10px 10px; background-color: #ffffff;" uk-dropdown="mode: hover; offset: 30">
                <ul class="uk-nav catalog__sort__dropdown">
                  <li class="catalog__sort__dropdown__item"><a href="#">Мои талоны</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Корзина услуг</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Заявление на прикрепление</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Запись на прием</a></li>
                  <li class="catalog__sort__dropdown__item"><a href="#">Диспансеризация</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>


      <div uk-slideshow="animation: push; max-height: 262;" class="catalog-slider uk-margin-medium-bottom md_hidden" index="1">

        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
          <ul class="uk-slideshow-items">
            <li>
              <img src="img/category/slider/1.jpg" alt=""  class="uk-cover">
              <div class="uk-overlay uk-position-center uk-position-small">
                <h3 class="catalog-slider__title">The Universe Through A Child S Eyes</h3>
                <p class="uk-margin-large-top catalog-slider__subtitle">Start sales</p>
              </div>
            </li>
            <li>
              <img src="img/category/slider/2.jpg" alt=""  class="uk-cover">
              <div class="uk-overlay uk-position-center uk-position-small">
                <h3 class="catalog-slider__title">The Universe Through A Child S Eyes</h3>
                <p class="uk-margin-large-top catalog-slider__subtitle">Start sales</p>
              </div>
            </li>
            <li>
              <img src="img/category/slider/1.jpg" alt=""  class="uk-cover">
              <div class="uk-overlay uk-position-center uk-position-small">
                <h3 class="catalog-slider__title">The Universe Through A Child S Eyes</h3>
                <p class="uk-margin-large-top catalog-slider__subtitle">Start sales</p>
              </div>
            </li>
          </ul>

          <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
          <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

          <div class="uk-position-bottom-center">
            <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin catalog-slider-dotnav"></ul>
          </div>
        </div>
      </div>

    </div>

    <div uk-slideshow="animation: push;" class="catalog-slider uk-margin-medium-bottom md_visible" index="1">
      <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
        <ul class="uk-slideshow-items">
          <li>
            <img src="img/category/slider/1.jpg" alt=""  class="uk-cover">
            <div class="uk-overlay uk-position-center uk-position-small">
              <h3 class="catalog-slider__title catalog-slider__title_md">The Universe Through A Child S Eyes</h3>
              <p class="uk-margin-large-top catalog-slider__subtitle">Start sales</p>
            </div>
          </li>
          <li>
            <img src="img/category/slider/2.jpg" alt=""  class="uk-cover">
            <div class="uk-overlay uk-position-center uk-position-small">
              <h3 class="catalog-slider__title catalog-slider__title_md">The Universe Through A Child S Eyes</h3>
              <p class="uk-margin-large-top catalog-slider__subtitle">Start sales</p>
            </div>
          </li>
          <li>
            <img src="img/category/slider/1.jpg" alt=""  class="uk-cover">
            <div class="uk-overlay uk-position-center uk-position-small">
              <h3 class="catalog-slider__title catalog-slider__title_md">The Universe Through A Child S Eyes</h3>
              <p class="uk-margin-large-top catalog-slider__subtitle">Start sales</p>
            </div>
          </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

      </div>

    </div>

    <div class="container">

      <div class="row">

        @foreach($products as $product)
          <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
            <div class="catalog-card">
              <div class="catalog-card__img">
                <img src="{{ $product->getImage() }}" alt="">
              </div>
              <div class="catalog-card-choice">
                @foreach($product->getAllImages() as $img)
                  <div class="catalog-card-choice__elem">
                    <img src="{{ $img->getImage() }}" alt="">
                  </div>
                @endforeach
              </div>
              <div class="catalog-card__title">
                {{ $product->ru_title }}
              </div>
              <div class="catalog-card__buy">
                <span class="catalog-card__price">$ 69.94</span>
                <i class="fa fa-shopping-cart"></i>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      {{-- <div class="loadmore">
        <div class="spinner-border text-primary" style="width: 40px; height: 40px; margin-right: 10px;" role="status"></div>
        load more
      </div> --}}
    </div>
  </section>
@endsection
