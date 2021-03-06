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

            <a href="tel:+255736000021">CALL HERE <i class="fas fa-phone"></i></a>

            <div class="nav-links">
                <a href="/">Home</a>
                <a href="http://bksportsmassage.com/#wwd">Services</a>
                <a href="/prices" class="underline">Prices</a>
                <a href="/booking">Book Us</a>
                <a href="/about-and-contacts">About & Contacts</a>

                <div class="menu">
                    <div class="menubar"></div><br />
                    <div class="menubar ndChild"></div><br />
                    <div class="menubar"></div>
                </div>
            </div>
        </div>

        <div id="appBody">

            <h1 class="text-center pin">Price List</h1>

            <h2 class="text-left gree col-12">Massage Therapies</h2>
            <div class="col-12">
                <ul class="priceLists">
                    <li class="purp">Sports - 60min <span class="pin text-right">50,000</span></li>
                    <li class="purp">Sports - 90min <span class="pin text-right">80,000</span></li>
                    <li class="purp">Deep Tissue - 60min <span class="pin text-right">50,000</span></li>
                    <li class="purp">Deep Tissue - 90min <span class="pin text-right">80,000</span></li>
                    <li class="purp">Cupping Therapy - 60min <span class="pin text-right">50,000</span></li>
                    <li class="purp">Hot Stone - 60min <span class="pin text-right">60,000</span></li>
                    <li class="purp">Hot Stone - 90min <span class="pin text-right">90,000</span></li>
                    <li class="purp">Body Slimming - 60min <span class="pin text-right">60,000</span></li>
                    <li class="purp">Body Slimming - 90min <span class="pin text-right">90,000</span></li>
                    <li class="purp">Prenatal - 60min <span class="pin text-right">50,000</span></li>
                    <li class="purp">Aromatherapy - 60min <span class="pin text-right">50,000</span></li>
                    <li class="purp">Aromatherapy - 90min <span class="pin text-right">80,000</span></li>
                    <li class="purp">Swedish - 60min <span class="pin text-right">50,000</span></li>
                    <li class="purp">Swedish - 90min <span class="pin text-right">80,000</span></li>
                    <li class="purp">Thai - 60min <span class="pin text-right">50,000</span></li>
                    <li class="purp">Thai - 90min <span class="pin text-right">80,000</span></li>
                    <li class="purp">Couple - 75min <span class="pin text-right">110,000</span></li>
                    <li class="purp">Head - 30min <span class="pin text-right">20,000</span></li>
                    <li class="purp">Reflexology - 30min <span class="pin text-right">20,000</span></li>
                    <li class="purp">Body Scrub - 60min <span class="pin text-right">50,000</span></li>
                    <li class="purp">Sauna - 20min <span class="pin text-right">30,000</span></li>
                </ul>
            </div><br /><br />

            <h2 class="text-left gree col-12">Waxing Treatments</h2>
            <div class="col-12">
                <ul class="priceLists">
                    <li class="purp">Vajacial <span class="pin text-right">30,000</span></li>
                    <li class="purp">Brazilian Bikini <span class="pin text-right">15,000</span></li>
                    <li class="purp">Under Arm <span class="pin text-right">10,000</span></li>
                    <li class="purp">Full Leg <span class="pin text-right">20,000</span></li>
                    <li class="purp">Half Leg <span class="pin text-right">10,000</span></li>
                    <li class="purp">Lip Waxing <span class="pin text-right">10,000</span></li>
                    <li class="purp">Cheek Waxing <span class="pin text-right">10,000</span></li>
                    <li class="purp">Chin Waxing <span class="pin text-right">10,000</span></li>
                    <li class="purp">Full Arm <span class="pin text-right">20,000</span></li>
                    <li class="purp">Half Arm <span class="pin text-right">10,000</span></li>
                    <li class="purp">Chest & Stomach <span class="pin text-right">15,000</span></li>
                    <li class="purp">Full Back <span class="pin text-right">15,000</span></li>
                    <li class="purp">Full Body <span class="pin text-right">120,000</span></li>
                </ul>
            </div><br /><br />

            <h2 class="text-left gree col-12">Facial Treatments</h2>
            <div class="col-12">
                <ul class="priceLists">
                    <li class="purp">Facial Scrub <span class="pin text-right">10,000</span></li>
                    <li class="purp">Full Facial Treatment <span class="pin text-right">40,000</span></li>
                    <li class="purp">Facial Steaming <span class="pin text-right">15,000</span></li>
                    <li class="purp">Golden Mask <span class="pin text-right">10,000</span></li>
                    <li class="purp">Black Mask <span class="pin text-right">10,000</span></li>
                </ul>
            </div><br /><br />

            <h2 class="text-left gree col-12">ManiPedi Treatments</h2>
            <div class="col-12">
                <ul class="priceLists">
                    <li class="purp">Manicure <span class="pin text-right">15,000</span></li>
                    <li class="purp">Pedicure <span class="pin text-right">20,000</span></li>
                    <li class="purp">Nail Polish Removal <span class="pin text-right">3,000</span></li>
                    <li class="purp">Nail Polishing <span class="pin text-right">5,000</span></li>
                    <li class="purp">Nail Grooming <span class="pin text-right">10,000</span></li>
                </ul>
            </div><br />

            <div class="text-left col-12 purp">
                All prices listed are in Tanzanian Shillings. For further information <a href="/about-and-contacts">contact us</a>
            </div>
            <br /><br />

        </div>

        <div id="appFoot" class="text-center">

            2018 &copy;BK Sports Massage<br /><br />
            Created with <i class="far fa-heart"></i> by <a href="http://bryceandy.com" target="_blank">BryceAndy</a>

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