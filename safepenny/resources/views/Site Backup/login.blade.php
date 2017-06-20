@extends('layout.app')

@section('css')
    <link href="{{ asset('custom/css/login.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('custom/css/global.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('script')
    <script src="{{ asset('custom/js/login.js') }}" type="text/javascript"></script>
@endsection

@section('article')

    <article class="__sp-article">
        <section class="__sp-cen-block">
            <div class="__sp-boxsigin">
                <h3> LOGIN </h3>

                <form action="" method="post">
                    {{csrf_field()}}
                    <input class="__b12" type="Email" name="email" placeholder="Email"/>
                    <input class="__b12" type="password" name="password" placeholder="Password"/>
                    <input class="__b13" type="checkbox" name="remember"/>
                    <div class="__check_reber"> Remember </div>
                    <a href="#" class="__forgetlnk">forgot password?</a>
                    </span>

                    <button class="button-success pure-button __sp-seconday">LOGIN</button>
                </form>

            </div>
        </section>

    </article>
@endsection


