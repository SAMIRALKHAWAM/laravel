@extends('layout.main')

@section('content')
    <br>
    <br>
    <br>
    <img class="logo" src="photo\logo.jpg">
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card2">  <br>
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">   <br><i class="fa fa-user-plus" style="font-size: 30px;"></i>

                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="enter your name!" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<br>
                        <div class="row mb-3">
                            <i class="fa fa-at" style="font-size: 30px;"></i>
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="enter your email!" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <br>
                        <div class="row mb-3">
                            <i class="fa fa-lock" style="font-size: 30px;"></i>
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="enter your password!" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <i class="fa fa-lock" style="font-size: 30px;"></i>
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="enter your password again!" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <br>
                        <i class="fa fa-globe" style="font-size: 30px;"></i>
                        <label class="text-md-end">Country</label>
                        <br>
                        <select id="country"  name="country" class="country @error('country') is-invalid @enderror" required autocomplete="country">

                            <option class="option" disabled selected value></option>
                            <option class="option">Yemen</option>
                            <option class="option">Saudi Arabia</option>
                            <option class="option">Emirates</option>
                            <option class="option">Oman</option>
                            <option class="option">Kuwait</option>
                            <option class="option">Bahrain</option>
                            <option class="option">Qatar</option>
                        </select>
                        @error('country')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <br><br>
                        <i class="fa fa-home" style="font-size: 30px;"></i>
                        <label class="text-md-end">Location</label>
                        <br>
                        <input type="text" placeholder="enter your location!" id="location" name="location" class="location @error('location') is-invalid @enderror" required autocomplete="location">
                        @error('location')
                        <br>
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <br><br>
                        <i class="fa fa-phone" style="font-size: 30px;"></i>
                        <label class="text-md-end">Phone</label>
                        <br>
                        <input type="text" placeholder="like : 009xx..........." id="phone" name="phone"  class="phone @error('phone') is-invalid @enderror" required autocomplete="phone"><br><br><br>
                        @error('phone')
                        <br>
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <br><br><br>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
