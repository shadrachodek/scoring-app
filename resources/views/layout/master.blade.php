<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>


        <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}">
        <script type="text/javascript" src="{{ url('/js/app.js') }}"></script>

        <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.css') }}">


      
    </head>
    <body>
    @include('shared.navbar')

    @yield('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="{{ url('/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ url('/js/bootstrap.min.js') }}"></script>
    </body>
</html>