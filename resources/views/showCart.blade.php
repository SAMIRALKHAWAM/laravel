@extends('layout.main')

@section('content')
<style>

    #log,#reg,#add,#show{
        color: white;
        background-color: #010d3f;
    }
    #show2{
        color: black;
        background-color: #ffcf1c;
    }

    .item{
        width: 310px;
        height: 360px;
        background-color: rgba(255, 207, 28,0.6);
        border-radius: 50px;
        border:2px solid #010d3f;
        position: relative;
        top: 65px;

        margin-top: 60px;
        margin-left: 50px;
        display: inline-block;
    }
    .item:hover{
        box-shadow: 2px 2px #1a202c;

    }
.price,.pproduc1t{
    text-align: center;
    font-weight: bold;
font-size: 20px;
}
</style>
    @if($cart)
    @foreach($cart->items as $cat)

        <div class="item">
            <br>
            <p class="pproduc1t" style="float: left;margin-left:30px;">Name : {{$cat['name']}}</p>
            <br>
            <br>
            <img src="{{$cat['image']}}" class="imgproduct" style="width: 200px">
            <p class="price"> Quantity : {{ $cat['qty'] }} </p>
            <p class="price">  Price : {{ $cat['price'] }} </p><br>
            <button class="btn-primary1" style="float:right;margin-right: 105px">DETALIS</button>
        </div>









    @endforeach
    @else
        <div  class="text-center">
            <br>
            <br>

            <p>No products yet</p>
        </div>
    @endif

<div style="font-size: 25px;background-color: #ffcf1c;height: 90px;width: 250px;border-radius: 15px;border: 2px solid black;margin-left: 800px;margin-top: 100px;text-align: center">
    <p> Total Quantity : {{$cart->qty}}</p>
    <br>
    <p> Total price : {{$cart->price}}</p>

</div>
<form action="{{ route('paypal') }}" method="POST">
    @csrf
    <button type="submit">hello </button>

</form>
@endsection
