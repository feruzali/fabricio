@extends('admin.layouts.app')

@section('content')

    <h2 class="content-heading">Заказ № {{ $order->id }}</h2>
    <div class="row">
        <div class="col-12">
            <div class="block">
                <div class="block-content">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <h5 class="font-w600">Заказчик</h5>
                            <p>{{ $order->company_name }}</p>
                            <h5 class="font-w600">Адрес</h5>
                            <p>{{ $order->address }}</p>
                            <h5 class="font-w600">Email</h5>
                            <p>{{ $order->email }}</p>
                            <h5 class="font-w600">Имя заказчика</h5>
                            <p>{{ $order->name }}</p>
                            <h5 class="font-w600">Номер телефона</h5>
                            <p>{{ $order->phone_number }}</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h5 class="font-w600">Банк</h5>
                            <p>{{ $order->bank }}</p>
                            <h5 class="font-w600">ИНН</h5>
                            <p>{{ $order->tin }}</p>
                            <h5 class="font-w600">ОКЭД</h5>
                            <p>{{ $order->ctea }}</p>
                            <h5 class="font-w600">МФО</h5>
                            <p>{{ $order->mfi }}</p>
                        </div>
                    </div>
                    @if ($order->comment)
                        <div class="row">
                            <div class="col-12">
                                <h5 class="font-w600">Комментарий</h5>
                                <p>{{ $order->comment }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Заказанные товары</h3>
                </div>
                <div class="block-content">
                    <div class="list-group push list-group-flush">
                        @foreach($order->orderItems as $item)
                            <li class="list-group-item d-flex justify-content-between align-items-center"><span><img src="{{ $item->getImage() }}" class="img-avatar-rounded img-avatar48 img-avatar" alt=""><span class="ml-20 font-w600 font-size-md">{{ $item->title }}, {{ number_format($item->price, 0, ',', ' ') }} сум</span></span><span class="badge badge-pill badge-primary">{{ $item->quantity }}</span></li>
                        @endforeach
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-md">
                    Итого: {{ $order->getTotalAmount() }}
                </div>
            </div>
        </div>
    </div>
@endsection
