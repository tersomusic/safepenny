@extends('layout.app')

@section('css')
    <link href="{{ asset('custom/css/index.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('custom/css/verifyemail.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('script')
    <script src="{{ asset('custom/js/index.js') }}" type="text/javascript"></script>
@endsection


@section('article')
    <article class="__sp-article">
         
        <section class="__details">
        <div class="__spwain">
             <div class="__sp-boxsigin">
                <h3> VERIFY EMAIL</h3>

                <form action="" method="post">
                    {{csrf_field()}}
                    <input class="__b12" type="Email" name="email" placeholder="Email"/>
                    
                    </span>

                    <button class="button-success pure-button __sp-seconday">VERIFY</button>
                </form>

            </div>         
        
        </div>
        </section>


    </article>
@endsection

@section('footer')
    <div class="blookfoot"></div>
    @endsection

