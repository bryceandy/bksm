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
                <a href="#wwd">Services</a>
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

            <div class="services">

                <button class="btn-lg" id="serviceGroup1">Massage Therapies <span id="sgicon1" class="float-right"><span class="plus first"></span><span class="plus"></span></span>
                    <div class="svimg servImage1"><img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fimage1.masterfile.com%2FgetImage%2FNjExMC0wNjcwMjcwNmVuLjAwMDAwMDAw%3DAKb2T8%2F6110-06702706en_Masterfile.jpg&imgrefurl=http%3A%2F%2Fwww.masterfile.com%2Fsearch%2Fen%2Fmassage%2Bpicture%2Bafrican%2Bpeople&docid=RrwVkqORSoO7PM&tbnid=frPKQYTh1EflVM%3A&vet=10ahUKEwifq9Hgw_TcAhUHpIsKHd14D1cQMwhWKAkwCQ..i&w=450&h=299&bih=662&biw=1366&q=massage%20black%20people&ved=0ahUKEwifq9Hgw_TcAhUHpIsKHd14D1cQMwhWKAkwCQ&iact=mrc&uact=8" /></div>

                </button>
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

                <button class="btn-lg" id="serviceGroup2">Waxing Treatments <span id="sgicon2" class="float-right"><span class="plus first"></span><span class="plus"></span></span>
                    <div class="svimg servImage2"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVmYeYvj9VcDLv7-ZM6KxMyFglE83hVB40yKMpccp60kyRr_vWrQ" /></div>

                </button>
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

                <button class="btn-lg" id="serviceGroup3">Facial Treatments <span id="sgicon3" class="float-right"><span class="plus first"></span><span class="plus"></span></span>
                    <div class="svimg servImage3"><img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fimage1.masterfile.com%2FgetImage%2FNjE0LTAyOTgzOTExZW4uMDAwMDAwMDA%3DAEe5kO%2F614-02983911en_Masterfile.jpg&imgrefurl=https%3A%2F%2Fwww.masterfile.com%2Fsearch%2Fen%2Ffacial%2Btreatment%2Bafrican%2Bamerican&docid=rpCDjXMXy9qU0M&tbnid=6MfD72rMfW09iM%3A&vet=10ahUKEwixra-ExvTcAhXBCpoKHeioDLoQMwhFKAgwCA..i&w=300&h=450&bih=662&biw=1366&q=facial%20treatment%20black%20people&ved=0ahUKEwixra-ExvTcAhXBCpoKHeioDLoQMwhFKAgwCA&iact=mrc&uact=8" /></div>

                </button>
                <div class="w-80 toggle3">
                    <ul>
                        <li>Full Face Scrub</li>
                    </ul>
                </div>

                <button class="btn-lg" id="serviceGroup4">ManiPedi Treatments <span id="sgicon4" class="float-right"><span class="plus first"></span><span class="plus"></span></span>
                    <div class="svimg servImage2"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSR6MMRKvmR8tgI5G-35JPD0WFO9HIaLcwJgxX8BHtCGeI2qyUs" /></div>

                </button>
                <div class="w-80 toggle4">
                    <ul>
                        <li>Manicure</li>
                        <li>Pedicure</li>
                    </ul>
                </div>

            </div>

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

        });
    </script>
@endsection