@extends('layouts.app')
@section('title')
    @lang('app.slider')
@endsection
@section('content')
    <div class="container-xl py-3">
        <div class="row justify-content-center">
            <div class="col-8 col-sm-6 col-md-4 col-lg-3">
                <div class="h3 text-center mb-3">
                    @lang('app.slider')
                </div>

                <form action="{{route('slider.store')}}" method="post">
                    @csrf

                    {{----}}

                    <button type="submit" class="btn btn-primary w-100">
                        @lang('app.save')
                    </button>
                </form>
            </div>

        </div>

    </div>