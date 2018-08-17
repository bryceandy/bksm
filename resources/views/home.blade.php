@extends('template.app')

@section('content')

    <div id="homeWrapper">

        <div id="homeNavi">
            <div class="logo">
                <a href="/"><img src="{{'images/bklogo.png'}}" /></a>
            </div>

            <a href="tel:+255786140987">CALL HERE <i class="fas fa-phone"></i></a>

            <div class="nav-links">
                <a href="/" class="underline">Home</a>
                <a href="/services">Services</a>
                <a href="/price-list">Pricing</a>
                <a href="/booking">Book Us</a>
                <a href="/about">About</a>
                <a href="/contact">Contacts</a>

                <div class="menu">
                    <div class="menubar"></div><br />
                    <div class="menubar ndChild"></div><br />
                    <div class="menubar"></div>
                </div>
            </div>
        </div>

        <div id="homeIntro">
            <img src="{{'images/bg.jpg'}}" />
            <div class="introText"></div>
            <button class="introAction">Book an Appointment</button>
        </div>

        <div id="waw">
            <h1 class="text-center">BK Sports Massage</h1><br />
            <div class="para text-center ">
                BK Sports Massage is a name synonymous with wellness, comfort and rejuvenation. This Heritage Sports massage & Spa offers you a chance to let us release your tension with various kinds of massages, body treatments, scrubs, body wrap, facials ManiPedi treatments and other packages.
                <span class="wawDelete">Our happiness lies in ensuring that we soothe you’re the soreness in your muscles, improve your sleep, boost the immune system function, increase mental alertness, ease the effects of cancer treatment, aid headache sufferers, alleviate depression and ultimately stress levels.</span>
            </div>
        </div>

        <div id="wwd">
            <h1 class="text-center">Our Services</h1>
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