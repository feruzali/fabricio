@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Заявка № {{ $request->id }}</h3>
                    <div class="block-options">
                        @if (!$request->confirmed())
                            <a href="{{ route('requests.confirm', $request->id) }}" class="btn btn-alt-primary btn-sm"><i class="fa fa-check"></i> Подтвердить</a>
                        @endif
                    </div>
                </div>
                <div class="block-content">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <h3 class="font-w600">Заказчик</h3>
                            <p>{{ $request->company_name }}</p>
                            <h3 class="font-w600">Адрес</h3>
                            <p>{{ $request->address }}</p>
                            <h3 class="font-w600">Email</h3>
                            <p>{{ $request->user->email }}</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h3 class="font-w600">Банк</h3>
                            <p>{{ $request->bank }}</p>
                            <h3 class="font-w600">ИНН</h3>
                            <p>{{ $request->tin }}</p>
                            <h3 class="font-w600">ОКЭД</h3>
                            <p>{{ $request->ctea }}</p>
                            <h3 class="font-w600">МФО</h3>
                            <p>{{ $request->mfi }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
