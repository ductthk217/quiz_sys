@extends('layouts.horizontal-guest')

@section('title', 'Quên mật khẩu')

@section('content')
    <div class="accountbg"></div>
    <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-white"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="wrapper-page">
        <div class="card card-pages shadow-none">
            <div class="card-body">
                <div class="text-center m-t-0 m-b-15">
                    <a href="index.html" class="logo logo-admin"><img src="{{ checkImage(WEB_LOGO) }}" alt=""
                            height="24"></a>
                </div>
                <h5 class="font-18 text-center">{{ __('messages.forgot_password') }}</h5>
                <p>{{ __('messages.forgot_password_message') }}                </p>
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form class="form-horizontal m-t-30" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group">
                        <div class="col-12">
                            <label>{{ __('title.username') }}</label>
                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus 
                            autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                    <div class="form-group text-center m-t-20">
                        <div class="col-12">
                            <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">{{ __('Email Password Reset Link') }}</button>
                        </div>
                    </div>

                    <a href="{{ route('login') }}" class="text-muted"><i class="fas fa-sign-in-alt m-r-5"></i> {{ __('title.login') }}</a>

                </form>
            </div>
        </div>
    </div>
@endsection

