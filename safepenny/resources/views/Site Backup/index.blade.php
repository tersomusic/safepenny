@extends('layout.app')

@section('css')
    <link href="{{ asset('custom/css/index.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('script')
    <script src="{{ asset('custom/js/index.js') }}" type="text/javascript"></script>
@endsection

@section('article')
    <article class="__sp-article">
        <section class="__sp-cen-block">
            <h3> Get 30% of every earning on Our Platform , Invest With SafePenny</h3>
            <h5>Watch Our Safepenny video , this will allow you to earn, learn and progress,
                be Financial free, Less Stress, Easy Understandable platform , Real UI
            </h5>

            <button class="button-success pure-button __sp-primary">Take A Tour</button>
            <button style="margin-left: 10px;" class="pure-button __sp-trans">Sign Me Up Now</button>

            <div class="__text-highb">
                
            </div>

            
        </section>
        <div class="block_sign_log">


            <section class="__sp-connect">
                <div class="__sp-gridd" pure-u-4-5>
                    <div class="__img22"  > </div>
                    <h1 class="__r">Register</h1>
                    <h4 class="__msr">Safe penny is an Online Donor System that helps you grow Financially </h4>
                    <h4 class="__msr2">Register today and earn from millions we are sured, Accured and we pay more no scam.
                        We ensure to block any user that tries to scam users or disobey our terms of use</h4>

                </div>


        <div class="__sp-gridd" pure-u-4-5>
            <div class="__img22"  > </div>
            <h1 class="__r">Lend</h1>
            <h4 class="__msr"> Give a Preffered amount you wish to share </h4>
            <h4 class="__msr2"> In Ensuring a successful growth of this brand You have to invest, Due to the business growth its mandatory to give so ass to earn back,
                in doing this it will grow the company safe and soundly. </h4>

        </div>


        <div class="__sp-gridd" pure-u-4-5>

            <div class="__img22"> </div>
            <h1 class="__r">Earn Back</h1>
            <h4 class="__msr">Profit from thiss Train in days, as its one of the top to gain from.
                Our matching system easy and safe</h4>

            <h4 class="__msr2"> its a enomously metrix in which 40% of your more gets doubled at an incredible state</h4>

        </div>
        <div class="__sub"> <button class="__button1">Learn more about this</button></div>
        </div>

        </section>


    </article>
@endsection
@section('footer')
    <div class="blockfoot">
        <div class="roll_hold_list">
            <ul class="__ulplus">
                <h6 class="h6tag">Delete Account</h6>
                <h6 class="h6tag">Receive Payment</h6>
                <h6 class="h6tag">Send Payment</h6>
                <h6 class="h6tag">info</h6>
                <h6 class="h6tag">how to earn more</h6>

            </ul>

            <ul class="__ulplus">
                <h6 class="h6tag">Account settings</h6>
                <a href="{{ url('/Terms')}}"> <h6 class="h6tag">Terms</h6> </a>
                <h6 class="h6tag">Report a Problem</h6>
                <h6 class="h6tag">Advice and Tips</h6>
                <h6 class="h6tag">Faq</h6>

            </ul>

            <ul class="__ulplus">
                <a href="{{ url('/about') }}"> <h6 class="h6tag"> About Safe Penny</h6></a>
                <a href="{{ url('/privacy') }}"> <h6 class="h6tag">Privacy</h6> </a>
                <h6 class="h6tag">Referal links and Policy</h6>
                <h6 class="h6tag">Cash out</h6>
                <h6 class="h6tag">Sign up on Safepenny</h6>


            </ul>

        </div>

    </div>
@endsection