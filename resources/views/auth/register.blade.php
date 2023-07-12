@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="{{ asset('css/color.css') }}">
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg" style="background-color: #6dbf67;">
                    <div class="card-header text-center mx-0 p-0">
                        <img src="../resources/img/logo.png" alt="logo" srcset="" class="logo-login mt-0">
                        <span class="text-light fw-bold">{{ __('Register') }}</span>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row justify-content-center">
                                <div class="col-md-7">
                                    <label for="email" class="col-md-4 col-form-label text-light">
                                        {{ __('Masukkan Nama') }}
                                    </label>
                                </div>
                            </div>

                            <div class="row justify-content-center mb-3">
                                <div class="col-md-7">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-7">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-light">{{ __('Email Address') }}</label>
                                </div>
                            </div>

                            <div class="row justify-content-center mb-3">
                                <div class="col-md-7">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-7">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-light">{{ __('Password') }}</label>
                                </div>
                            </div>

                            <div class="row justify-content-center mb-3">
                                <div class="col-md-7">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-7">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-light">{{ __('Confirm Password') }}</label>
                                </div>
                            </div>

                            <div class="row justify-content-center mb-3">
                                <div class="col-md-7">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row justify-content-center mb-3">
                                <div class="col-md-7">
                                    <button type="submit" class="btn  w-100 btn-success btn-outline-light">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
