@extends('template.app')

@section('content')

    <div id="homeWrapper">

        <div id="homeNavi">
            <div class="logo">
                <a href="/">BK</a>
            </div>
            <div class="nav-links">
                <a href="/" class="underline">Home</a>
                <a href="/services">Services</a>
                <a href="/booking">Make a Booking</a>
                <a href="/about">About Us</a>
                <a href="/contact">Contacts</a>
            </div>
        </div>

        <div id="homeIntro">
            <img src="{{'images/bg.jpg'}}" />
            <div class="introText"></div>
            <button class="introAction">Book an Appointment</button>
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