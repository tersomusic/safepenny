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
            <button style="margin-left: 10px;" class="pure-button __sp-trans" >Sign Me Up Now</button>

            <div class="__text-highb">
                
            </div>

            
        </section>

        <div class="__block2">

        <div class="steps"> <h3 class="__textsteps"> Step 1 </h3> <div class="__img22"> <i class="fa fa-american-sign-language-interpreting fa-5x" aria-hidden="true"> </i> </div> </div>
        <div class="steps"> <h3 class="__textsteps"> Step 2 </h3> <div class="__img22"> <i class="fa fa-american-sign-language-interpreting fa-5x" aria-hidden="true"> </i></div> </div>
        <div class="steps"> <h3 class="__textsteps"> Step 3 </h3> <div class="__img22"> <i class="fa fa-american-sign-language-interpreting fa-5x" aria-hidden="true"> </i></div> </div>

        </div>

        <div class="block_sign_log">


            <section class="__sp-connect">
                <div class="__sp-gridd" pure-u-4-5>
                    <div class="__img22"> <i class="fa fa-user-plus fa-5x" aria-hidden="true"> </i> </div>
                    <h1 class="__r">Register</h1>
                    <h4 class="__msr">Safe penny is an Online Donor System that helps you grow Financially </h4>
                    <h4 class="__msr2">Register today and earn from millions we are sured, Accured and we pay more no scam.
                        We ensure to block any user that tries to scam users or disobey our terms of use</h4>

                </div>


        <div class="__sp-gridd" pure-u-4-5>
            <div class="__img22"> <i class="fa fa-handshake-o fa-5x" aria-hidden="true"> </i> </div>
            <h1 class="__r">Lend</h1>
            <h4 class="__msr"> Give a Preffered amount you wish to share </h4>
            <h4 class="__msr2"> In Ensuring a successful growth of this brand You have to invest, Due to the business growth its mandatory to give so ass to earn back,
                in doing this it will grow the company safe and soundly. </h4>

        </div>


        <div class="__sp-gridd" pure-u-4-5>

            <div class="__img22"> <i class="fa fa-credit-card fa-5x" aria-hidden="true"> </i> </div>
            <h1 class="__r">Earn Back</h1>
            <h4 class="__msr" >Profit from thiss Train in days, as its one of the top to gain from.
                Our matching system easy and safe</h4>

            <h4 class="__msr2"> its a enomously metrix in which 40% of your more gets doubled at an incredible state</h4>

        </div>
        <div class="__sub"> <button class="__button1">Learn more about this</button></div>
        </div>

        </section>


        <div class="__block3">
        <div class="__vidintro"> </div>
        </div>

        <div class="__block4">
        </div>

    </article>
@endsection
@section('footer')
    <div class="blockfoot">
        <div class="roll_hold_list">
            <ul class="__ulplus">
                <h6 class="h6tag">Delete Account</h6>
                <h6 class="h6tag">Receive Payment</h6>
                <h6 class="h6tag">Send Payment</h6>

            </ul>

            <ul class="__ulplus">
                <a href="{{ url('/Terms')}}"> <h6 class="h6tag">Terms</h6> </a>
                <h6 class="h6tag">Advice and Tips</h6>
                <h6 class="h6tag">Faq</h6>
            </ul>

            <ul class="__ulplus">
            <div class="__holdicons">
                <a href="{{ url('/about') }}"> <h6 class="h67tag"> 
                <span class="fa-stack fa-lg">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-twitter fa-stack-1x"></i>
                </span>
 
                facebook</h6>
                </a>
                <a href="{{ url('/privacy') }}"> <h6 class="h67tag">
                <span class="fa-stack fa-lg">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-facebook"></i>
                </span>
                twitter</h6>

                </a>

                <a href="{{ url('/privacy') }}"> <h6 class="h67tag">
                <span class="fa-stack fa-lg">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-instagram"></i>
                </span>
                Instagram</h6>

                </a>
                </div>
            </ul>  
        </div>
        <div class="__subscribe_eml">
             <h5 style="color: #fff; text-align: left; font-family: klavika, serif; margin-left: 10px;"> Get news and updates </h5> 
                            <form action="" method="post">

                                <input type="email" name="email" class="formStyle" placeholder="Email (required)" required  />
                                <a href="#" class="formButton">Subscribe</a>
                            </form>
        </div>

    </div>
@endsection