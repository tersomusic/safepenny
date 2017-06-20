@extends('layout.app')

@section('css')
    <link href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('custom/css/index.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('custom/css/accountd.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('script')
    <script src="{{ asset('custom/js/index.js') }}" type="text/javascript"></script>
@endsection

@section('article')
    <article class="__sp-dashboard">

                <div class="pure-g">
                    <div class="pure-u-5-5">
                        <div class="__vboxx ">
                            <div class="___navside">
                                @if(@$page == '#')
                                <a href="#" class="__small-links"> Edit profile</a>

                                @endif

                                    @if(@$page!== 'accountd')
                                <a href="#"    class="__small-links"> Account details</a>

                                    @endif
                                    @if(@$page!=='addition')
                                <a href="#"    class="__small-links"> addtional features </a>

                                    @endif

                                    @if(@$page!=='level')
                                <a href="#"   class="__small-links"> Level </a>

                                    @endif
                                    @if(@$page==!'sub')
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
                                                <button type="submit" class="pure-button pure-button-primary">Submit</button>
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









.__qgest{
background: red;
margin: 1% auto 0;
position: relative;
width: 300px;
height: auto;
min-height: 100px;
background-color: #64C7CC;
margin: 0 auto;

}

.__qgest:before,.__qgest:after{
content: "";
position: absolute;
width: 0;
border-left: 150px solid transparent;
border-right: 150px solid transparent;
}

.__qgest:before {
bottom: 0;
border-bottom: 86.60px solid #64C7CC;
}

.__qgest:after {
top: 100%;
width: 0;
border-top: 86.60px solid #64C7CC;
}

.__qgest:nth-child(3n+2) {
margin: 0 1%;
}