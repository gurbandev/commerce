@extends('layouts.app')
@section('title')
    @lang('app.login')
@endsection
@section('content')
    <div class="container-xl py-3">
        <div class="row justify-content-center">
            <div class="col-8 col-sm-6 col-md-4 col-lg-3">
                <div class="h3 text-center mb-3">
                    @lang('app.login')
                </div>

                <form action="{{ route('login') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="username" class="form-label fw-semibold">
                            @lang('app.username')
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" value="{{ old('username') }}" required autofocus>
                        @error('username')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">
                            @lang('app.password')
                            <span class="text-danger">*</span>
                        </label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password') }}" required>
                        @error('password')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="remember">
                        <label class="form-check-label" for="remember">
                            @lang('app.rememberMe')
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        @lang('app.login')
                    </button>
                </form>

                <div class="text-center mt-3">
                    <a href="{{ route('register') }}" class="text-decoration-none">
                        @lang('app.createNewAccount')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection