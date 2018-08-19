@extends('template.app')

@section('title')
    BK Sports Massage | Prices
@endsection

@section('content')

    <div id="appWrapper">

        <div id="homeNavi">
            <div class="logo">
                <a href="/"><img src="{{'images/bklogo.png'}}" /></a>
            </div>

            <a href="tel:+255786140987">CALL HERE <i class="fas fa-phone"></i></a>

            <div class="nav-links">
                <a href="/">Home</a>
                <a href="http://bksportsmassage.com/#wwd">Services</a>
                <a href="/prices">Prices</a>
                <a href="/booking">Book Us</a>
                <a href="/about-and-contacts" class="underline">About Us & Contacts</a>

                <div class="menu">
                    <div class="menubar"></div><br />
                    <div class="menubar ndChild"></div><br />
                    <div class="menubar"></div>
                </div>
            </div>
        </div>

        <div id="appBody">

            <h1>Contact Us</h1>

            <div class="col-6 gree">

                Email BK Sports Massage through:<br />
                info@bksportsmassage.com<br /><br />

                Or call us:<br />
                +255 786 140 987

            </div><br /><br />

            <h1 class="text-center">About Us</h1>

            <div class="col-12 purp">
                BK Sports Massage Therapy is a leading provider of the world-renowned licensed massage therapy located in
                Dar es salaam, Tanzania. After earning the trust of a large number of customers in Tanzania, we are all
                set to become the most sought-after Sports therapy providers in East Africa Region.<br /><br />


                <strong>Our Mission</strong> is to operate a profitable business that provides high- end therapeutic
                massages and other aesthetic services in a state of art, chic professional environment.<br />

                It is our vision to enhance our clients’ wellness and natural beauty from the inside out. We see ourselves
                as providing avant-garde beauty and wellness services at all times. Hence, we aim to make the everyday ordinary
                as extraordinary.<br /><br />

            </div>

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