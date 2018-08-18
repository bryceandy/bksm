@extends('template.app')

@section('title')
    BK Sports Massage | Booking
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
                <a href="/prices">Prices</a>
                <a href="/booking" class="underline">Book Us</a>
                <a href="/about-and-contact">About Us & Contacts</a>

                <div class="menu">
                    <div class="menubar"></div><br />
                    <div class="menubar ndChild"></div><br />
                    <div class="menubar"></div>
                </div>
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