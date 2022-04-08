
@extends('layout.main')
@section('content')

<style>
    #log,#reg,#add{
        color: white;
        background-color: #010d3f;
    }
   #show{
        color: black;
        background-color: #ffcf1c;
    }
    .alert-success{
        background-color: forestgreen;
        color: black;
        text-align: center;
        border: 2px solid black;
        height: 50px;
        font-weight: bolder;
        font-size: 22px;
        margin: 50px;

    }


</style>



<br><br>
<br>
<br><br>
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}</div>
<br>
@endif
<p class="pproduct" style="color: #ffcf1c">ALL CATEGORY</p>
<br>



<div class="product_box2">
        <div class="product_box">
            <a href="{{route('ShowCategory',['category'=>'Foods'])}}">
                <br>
                <p class="pproduct">Food</p><br><br>
                <img src="../photo/food.jpg" alt="food" class="imgproduct">
                <br>
                <br>
                <button class="btn-primary1">SHOW</button>
            </a>
        </div>



    <div class="product_box">
        <a href="{{route('ShowCategory',['category'=>'Games'])}}">
            <br>
            <p class="pproduct">Games</p><br><br>
            <img src="../photo/games.jpeg" alt="games" class="imgproduct">
            <br>
            <br>
            <button class="btn-primary1">SHOW</button>
        </a>
    </div>


</div>

<div class="product_box2">
    <div class="product_box">
        <a href="{{route('ShowCategory',['category'=>'Clothes'])}}">
            <br>
            <p class="pproduct">Clothes</p><br><br>
            <img src="../photo/Clothes.jpg" alt="Clothes" class="imgproduct">
            <br>
            <br>
            <button class="btn-primary1">SHOW</button>
        </a>
    </div>



    <div class="product_box">
        <a href="{{route('ShowCategory',['category'=>'Shoes'])}}">
            <br>
            <p class="pproduct">Shoes</p><br><br>
            <img src="../photo/Shoes.jpg" alt="Shoes" class="imgproduct">
            <br>
            <br>
            <button class="btn-primary1">SHOW</button>
        </a>
    </div>


</div>




<div class="product_box2">
    <div class="product_box">
        <a href="{{route('ShowCategory',['category'=>'Accessories'])}}">
            <br>
            <p class="pproduct">Accessories</p><br><br>
            <img src="../photo/Accessories.jpg" alt="Accessories" class="imgproduct">
            <br>
            <br>
            <button class="btn-primary1">SHOW</button>
        </a>
    </div>



    <div class="product_box">
        <a href="{{route('ShowCategory',['category'=>'Electrical Tools'])}}">
            <br>
            <p class="pproduct">Electrical Tools</p><br><br>
            <img src="../photo/Electrical Tools.jpg" alt="Electrical Tools" class="imgproduct">
            <br>
            <br>
            <button class="btn-primary1">SHOW</button>
        </a>
    </div>


</div>





<div class="product_box2">
    <div class="product_box">
        <a href="{{route('ShowCategory',['category'=>'Technology'])}}">
            <br>
            <p class="pproduct">Technology</p><br><br>
            <img src="../photo/Technology.jpg" alt="Technology" class="imgproduct">
            <br>
            <br>
            <button class="btn-primary1">SHOW</button>
        </a>
    </div>



    <div class="product_box">
        <a href="{{route('ShowCategory',['category'=>'Cars'])}}">
            <br>
            <p class="pproduct">Cars</p><br><br>
            <img src="../photo/Cars.jpg" alt="Cars" class="imgproduct">
            <br>
            <br>
            <button class="btn-primary1">SHOW</button>
        </a>
    </div>


</div>

<div class="product_box2">
    <div class="product_box">
        <a href="{{route('ShowCategory',['category'=>'Real Estate'])}}">
            <br>
            <p class="pproduct">Real Estate</p><br><br>
            <img src="../photo/real estate.jpg" alt="Real Estate" class="imgproduct">
            <br>
            <br>
            <button class="btn-primary1">SHOW</button>
        </a>
    </div>



    <div class="product_box">
        <a href="{{route('ShowCategory',['category'=>'Other...'])}}">
            <br>
            <p class="pproduct">Other...</p><br><br>
            <img src="../photo/other.png" alt="Other..." class="imgproduct">
            <br>
            <br>
            <button class="btn-primary1">SHOW</button>
        </a>
    </div>


</div>


<br>
<br>

@endsection
