@extends('layout.app')

@section('css')
    <link href="{{ asset('custom/css/index.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('custom/css/how.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('script')
    <script src="{{ asset('custom/js/index.js') }}" type="text/javascript"></script>
@endsection


@section('article')
    <article class="__sp-article">
        <section class="__sp-cen-1">
            <div class="__sp-search">
                <form  action="" method="post" class="__sp-searchfm">
                    <input type="text" name="searchus"  class="__spp-input" placeholder="WHAT ARE YOU LOOKING FOR"/>
                    <button class="button-success pure-button __sp-searchh"> search </button>
                </form>
            </div>
        </section>
        <section class="sec-hold">
            <div class="__sp-box">
                <h1 style="height:40px; color:#4cae4c; font-family: 'Calibri'; border: 1px solid #fff; width: 40px;border-radius: 5px; margin-left: 10px; text-align: center;"> 1.</h1> Log on to Safe penny , create an account
                <button class="button-success pure-button __sp-signlink"> SIGN UP </button>
            </div>
            <div class="__sp-box">
              <h1 style="height:40px; color:#4cae4c; font-family: 'Calibri'; border: 1px solid #fff; width: 40px;
               border-radius: 5px; margin-left: 10px; text-align: center;">
                  2. </h1> <h2 style="text-align: center; font-family: Klavika;"> Support members , when you do this you also will be supported </h2>

                <button class="button-success pure-button __sp-signlink"> GET HELP </button>
            </div>
            <div class="__sp-box3">
                <h1 style="height:40px; color:#4cae4c; font-family: 'Calibri'; border: 1px solid #fff; width: 40px;
                border-radius: 5px; margin-left: 10px; text-align: center;">
                    3.
                </h1>
                <h2 style="text-align: center; font-family: Klavika;"> Grow# </h2> </div>
        </section>

        <section class="__details">
        <div class="__spwain">
            <div class="__toph"> <blockquote>   Select system </blockquote> </div>
        <div class="__holdtext">
            <h5>
            Our System is a Valid and Trusted processor in which merges and selects people
            appropriately in respect to how log your money was added, your location and random chosen task. each people will
            receive his or her own percentage quickly.

            We offer referer bonuses for Every customer, and even quick match proceeding 3 to 4 days duration. Safe penny is an
            online trade marketing system and in respect we are not fraudsters. Money gotten from this is shared among memebers
            dont steal or dupe members of the wealth.

            if there are any delays in process of cash delivery on matching please use the complain/request button and we will get back
            you as soon as possible.
            join today.
            </h5>
            <a href="#" class="__sp-scroll"><i class="fa fa-angle-down"></i></a>
        </div>
        </div>
        </section>


    </article>
@endsection

@section('footer')
    <div class="blookfoot"></div>
    @endsection

