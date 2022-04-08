<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        body{
            background-image:url({{url('photo/building.jpg')}});
            background-size:cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css\login.css') }}">
    <link rel="stylesheet" href="{{ asset('css\header.css')}}">
    <link rel="stylesheet" href="{{ asset('css\footer.css') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>


        <main class="py-4">
            @include('layout.header')
            @yield('content')
            @include('layout.footer')

</body>
</html>
