@extends('layouts.app')
@section('title')
    @lang('app.category')
@endsection
@section('content')
    <div class="container-xl py-3">
        <div class="row justify-content-center">
            <div class="col-8 col-sm-6 col-md-4 col-lg-3">
                <div class="h3 text-center mb-3">
                    @lang('app.category')
                </div>

                <form action="{{route('categories.store')}}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        @lang('app.save')
                    </button>
                </form>
            </div>

        </div>

    </div>