@extends('layout.app')


@section('css')
    <link href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('custom/css/index.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('custom/css/Referral.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('script')
    <script src="{{ asset('custom/js/index.js') }}" type="text/javascript"></script>
@endsection

@section('article')
    <article class="__sp-dashboard">
        <div class="pure-g __sp-navCon">
            <div class="pure-u-1-5 __sp-leftNav">
                <div id="__sp-leftNavLinksCon">
                    <a href=" {{ url('dashboard') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                    <a href="{{ url('dashboard/account') }}" ><i class="fa fa-cog"></i> <span>Account Settings</span></a>
                    <a href="#"><i class="fa fa-inbox"></i> <span>Inbox</span></a>
                    <a href="{{ url('dashboard/sendpay') }}"><i class="fa fa-send"></i> <span>Send payment</span></a>
                    <a href="{{ url('dashboard/Receivepay') }}"><i class="fa fa-flag"></i> <span>Receive Payment</span></a>
                    <a href="#" data-status="active"><i class="fa fa-database" ></i> <span>Referrals Earnings</span></a>
                </div>
            </div>
        </div>
    <body>
            <div class="pure-u-4-5 __sp-rightNav">
                <div class="pure-g">
                    <div id="__sp-gloActInf-1" class="pure-u-1">
                        <div class="pure-u-5-5">
                            <div class="__holdleft">
                                <div class="pure-u-1-5">
                                    <div id="__logo-side">
                                        <a href="{{ url('home') }}">
                                            <img src="{{ asset('img/logo.png') }}" id="__img-logo">
                                        </a>
                                    </div>
                                </div>

                                <div class="pure-u-1-2">
                                    <div id="__side-level">
                                        <div class="pure-u-1-6">
                                            <div class="__acont-s"> <a href="#" class="__arss"><i class="fa fa-inbox" ></i></a> </div>
                                        </div>

                                        <div class="pure-u-2-5 ">
                                            <div class="__sac" id="__icon-user"> <a href="#"><i class="fa fa-user-o"></i></a>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="__sp-gloActInf-2" class="pure-g">
                    <div class="pure-u-6-24 l-box">
                        <div class="l-box-m"></div>

                    </div>
                    <div class="pure-u-6-24 l-box">
                        <div class="l-box-m"></div>
                    </div>
                    <div class="pure-u-6-24 l-box">
                        <div class="l-box-m"></div>
                    </div>
                    <div class="pure-u-6-24 l-box">
                        <div class="l-box-m"></div>
                    </div>
                </div>

                
                    </div>
                </div>
            </div>
    </article>
    </body>
@endsection

@section('dash')


    @endsection