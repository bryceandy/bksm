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
            <h1 class="text-center">Our Services</h1><br />

            <div class="accordion" id="accordionServices">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Massage Therapies
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionServices">
                        <div class="card-body">
                            <ul>
                                <li>Sports Massage</li>
                                <li>Deep Tissue Massage</li>
                                <li>Cupping Therapy</li>
                                <li>Hot Stone Massage</li>
                                <li>Body Slimming Massage</li>
                                <li>Prenatal Massage</li>
                                <li>Aromatherapy Massage</li>
                                <li>Swedish Massage</li>
                                <li>Thai Massage</li>
                                <li>Head Massage</li>
                                <li>Reflexology</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Waxing Treatments
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionServices">
                        <div class="card-body">
                             <ul>
                                 <li>Brazilian Bikini</li>
                                 <li>Under Arm</li>
                                 <li>Full Leg</li>
                             </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Facial Treatments
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionServices">
                        <div class="card-body">
                            <ul>
                                <li>Face Scrub</li>
                            </ul>
                        </div>
                    </div>
                </div>
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