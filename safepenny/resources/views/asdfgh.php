@extends('layout.app')

@section('css')
<link href="{{ asset('custom/css/index.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('custom/css/DashBoard.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('script')
<script src="{{ asset('custom/js/index.js') }}" type="text/javascript"></script>
@endsection


@section('article')
<div class="__holder">
    <div class="sidehold1">
        <div class="__sidehold">
            <div class="__linksup">
                <div class="__left-icon">
                    <div class="__wr5" style="background-image: url('img/idea.png'); background-size: contain; background-repeat: no-repeat; background-position: center;"></div>
                    <div class="__wr6">Dashboard</div>
                </div>
            </div>
            <div class="__linksup">
                <div class="__left-icon">
                    <div class="__wr5" style="background-image: url('img/list.png'); background-size: contain; background-repeat: no-repeat; background-position: center;"></div>
                    <div class="__wr6">Account Settings</div>

                </div>
            </div>
            <div class="__linksup">
                <div class="__left-icon">

                    <div class="__wr5" style="background-image: url('img/package.png'); background-size: contain; background-repeat: no-repeat; background-position: center;"></div>
                    <div class="__wr6">Inbox</div>

                </div>
            </div>
            <div class="__linksup">
                <div class="__left-icon">

                    <div class="__wr5" style="background-image: url('img/ll.jpg'); background-size: contain; background-repeat: no-repeat; background-position: center;"></div>
                    <div class="__wr6">Send Payment</div>

                </div>
            </div>
            <div class="__linksup">
                <div class="__left-icon">

                    <div class="__wr5" style="background-image: url('img/thumb.jpg'); background-size: contain; background-repeat: no-repeat; background-position: center;"></div>
                    <div class="__wr6">Recieve Payment</div>

                </div>
            </div>
            <div class="__linksup">
                <div class="__left-icon">

                    <div class="__wr5" style="background-image: url('img/git.jpg'); background-size: contain; background-repeat: no-repeat; background-position: center;"></div>
                    <div class="__wr6">Referal Earnings</div>

                </div>
            </div>

        </div>
    </div>

    <div class="__sideright">

        <div class="side-rtop">
            <div class="__icon-top">

                <div class="__drop-box" style="background-image: url('img/git.jpg'); background-position: center; background-repeat: no-repeat; background-size: contain;"></div>
                <div class="__icon-noti">
                    <div class="__boxxx" style="background-image: url('img/visual.png'); background-position: center; background-repeat: no-repeat; background-size: contain;";></div>
                    <select class="__drop-nottti">
                        <option>A.emmanuel</option>
                        <option>Balance</option>
                        <option>Request chat</option>
                        <option>Referal</option>

                    </select>
                </div>
            </div>
        </div>
        <div class="__sec-side">
            <div class="__box-side"></div>
            <div class="__box-side"></div>
            <div class="__box-side"></div>
            <div class="__box-side"></div>
        </div>

        <div class="__sec-ta"> </div>
        <div class="__holdblock">
            <div class="__block4">
                <div class="__list_top"> Recent Activities
                    <div class="__icon-qq"></div>
                </div>
                <div class="__list_re"></div>
                <div class="__list_re"></div>
                <div class="__list_re"></div>
                <div class="__list_re"></div>
                <div class="__list_re"></div>
                <div class="__list_re"></div>
            </div>
            <div class="__block4">
                <div class="__list_top"> Latest Site News
                    <div class="__icon-qq"></div>
                </div>
                <div class="__list_re"></div>
                <div class="__list_re"></div>
                <div class="__list_re"></div>
                <div class="__list_re"></div>
                <div class="__list_re"></div>
                <div class="__list_re"></div>
            </div>
        </div>
    </div>

</div>

@endsection

