@extends('layout.app')

@section('css')
    <link href="{{ asset('custom/css/forget.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('script')
    <script src="{{ asset('custom/js/login.js') }}" type="text/javascript"></script>
@endsection

@section('article')

    <article class="__sp-article">
        <section class="__sp-cen-block">
            <div class="__sp-boxsigin">
                <h3>  Forgot Password? </h3>

                <form action="" method="post">
                    {{csrf_field()}}
                    <input class="__b12" type="password" name="password" placeholder="New Password"/>
                    <input class="__b12" type="password" name="retype-password" placeholder="Retype-Password"/>
                    <label>
                        <input class="__b13" type="checkbox" name="remember"/>
                    </label>
                    <div id="__check_reber">Remember </div>

                    <button class="button-success pure-button __sp-seconday">LOGIN</button>
                </form>

            </div>
        </section>

    </article>
@endsection


