@extends('layout.main')
@section('content')
<div class="card" style="height: 300px;margin-top:50px">
<form action="{{ route('send-email') }}" method="get" >
    <br>   <br>
    <h1 class="text-md-end"><i class="fa fa-lock" style="font-size: 30px"></i>Reset Password</h1>
    <br>    <br>
    <i class="fa fa-at" style="font-size: 30px;"></i>
    <label class="text-md-end">Your Email</label>
    <br>   <br>
    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" required autocomplete="email" autofocus>
    @error('email')
    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
    @enderror
    <br><br>  <br>


    <button type="submit" class="btn-primary">OK</button>
</form>
</div>
@endsection
