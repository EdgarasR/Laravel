@extends('layouts.shop')

@section('title', 'Products')

@section('content')
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    @foreach ($orders as $order)
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Order ID - {{ $order->id }}</h4>
            </div>
            <div class="card-body">
                <h3>User ID - {{ $order->user_id }}</h3>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection