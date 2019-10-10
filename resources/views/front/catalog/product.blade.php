@extends('front.layouts.app')

@section('content')
    <section class="card" id="card">
        <div class="container">
            <div uk-slideshow>=
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                    <ul class="uk-slideshow-items darkk__bg">
                        @foreach($product->img as $productImage)
                            <li>
                                <img class="uk-position-center uk-margin-large-left" src="{{ $productImage->getImage() }}" alt="{{ $product->title }}">
                                <div class="uk-overlay uk-position-center-left uk-position-small">
                                    <div class="circle" style="background-color: #4986ff;"><i class="fa fa-check"></i></div>
                                    <div class="circle" style="background-color: #76d2e6;"><i class="fa fa-check"></i></div>
                                    <div class="circle" style="background-color: #f593a7;"><i class="fa fa-check"></i></div>
                                </div>
                                <div class="uk-overlay uk-position-bottom-right uk-position-small">
                                    <p class="darkk">{{ $product->title }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="">
                        <i class="fa fa-long-arrow-left" uk-slideshow-item="previous"></i>
                        <i class="fa fa-long-arrow-right" uk-slideshow-item="next"></i>
                    </div>
                    <button class="darkk__btn"><i class="fa fa-shopping-cart"></i>&nbsp; Add to card</button>
                    <div class="uk-position-center-right uk-position-large">
                        <ul class="uk-slideshow-nav uk-dotnav uk-dotnav-vertical"></ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="descr" id="descr">

        <div class="container">
            <h2 class="section-title">{{ number_format($product->price, $thousands_sep = ' ') }} сум</h2>

            <div class="row">
                <div class="col-4">
                    <h4>Описание</h4>
                    <p>{{ $product->description }}</p>
                </div>
                <div class="col-4">
                    <h4>Доставка</h4>
                    <p>Free shipping to Uzbekistan
                        30 days returns policy
                        Duty & tax paid (DDP)
                        Five-year warranty</p>
                </div>
                <div class="col-4">
                    <h4>Характеристики</h4>
                    <p>Designed with care in Sweden and crafted in Pforzheim, Germany using thoughtfully sourced, high-grade components. Movement from the world-renowned Swiss manufacturer Ronda and a 316L steel case produced with a careful combination of brushed and polished finishes. </p>
                </div>
            </div>

        </div>

    </section>
@endsection
