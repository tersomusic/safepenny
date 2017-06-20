<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SafePenny</title>

    <!-- Fonts -->
    <link href="" rel="stylesheet" type="text/css">
    <!-- CSS -->
    <link href="{{ asset('css/pure-release-0.6.2/pure-min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('custom/css/global.css') }}" rel="stylesheet" type="text/css">
    @yield('css')
    <!-- Javascript -->
    <script src="{{ asset('custom/js/global.js') }}" type="text/javascript"></script>
    @yield('script')

    <!-- Styles -->
    <style>
    </style>
</head>


<body>


@yield('article')



    @yield('footer')


@yield('dash')

