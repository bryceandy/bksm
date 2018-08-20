@extends('template.app')

@section('title')
    BK Sports Massage | Booking
@endsection

@section('content')

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible alert-icon-left border-0">
            <button type="button" class="close" data-dismiss="alert">&Cross;</button>
            <strong class="text-center">{{session('success')}}</strong>&nbsp;
        </div>
    @endif

    @if(session()->has('fail'))
        <div class="alert alert-danger alert-dismissible alert-icon-left border-0">
            <button type="button" class="close" data-dismiss="alert">&Cross;</button>
            <strong class="text-center">{{session('fail')}}</strong>&nbsp;
        </div>
    @endif

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
                <a href="/booking" class="underline">Book Us</a>
                <a href="/about-and-contacts">About Us & Contacts</a>

                <div class="menu">
                    <div class="menubar"></div><br />
                    <div class="menubar ndChild"></div><br />
                    <div class="menubar"></div>
                </div>
            </div>
        </div>

        <div id="appBody">

            <h1 class="text-center pin">Booking Form</h1>

            <div class="text-left col-12 purp">
                It should be noted that current services are offered at your home or a place of convenience for the client
            </div>

            <div class="col-12">
                <form action="/booking" method="post">
                    {{csrf_field()}}

                    <label for="name" class="gree">Name</label>
                    <input id="name" type="text" class="form-control purp" name="client" /><br />

                    <label for="email" class="gree">Email</label>
                    <input id="email" type="email" class="form-control purp" name="email" required /><br />

                    <label for="number" class="gree">Phone Number</label>
                    <input id="number" type="number" class="form-control purp" name="number" required /><br />

                    <label for="day" class="gree">Day</label>
                    <input type="date" id="day" class="form-control purp" name="day" required /><br />

                    <label for="serv" class="gree">Treatments You Require</label>
                    <textarea id="serv" class="form-control purp" name="serv" required></textarea><br />

                    <button type="submit" name="submit" class="bookingBtn">Send Request</button>

                </form>
                <br /><br />
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