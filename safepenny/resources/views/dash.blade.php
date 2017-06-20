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
<article class="__sp-dashboard">
    <div class="pure-g __sp-navCon">
        <div class="pure-u-1-5 __sp-leftNav">
            <div id="__sp-leftNavLinksCon">
                <a href=" {{ url('dashboard') }}" ><i class="fa fa-home"></i> <span>Dashboard</span></a>


                <a href="{{ url('dashboard/account') }}" ><i class="fa fa-cog"></i> <span>Account Settings</span></a>

                @if(@$page === 'dashboard/account')
                    <a href="{{ url('dashboard/account') }}" data-status="active" ><i class="fa fa-cog"></i> <span>Account Settings</span></a>
                @else
                    @endif

                <a href="#"><i class="fa fa-inbox"></i> <span>Inbox</span></a>
                <a href="{{ url('dashboard/sendpay') }}"><i class="fa fa-send"></i> <span>Send payment</span></a>
                <a href="#"><i class="fa fa-flag"></i> <span>Receive Payment</span></a>
                <a href="#"><i class="fa fa-database"></i> <span>Referrals Earnings</span></a>
            </div>
        </div>
    </div>
</article>
<body>


@yield('article')



    @yield('footer')


@yield('dash')

v
