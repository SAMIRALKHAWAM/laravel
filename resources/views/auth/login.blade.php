@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"><br>
                <div class="card-header">{{ __('Login') }}</div>
                <br>

                <br>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <i class="fa fa-at" style="font-size: 30px"></i>
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')}}</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="enter your email!" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row mb-3">
                           <i class="fa fa-lock" style="font-size: 30px"></i>
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="enter your password!" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <br>
                        <a href="{{ route('reset-password') }}" style="position: absolute;left: 100px;font-size: 20px;font-weight: bolder">Forget Password!</a>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
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
