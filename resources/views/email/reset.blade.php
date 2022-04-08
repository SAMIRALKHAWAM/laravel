@extends('layout.main')

@section('content')
    <div class="card" style="height: 400px">
<form action="{{ route('new-password') }}" method="POST">
    <br>   <br>
    @csrf
    <input type="email" name="email" class="email" id="email"  value="{{ $email }}" hidden>
    <h1 class="text-md-end"><i class="fa fa-lock" style="font-size: 30px"></i>Reset Password</h1>
    <br>    <br>
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





    <br><br><br>
    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary" style="width: 150px;">
                {{ __('reset password') }}
            </button>
        </div>
    </div>


</form></div>
@endsection
