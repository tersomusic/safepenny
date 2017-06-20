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
<header class="__sp-header">
    <div class="__sp-container">
        <div class="pure-g">
            <div class="__sp-pure pure-u-1-5">
                <a href="{{ url('safepenny.com') }}"><img class="__sp-logo" src="{{ asset('img/logo.png') }}"></a>
            </div>
            <div class="__sp-pure pure-u-4-5">
                <div class="__sp-links">
                    @if(@$page !== '/')
                        <a href="{{ url('/')}}">Home</a>
                        @endif

                    <a href="{{ url('faqandsecurity') }}">Faq & Security</a>
                        <a href="{{ url('dashboard') }}">Dashboard</a>
                    <a href="{{ url('how')}}">How it works</a>

                    @if(@$page === 'login')
                        <a class="__sp-active">Login</a>
                    @else
                        <a href="{{ url('login')}}">Login</a>
                    @endif

                    @if(@$page !== 'signup')
                        <a href="{{ url('signup') }}" style="float: none;border: none !important;">
                            <button class="button-success pure-button __sp-primary">SIGN UP</button>
                        </a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</header>
@yield('article')
</body>
    @yield('footer')
</html>
