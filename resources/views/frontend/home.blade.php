@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>F.O.R - Facilitated Office Residence</title>
@endsection

@section('content')
    <!-- Jumbotron Header -->
    {{--<header class="jumbotron my-4">--}}
        {{--<h1 class="display-3">A Warm Welcome!</h1>--}}
        {{--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>--}}
        {{--<a href="#" class="btn btn-primary btn-lg">Call to action!</a>--}}
    {{--</header>--}}
<div class="container">
        <!-- Trigger the modal with a button -->
        {{-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> --}}
      
        <!-- Modal -->
        
    <div class="row mb-2">
        <div class="col-lg-9 col-md-9 col-12 px-md-1">
            <div class="card home-banner-responsive">
                <div id="slide_1" class="card-body" style="background-image: url('{{ asset('images/frontend/home/banner-1.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                </div>
                <div id="slide_2" class="card-body" style="background-image: url('{{ asset('images/frontend/home/banner-2.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;
                        display: none;">
                </div>
                <div id="slide_3" class="card-body" style="background-image: url('{{ asset('images/frontend/home/banner-3.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;
                        display: none;">
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 px-md-1 d-none d-md-block">
            <div class="row mb-2">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <a class="switch-slide" style="text-decoration: none; cursor: pointer;" data-slide="1">
                            <div id="button_1" class="card-body bg-custom-brown text-white">
                                <span class="h5">Build within</span><br/>
                                <span class="h5">Collins Boulevard</span><br/>
                                <hr class="d-inline-flex w-50 border-white"/>
                                <p>Rise within artsy living place at Serpong</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <a class="switch-slide" style="text-decoration: none; cursor: pointer;" data-slide="2">
                            <div id="button_2" class="card-body bg-custom-black text-white">
                                <span class="h5">The First</span><br/>
                                <span class="h5">Backyard Parking</span><br/>
                                <hr class="d-inline-flex w-50 border-white"/>
                                <p>The first and convienent backyard parking feature</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <a class="switch-slide" style="text-decoration: none; cursor: pointer;" data-slide="3">
                            <div id="button_3" class="card-body bg-custom-black text-white">
                                <span class="h5">Boutique Office</span><br/>
                                <hr class="d-inline-flex w-50 border-white"/>
                                <p>One fine attractive Boutique Office</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-block d-md-none" style="font-size: 14px !important;">
        <div class="row mb-2 ">
            <div class="col-4 pr-1">
                <div class="card">
                    <a class="switch-slide" style="text-decoration: none; cursor: pointer;" data-slide="1">
                        <div id="button_mobile_1" class="card-body bg-custom-brown text-white p-2" style="height: 100px;">
                            <div class="box h-100 d-flex justify-content-center flex-column text-center">
                                <span>Build within</span>
                                <span>Collins Boulevard</span>
                            </div>
                            {{--<hr class="d-inline-flex w-50 border-white"/>--}}
                            {{--<p>Lorem ipsum dolor sit amet unvalor unum equi</p>--}}
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4 px-1">
                <div class="card">
                    <a class="switch-slide" style="text-decoration: none; cursor: pointer;" data-slide="2">
                        <div id="button_mobile_2" class="card-body bg-custom-black text-white" style="height: 100px;">
                            <div class="box h-100 d-flex justify-content-center flex-column text-center">
                                <span>The First</span>
                                <span>Backyard Parking</span>
                            </div>
                            {{--<hr class="d-inline-flex w-50 border-white"/>--}}
                            {{--<p>Lorem ipsum dolor sit amet unvalor unum equi</p>--}}
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4 pl-1">
                <div class="card">
                    <a class="switch-slide" style="text-decoration: none; cursor: pointer;" data-slide="3">
                        <div id="button_mobile_3" class="card-body bg-custom-black text-white" style="height: 100px;">
                            <div class="box h-100 d-flex justify-content-center flex-column text-center">
                                <span>Boutique Office</span>
                            </div>
                            {{--<hr class="d-inline-flex w-50 border-white"/>--}}
                            {{--<p>Lorem ipsum dolor sit amet unvalor unum equi</p>--}}
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-9 col-md-9 px-md-1 px-lg-1">
            <div class="card">
                <div class="card-body bg-custom-black text-white p-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="w-100 border-top border-bottom border-white text-custom-style">
                                <span class="h1">FIRST</span><br/>
                                <span class="h1">AND</span><br/>
                                <span class="h1 text-custom-light-brown">F.O.R.</span><span class="h1">EMOST</span>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p><b>Pioneers are individuals reaching to secede from the status quo</b></p>
                            <p>Breaking new ground in the field of "Small Office Home Office" is the latest launch by Triniti Land</p>
                            <p>True to its entrepreneurial roots and inspired by the ideology of pioneership, F.O.R by Triniti Land is sophisticated yet functional.
                                Exquisitely designed, merging inspiration and architecture, this is for those who dream of taking humble beginnings to greater levels of success</p>
                        </div>
                    </div>
                    <div class="w-25 position-custom-bottom-left bg-custom-brown p-2 text-center d-none d-sm-block">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-4">
                                <span><b>Learn More</b></span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-4">
                                <a href="{{ route('frontend.introduction') }}">
                                    <img src="{{ asset('images/frontend/arrow.png') }}" height="30"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 px-md-1 px-lg-1">
            <div class="card">
                <div class="card-body main-banner-responsive-short" style="background-image: url('{{ asset('images/frontend/home/home-2.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover">
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-6 col-md-6 px-md-1 px-lg-1">
            <div class="row mb-2">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 pr-1">
                            <div class="card">
                                <div class="card-body bg-custom-brown">
                                    <div style="height: 200px;">
                                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                                            <a href="{{ route('frontend.developer') }}">
                                                <img src="{{ asset('images/frontend/arrow.png') }}" height="75">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-7 pl-1">
                            <div class="card">
                                <div class="card-body text-right pl-0 pl-sm-2">
                                    <div class="text-custom-style">
                                        <span class="h1 font-weight-bold">ABOUT</span><br/>
                                        <span class="h1 text-custom-light-brown font-weight-bold">DEVELOPER</span>
                                    </div>
                                    <hr class="d-inline-flex flex-row-reverse w-50 border-dark"/>
                                    <p>Finely Crafted By Triniti Land</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9 col-8 pr-1">
                            <div class="card">
                                <div class="card-body text-right bg-custom-black pl-0 pl-sm-2">
                                    <div class="text-custom-style">
                                        <span class="h1 text-white font-weight-bold">PRIME</span><br/>
                                        <span class="h1 text-custom-light-brown font-weight-bold">LOCATION</span>
                                    </div>
                                    <hr class="d-inline-flex flex-row-reverse w-50 border-white"/>
                                    <p class="text-white">Strategically placed<br/>in a mature location</p>
                                    <div class="position-custom-bottom-left bg-custom-brown p-2 text-center home-width-responsive">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-9">
                                                <span class="text-white"><b>Check Our Location</b></span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-3">
                                                <a href="{{ route('frontend.location') }}">
                                                    <img src="{{ asset('images/frontend/arrow.png') }}" height="25"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-4 pl-1">
                            <div class="card">
                                <div class="card-body prime-location-responsive" style="background-image: url('{{ asset('images/frontend/home/home-3.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        background-size: cover;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 px-md-1 px-lg-1">
            <div class="row mb-2">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        {{--<div class="card-body" style="background-image: url('{{ asset('images/frontend/home/home-video.jpg') }}');--}}
                                {{--background-repeat: no-repeat;--}}
                                {{--background-position: center;--}}
                                {{--background-size: cover;--}}
                                {{--height: 340px;">--}}
                        {{--</div>--}}
                        <div class="card-body">
                            <div class="videoWrapper">
                                <!-- Copy & Pasted from YouTube -->
                                <iframe width="560" height="349" src="https://www.youtube.com/embed/7Zy6bjt6T1s" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-8 pr-1">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Collins Boulevard</h5>
                                    <h5>Video</h5>
                                    <hr class="d-inline-flex w-50 border-dark"/>
                                    <p>A prestigious artsy approach of residential spaces</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 pl-1">
                            <div class="card">
                                <div class="card-body bg-custom-black">
                                    <div class="text-custom-style font-weight-bold">
                                        <span class="h1 text-white">WHY</span><br/>
                                        <span class="h1 text-custom-light-brown">FOR</span>
                                    </div>
                                    <div class="position-custom-bottom-right bg-custom-brown p-2 text-center text-white w-100">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6 col-12 px-1">
                                                <span class="d-none d-sm-block"><b>Find Out</b></span>
                                            </div>
                                            <div class="col-lg-5 col-md-6 col-12 pr-1">
                                                <a href="{{ route('frontend.introduction') }}">
                                                    <img src="{{ asset('images/frontend/arrow.png') }}" height="30"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <div class="modal fade " id="exampleModalCenter"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      
        <!-- Modal content-->
        <div class="modal-content justify-content-center text-center" style="background-color: #282e3a;">
          {{-- <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" id="exampleModalCenterTitle"></h4>
          </div> --}}

            <div class="modal-body" style="height: 500px;">
                    <div class="box h-100 d-flex justify-content-center flex-column text-center">
                        <div id="clockdiv">
                            <div>
                            <div style="background-color: #fa5559">
                                <span class="days text-white"></span>
                            </div>
                                <div class="smalltext" style="color:#797f8d">Days</div>
                            </div>
                            <div>
                            <div style="background-color: #2dcb74">
                                <span class="hours text-white"></span>
                            </div>
                                <div class="smalltext" style="color:#797f8d">Hours</div>
                            </div>
                            <div>
                            <div style="background-color: #f6bc5b">
                                <span class="minutes text-white"></span>
                            </div>
                                <div class="smalltext" style="color:#797f8d">Minutes</div>
                            </div>
                            {{-- <div>
                                <span class="seconds"></span>
                                <div class="smalltext">Seconds</div>
                            </div> --}}
                        </div>
                    </div>                    
            </div>
            
          
          {{-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div> --}}
        </div>
        
      </div>
    </div> 
</div>
@endsection

@section('styles')
    <style>
    	body{
	text-align: center;
	background: ;
    font-family: sans-serif;
    font-weight: 100;
}


#clockdiv{
	font-family: sans-serif;
	/* color: #fff; */
	display: inline-block;
	font-weight: 100;
	text-align: center;
	font-size: 50px;
}

#clockdiv > div{
	padding: 10px;
	border-radius: 3px;
	/* background: #00BF96; */
	display: inline-block;
}

#clockdiv div > span{
	padding: 15px;
	border-radius: 3px;
	/* background: #00816A; */
	display: inline-block;
}

.smalltext{
	padding-top: 5px;
	font-size: 20px;
}
        .videoWrapper {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 */
            padding-top: 25px;
            height: 0;
        }
        .videoWrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .clock-padding{
            padding: 20 px;
        }

        @media (min-width: 768px) {
            .clock-padding{
                padding-top: 200px;
                padding-bottom: 200px;
                padding-left: 99px;
                padding-right: 99px
            }

            .clock-box{
                height:400px;
                width:800px;
            }
    </style>
@endsection

@section('scripts')
	<script>
        $('#exampleModalCenter').modal('show');
		$(window).load(function(){        
        $('#exampleModalCenter').modal('show');
        });

    </script>
    <script>
        $(document).on("click", '.switch-slide', function (e){
            var slideIdx = $(this).data('slide');

            $('#slide_1').hide();
            $('#slide_2').hide();
            $('#slide_3').hide();

            $('#button_1').css('background', '#393939');
            $('#button_2').css('background', '#393939');
            $('#button_3').css('background', '#393939');
            $('#button_mobile_1').css('background', '#393939');
            $('#button_mobile_2').css('background', '#393939');
            $('#button_mobile_3').css('background', '#393939');

            $('#button_' + slideIdx).css('background', '#654234');
            $('#button_mobile_' + slideIdx).css('background', '#654234');
            $('#slide_' + slideIdx).show(500);
        });
    </script>
    <script>
        function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
    };
}

function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

    function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
        clearInterval(timeinterval);
    }
}

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}

//var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
var deadline = new Date(2019,3,27);
//alert(deadline);
initializeClock('clockdiv', deadline);
</script>
@endsection