@extends('layout.main')

@section('content')



<style>
    #log,#reg,#add,#show,#show2{
        color: white;
        background-color: #010d3f;
    }
    .text-center{
        background-color: rgba(255, 207, 28,0.6);
        width: 500px;
        height: 300px;
        position: absolute;
        margin: auto;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
border-radius: 50px;
        border:2px solid #010d3f;
        font-size: 40px;
        font-weight: bolder;
    }
    .text-center p{
        text-align: center;



    }
    .control a{
        background: red;

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
.pproduc1t{
    font-size: 22px;
    font-weight: bold;
}
.price{
    font-size: 25px;
    font-weight: bold;
    margin-left: 20px;
text-align: center;
}

</style>
@if(count($pubs) > 0)
@foreach($pubs as $pub)

 <div class="item">
     <br>
     <p class="pproduc1t" style="float: left;margin-left:30px;">{{$pub->name}}</p>
<a href="{{route('cartadd',$pub->id)}}"><i class="fa fa-shopping-cart" style="font-size: 35px;float: right;margin-right: 30px; color:black;"></i></a>
     <br>
     <br>
     <br>
     <img src="{{$pub->image}}" class="imgproduct" style="width: 200px">

     <p class="price">  {{ $pub->price }} <br> {{ $pub->currency }}</p>
     <a href="{{route('detalisProduct',['id'=>$pub->id])}}">
     <button class="btn-primary1" style="float:right;margin-right: 105px">DETALIS</button></a>
 </div>





@endforeach
@else
<div  class="text-center">
    <br>
    <br>
    <br>

        <p>No products yet</p>
</div>
@endif
<div class="control">
    {{ $pubs->appends(['category'=>request()->category])->links() }}</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>














@endsection
