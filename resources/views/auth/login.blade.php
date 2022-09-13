@php
    $bodyClass = 'login';
    $hideTop = true;
@endphp
@extends('templates.main')

@section('main-content')
    <div class="container">
        <div class="row justify-content-center vh-100 d-flex flex-column justify-content-center">
            <div class="col-md-5 mx-auto d-flex flex-column">
                <img src="{{ asset('img/scoreboard-logo-red.png') }}" alt="" class="mx-auto mb-3"
                     style="max-height: 200px;">
                <div class="bg-secondary rounded p-4">
                    <h4 class="mb-3 text-center">{{ __('Login') }}</h4>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" class="">
                            @csrf

                            <div class="form-floating mb-3">

                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>

                            <div class="form-floating mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                            </div>

                            <div class="form-floating mb-0">
                                    <button type="submit" class="btn btn-primary btn-lg w-100">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
