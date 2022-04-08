@extends('layout.main')
<script>
    alert("We have sent you an email with the verification number!");
</script>
@section('content')
    <div class="card" style="height: 300px;margin-top:50px">
        <form action="{{ route('ok') }}" method="get" >
            <br><br>
            <h1 class="text-md-end"><i class="fa fa-lock" style="font-size: 30px"></i>Reset Password</h1>
            <br>    <br>
          <input type="email" name="email" class="email" id="email"  value="{{ $email }}" hidden>

            <label class="text-md-end">verification number</label>
            <br>   <br>
            <input type="number" id="pin" name="pin" class="form-control @error('pin') is-invalid @enderror" required autocomplete="pin" autofocus>
            @error('pin')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <br><br>  <br>


            <button type="submit" class="btn-primary">OK</button>
        </form>
    </div>


@endsection
