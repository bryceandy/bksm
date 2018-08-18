@extends('template.app')

@section('title')
    BK Sports Massage | Your Road To Recovery
@endsection

@section('content')

    <div id="homeWrapper">

        <div id="homeNavi">
            <div class="logo">
                <a href="/"><img src="{{'images/bklogo.png'}}" /></a>
            </div>

            <a href="tel:+255786140987">CALL HERE <i class="fas fa-phone"></i></a>

            <div class="nav-links">
                <a href="/" class="underline">Home</a>
                <a href="#wwd" class="servicesLink">Services</a>
                <a href="/prices">Prices</a>
                <a href="/booking">Book Us</a>
                <a href="/about">About Us & Contacts</a>

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
            <button class="introAction" onclick="window.location.href='http://bksportsmassage.com/booking'">Book an Appointment</button>
        </div>

        <div id="waw">
            <h1 class="text-center">BK Sports Massage</h1><br />
            <div class="para text-center ">
                BK Sports Massage is a name synonymous with wellness, comfort and rejuvenation. This Heritage Sports massage & Spa offers you a chance to let us release your tension with various kinds of massages, body treatments, scrubs, body wrap, facials ManiPedi treatments and other packages.
                <span class="wawDelete">Our happiness lies in ensuring that we soothe you’re the soreness in your muscles, improve your sleep, boost the immune system function, increase mental alertness, ease the effects of cancer treatment, aid headache sufferers, alleviate depression and ultimately stress levels.</span>
            </div>
            <div id="bgimage"><img src="{{'/images/bklogobare.jpg'}}" /></div>
        </div>

        <div id="wwd">
            <h1 class="text-center">Our Services</h1>

            <div class="services">

                <button class="btn-lg" id="serviceGroup1">Massage Therapies <span id="sgicon1" class="float-right"><span class="plus first"></span><span class="plus"></span></span></button>
                <div class="w-80 toggle1">
                    <ul>
                        <li>Sports Massage</li>
                        <li>Deep-Tissue Massage</li>
                        <li>Cupping Therapy</li>
                        <li>Hot-Stone Massage</li>
                        <li>Body-Slimming Massage</li>
                        <li>Prenatal Massage</li>
                        <li>Aromatherapy Massage</li>
                        <li>Swedish Massage</li>
                        <li>Thai Massage</li>
                        <li>Head Massage</li>
                        <li>Reflexology Massage</li>
                        <li>Body Scrub Treatment</li>
                    </ul>
                </div>

                <button class="btn-lg" id="serviceGroup2">Waxing Treatments <span id="sgicon2" class="float-right"><span class="plus first"></span><span class="plus"></span></span></button>
                <div class="w-80 toggle2">
                    <ul>
                        <li>Brazilian Bikini</li>
                        <li>Under Arm</li>
                        <li>Full Leg</li>
                        <li>Half Leg</li>
                        <li>Lip Waxing</li>
                        <li>Cheek Waxing</li>
                        <li>Chin</li>
                        <li>Full Arm</li>
                        <li>Half Arm</li>
                        <li>Chest & Stomach</li>
                        <li>Full Back</li>
                        <li>Full Body Waxing</li>
                    </ul>
                </div>

                <button class="btn-lg" id="serviceGroup3">Facial Treatments <span id="sgicon3" class="float-right"><span class="plus first"></span><span class="plus"></span></span></button>
                <div class="w-80 toggle3">
                    <ul>
                        <li>Full Face Scrub</li>
                    </ul>
                </div>

                <button class="btn-lg" id="serviceGroup4">ManiPedi Treatments <span id="sgicon4" class="float-right"><span class="plus first"></span><span class="plus"></span></span></button>
                <div class="w-80 toggle4">
                    <ul>
                        <li>Manicure</li>
                        <li>Pedicure</li>
                    </ul>
                </div>

            </div>

        </div>

        <div id="clientelle">

            <h2 text-center>What Our Clients Say</h2><br />

            <div id="client1" class="client">
                <div class="card w-70">
                    <div class="card-body">
                        My first experience was very calm and relaxing. I would love to try out other treatments when I fly back to Dar.<span class="cliClose"> Btw, I had a little trouble with the booking</span>
                        <hr />
                        <span class="text-muted">Mary, Chef</span>
                    </div>
                </div>
            </div>

            <div id="client2" class="client">
                <div class="card w-70">
                    <div class="card-body">
                        <span class="cliClose">All this time I did not know the services are mobile, I should have re-read their website. Otherwise </span>nice, clean facilities and equipment, the staff is friendly too :)
                        <hr />
                        <span class="text-muted">Joshua Fayemi, Security Analyst</span>
                    </div>
                </div>

            </div>

            <div id="client3" class="client">
                <div class="card w-70">
                    <div class="card-body">
                        <span class="cliClose">BK Sports Massage might be new in the wellness industry, but </span>I did not expect to have the kind of service they gave me. I absolutely recommend them the next time anyone is in need of Spa treatments
                        <hr />
                        <span class="text-muted">Amin, Store Reseller</span>
                    </div>
                </div>

            </div>

        </div>

        <div id="foot" class="text-center">

            2018 &copy;BK Sports Massage<br /><br />
            Created with <i class="far fa-heart"></i> by <a href="http://bryceandy.com">BryceAndy</a>

        </div>

    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){

            $('.underline').css('text-decoration', 'underline');

            $("#serviceGroup1, #sgicon1").click(function(){
                $(".toggle1").toggleClass('display');
                $("#sgicon1").toggleClass('rot');
            });
            $("#serviceGroup2, #sgicon2").click(function(){
                $(".toggle2").toggleClass('display');
                $("#sgicon2").toggleClass('rot');
            });
            $("#serviceGroup3, #sgicon3").click(function(){
                $(".toggle3").toggleClass('display');
                $("#sgicon3").toggleClass('rot');
            });
            $("#serviceGroup4, #sgicon4").click(function(){
                $(".toggle4").toggleClass('display');
                $("#sgicon4").toggleClass('rot');
            });

            $(".servicesLink").click(function (e) {

                e.preventDefault();
                $(".nav-links").removeClass('showMenu');
                TweenMax.to(window, 1.5, {scrollTo:"#wwd"});

            });

            $("#serviceGroup2").click();
        });
    </script>
@endsection