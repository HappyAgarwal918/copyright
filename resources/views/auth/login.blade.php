@extends('layouts.master')
@section('content')

@section('content')

<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Log in</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
    <div class="container">
        <div class="row">
        <div class="col-xl-4 col-lg-3 col-md-2"></div>
        <div class="col-xl-4 col-lg-6 col-md-8">
            <div class="card text-center">
                <div class="col-lg-12 login-key text-center">
                    <i class="fa fa-key" aria-hidden="true"></i><h3>Login</h3>
                </div>
                <div class="card-body login-page">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group pb-3">
                            <label for="email" class="col-form-label float-start">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group pb-3">
                            <label for="password" class="col-form-label float-start">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group pb-3">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input float-none" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group pb-3">
                            <div class="">
                                <button type="submit" class="ybtn ybtn-header-color">{{ __('Login') }}</button>
                                <a href="{{route('register')}}" type="submit" class="ybtn ybtn-white ybtn-shadow">Sign Up</a><br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-3 col-md-2"></div>
        </div>
    </div>
</div>
@endsection
