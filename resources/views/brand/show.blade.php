@extends('layouts.app')
@section('title')
    @lang('brand') - {{$brand->getName()}}
@endsection
@section('content')
    <div class='container-xl py-3'>
        <div class="fs-4 fw-semibold mb-3">
            {{ $brand->getName() }}
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xxl-4 g-4">
            @foreach($products as $product)
                <div class="col">
                    @include('app.product')
                </div>
            @endforeach
        </div>
    </div>
@endsection
