@extends('layout.main')
<style>
    body{
        font-family:Helvetica, sans-serif;
        padding:7.5%;
        text-align:center;

    }
    #slideshow{
        overflow:hidden;
        height:510px;
        width:725px;
        margin:0 auto;


    }

    .slide-wrapper{

        width: calc(725px *4);
    animation: slide 10s ease infinite;
animation-duration: 20s;
    }
.slide{
    float: left;
}
    .slide:nth-child(1){

        background: rgba(0, 128, 0,0.62);
        width: 725px;
        height: 510px;
    }

    .slide:nth-child(2){

        width: 725px;
        height: 510px;
        background: rgba(255, 192, 203,0.62);
    }

    .slide:nth-child(3){

        width: 725px;
        height: 510px;
        background: rgba(255, 0, 0,0.62);
    }

    .slide:nth-child(4){

        width: 725px;
        height: 510px;
        background: rgba(255, 255, 0,0.62);
    }

    @keyframes slide {
        20%{

            margin-left:0px;
        }
        40%{
            margin-left:calc(-725px * 1);
        }
        60%{
            margin-left:calc(-725px * 2);
        }
        80%{
            margin-left:calc(-725px * 3);
        }


    }
</style>
@section('content')

<div id="slideshow">
    <div class="slide-wrapper">
        <div class="slide">
            <h1 class="slide-number">browse your products</h1>
        </div>
        <div class="slide">
            <h1 class="slide-number">
                add your products</h1>
        </div>
        <div class="slide">
            <h1 class="slide-number">
                search</h1>
        </div>
        <div class="slide">
            <h1 class="slide-number">
                welcome</h1>
        </div>
    </div>
</div>

























@endsection
