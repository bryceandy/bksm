@extends('template.app')

@section('title')
    BK Sports Massage | Prices
@endsection

@section('content')

    <div id="homeWrapper">

        <div id="homeNavi">
            <div class="logo">
                <a href="/"><img src="{{'images/bklogo.png'}}" /></a>
            </div>

            <a href="tel:+255786140987">CALL HERE <i class="fas fa-phone"></i></a>

            <div class="nav-links">
                <a href="/">Home</a>
                <a href="http://bksportsmassage.com/#wwd">Services</a>
                <a href="/prices" class="underline">Prices</a>
                <a href="/booking">Book Us</a>
                <a href="/about-and-contacts">About Us & Contacts</a>

                <div class="menu">
                    <div class="menubar"></div><br />
                    <div class="menubar ndChild"></div><br />
                    <div class="menubar"></div>
                </div>
            </div>
        </div>

        <div id="appBody">

            <h1 class="text-center pin">Price List</h1>

        </div>

        <div id="appFoot" class="text-center">

            2018 &copy;BK Sports Massage<br /><br />
            Created with <i class="far fa-heart"></i> by <a href="http://bryceandy.com">BryceAndy</a>

        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){

            $('.underline').css('text-decoration', 'underline');

        });
    </script>
@endsection