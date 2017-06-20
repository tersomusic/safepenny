@extends('layout.app')


@section('css')
    <link href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('custom/css/index.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('custom/css/account.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('custom/css/global.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('script')
    <script src="{{ asset('custom/js/index.js') }}" type="text/javascript"></script>
@endsection

@section('article')
    <article class="__sp-dashboard">
        <div class="pure-g __sp-navCon">
            <div class="pure-u-1-5 __sp-leftNav">
                <div id="__sp-leftNavLinksCon">
                    <a href=" {{ url('dashboard') }} "  ><i class="fa fa-home"></i> <span>Dashboard</span></a>
                    <a href="{{ url('dashboard/account') }}" ><i class="fa fa-cog"></i> <span>Account Settings</span></a>
                    <a href="#"><i class="fa fa-inbox"></i> <span>Inbox</span></a>
                    <a href="{{ url('/dashboard/sendpay') }}"><i class="fa fa-send"></i> <span>Send Payment</span></a>
                    <a href=" {{ url('/dashboard/Receivepay') }}"><i class="fa fa-flag"></i> <span>Receive Message</span></a>
                    <a href="#"><i class="fa fa-database"></i> <span>Referrals Earnings</span></a>
                </div>
            </div>

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

                <div class="pure-g">
                    <div class="pure-u-5-5">
                        <div class="__vboxx ">
                            <div class="___navside">
                                @if(@$page == '#')
                                <a href="#" class="__small-links"> Edit profile</a>

                                @endif

                                    @if(@$page!== 'account')
                                <a href="#"   class="__small-links"> Account details</a>

                                    @endif
                                    @if(@$page!== 'addition')
                                <a href="#"   class="__small-links"> addtional features </a>

                                    @endif

                                    @if(@$page!=='level')
                                <a href="#"   class="__small-links"> Level </a>

                                    @endif
                                    @if(@$page !=='sub')
                                <a href="#"  class="__small-links"> Subscription </a>
                                    @endif
                            </div>

                            <div class="__navrighh">
                                <div class="__form44">
                                    <form class="pure-form pure-form-aligned" id="__form">
                                        <fieldset>
                                            <div class="pure-control-group" id="__conbox">
                                                <label for="name">Username</label>
                                                <input type="text" placeholder="Username" id="__formb">
                                                <span class="pure-form-message-inline">This is a required field.</span>
                                            </div>

                                            <div class="pure-control-group" id="__conbox">
                                                <label for="password">Password</label>
                                                <input id="password" type="password" placeholder="Password">
                                            </div>

                                            <div class="pure-control-group" id="__conbox">
                                                <label for="password">Retype-Password</label>
                                                <input id="password" type="password" placeholder="Retype-Password">
                                            </div>

                                            <div class="pure-control-group" id="__conbox">
                                                <label for="email">Email Address</label>
                                                <input id="email" type="email" placeholder="Email Address">
                                            </div>

                                            <div class="pure-control-group" id="__conbox">
                                                <label for="foo">Phone-No</label>
                                                <input id="foo" type="text" placeholder="Enter something here...">
                                            </div>

                                            <div class="pure-controls" id="__conbox">
                                                <button type="submit" class="pure-button pure-button-primary">UPDATE DETAILS</button>
                                            </div>
                                        </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </article>

@endsection