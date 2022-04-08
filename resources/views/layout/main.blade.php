<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css\header.css')}}">
  <link rel="stylesheet" href="{{ asset('css\footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css\login.css') }}">
    <link rel="stylesheet" href="{{ asset('css\register.css') }}">
    <link rel="stylesheet" href="{{ asset('css\main.css') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <style>

    body{
        background-image:url({{url('photo/building.jpg')}});
        background-size:cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
     }

    </style>
</head>
<title>test</title>
<body>
@include('layout.header')
<div id="loader" class="center"></div>
@yield('content')
@include('layout.footer')
</body>
<script>

    document.onreadystatechange = function() {

        if (document.readyState !== "complete") {

            document.querySelector(

                "body").style.visibility = "hidden";


            document.querySelector(

                "#loader").style.visibility = "visible";

        } else {

            document.querySelector(

                "#loader").style.display = "none";

            document.querySelector(

                "body").style.visibility = "visible";

        }

    };

</script>

</html>
