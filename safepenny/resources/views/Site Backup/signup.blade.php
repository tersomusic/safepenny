@extends('layout.app')

@section('css')
    <link href="{{ asset('custom/css/signup.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('script')
    <script src="{{ asset('custom/js/signup.js') }}" type="text/javascript"></script>
@endsection

@section('article')
    <article class="__sp-article">
        <section class="__sp-cen-block">

            <div class="__sp-boxsigin">
                <h3> SIGN UP</h3>

                <form action="" method="post">
                    {{ csrf_field() }}
                    <input class="__b12" type="text" name="name" placeholder="Name"/>
                    <input class="__b12" type="Email" name="email" placeholder="Email"/>
                    <input class="__b12" type="password" name="password" placeholder="Password"/>
                    <input class="__b12" type="password" name="retype-password" placeholder="Re-Password"/>
                    <input class="__b12" type="text" name="phone" placeholder="Phone-no"/>
                    <span>
                        <input class="__b13" type="checkbox" name="remember"/> Remember Me
                    </span>

                    <button type="submit" class="button-success pure-button __sp-seconday">SIGNUP</button>
                </form>

            </div>

        </section>


    </article>
@endsection