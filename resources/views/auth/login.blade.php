@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="{{ asset('css/color.css') }}">

@section('content')
    <div class="container ">
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <div class="card shadow-lg" style="background-color: #6dbf67;">
                    <div class="card-header text-center mx-0 p-0 ">
                        <img src="../resources/img/logo.png" alt="logo" srcset="" class="logo-login mt-0">
                        <span class="text-light fw-bold">Login</span>
                    </div>

                    <div class="card-body bgLogin">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <label for="email" class="col-md-4 col-form-label text-md-end text-light">
                                        {{ __('Alamat Email') }}
                                    </label>
                                </div>

                            </div>
                            <div class="row justify-content-center mb-3">
                                <div class="col-md-7">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <label for="email" class="col-md-8 col-form-label text-md-end text-light">
                                        {{ __('Password') }}
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="col-md-9 col-form-label text-md-end text-light">
                                        {{ __('Masukkan Kata Sandi') }}
                                    </label>
                                </div>

                            </div>
                            <div class="row justify-content-center mb-3">
                                <div class="col-md-7">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row justify-content-center mb-3">
                                <div class="col-md-7">
                                    <div class="form-check">
                                        <input class="form-check-input " type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label text-light" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="row justify-content-center mb-3">
                                <div class="col-md-7">
                                    <button type="submit" class="btn  w-100 btn-success btn-outline-light">
                                        {{ __('Login') }}
                                    </button>


                                </div>

                            </div>


                            <div class="row justify-content-center mb-3">
                                <div class="col-12 text-center">
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
        </div>
    </div>
@endsection
