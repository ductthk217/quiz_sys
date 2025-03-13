@extends('layouts.horizontal-guest')

@section('title', 'Đăng nhập')

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
                <h5 class="font-18 text-center">Sign in to continue to {{ WEB_NAME }}.</h5>

                <form class="form-horizontal m-t-30" method="POST" action="{{ route('post-login') }}">
                    @csrf

                    <div class="form-group">
                        <div class="col-12">
                            <x-input-label for="email" :value="__('title.username')" class="col-sm-12 col-form-label"/>
                            <x-form.input id="email" name="email" type="email" class="form-control mt-1 w-full" autofocus autocomplete="email" value="{{ old('email') }}"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-12">
                            <x-input-label for="password" :value="__('title.password')" class="col-sm-12 col-form-label"/>
                            <x-form.input id="password" name="password" type="password" class="form-control mt-1 w-full" autofocus autocomplete="password" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-12">
                            <div class="checkbox checkbox-primary">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="remember_me" type="checkbox" name="remember">
                                    <label class="custom-control-label" for="remember_me"> {{ __('title.remember_me') }}</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center m-t-20">
                        <div class="col-12">
                            <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">{{ __('title.login') }}</button>
                        </div>
                    </div>

                    <div class="form-group row m-t-30 m-b-0">
                        <div class="col-sm-7">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-muted"><i class="fa fa-lock m-r-5"></i> {{ __('messages.forgot_password') }}</a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
