@extends('admin.layouts.app')

@section('content')
    <h2 class="content-heading">Заказы</h2>
    <div class="block">
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center font-w600">№</th>
                            <th class="text-center font-w600">Заказчик</th>
                            <th class="text-center font-w600">Номер телефона</th>
                            <th class="text-center font-w600">Email</th>
                            <th class="text-center font-w600">Общая сумма</th>
                            <th class="text-center font-w600">Статус</th>
                            <th class="text-center font-w600">Дата</th>
                            <th class="text-center font-w600">Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td class="text-center">{{ $order->id }}</td>
                                <td class="text-center">{{ $order->company_name }} | {{ $order->name }}</td>
                                <td class="text-center">{{ $order->phone_number }}</td>
                                <td class="text-center">{{ $order->email }}</td>
                                <td class="text-center">{{ number_format($order->getTotalAmount(), 0, ',', ' ') }} RMB</td>
                                <td class="text-center">
                                    @if ($order->status == 'new')
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAABmJLR0QA/wD/AP+gvaeTAAAA90lEQVQokZXRPUsDURCF4SfuKn40aQRRhIAQEFvByt4ijY3/Igg2tiIIphQbU/hDLGJrGyxDLC1cUAsJiBhjkRGWdZF1YIo7c965d85N/I4N3GABO7jELV5LtKCFY/QxKWQ/eq0y8KEEKOawCO1hXAEchxa0KwDFbKcYxIAjnOIqjLnHbvTW8YIZrGKQxgS4w1nssYQVNHGCBp6R4AKTFJ0A1/CFJ9MvOY96DZ+YxRuW0UmQYR+P8dwhtnAdYBPbUWtgM3wBvX8Y0xPLip2qxmL+UMcBRn/cNApNvWxaN4zIckAWtW5eWCuA80jxYWo7HGIu4Pcf4TeSWmIP0DljewAAAABJRU5ErkJggg==">
                                    @elseif ($order->status == 'viewed')
                                        <i class="fa fa-eye text-info" data-toggle="tooltip" title="Просмотрено"></i>
                                    @elseif ($order->status == 'process')
                                        <i class="fa fa-arrow-right text-primary" data-toggle="tooltip" title="В процессе"></i>
                                    @elseif ($order->status == 'done')
                                        <i class="fa fa-check text-primary" data-toggle="tooltip" title="Готов"></i>
                                    @endif
                                </td>
                                <td class="text-center">{{ $order->created_at }}</td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-sm btn-alt-primary"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
