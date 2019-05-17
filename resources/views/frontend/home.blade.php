<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Finfolk Live - Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Finfolk, Property, Event">
    <title>Finfolk Live</title>

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/custom-font.css') }}">
</head>
<style>
    .img-banner-responsive{
        height: 200px;
    }
    .img-banner-responsive2{
        height: 1550px;
    }
    .img-responsive{
        height: 90px;
    }

    .img-early-bird-responsive{
        height: 90px;
    }

    .bold{
        font-weight: bold;
    }
    .subfont{
        font-size: 20px;
    }
    .pt-5-custom{
        margin-top: 3em!important;
    }
    .pt-5{
        margin-top: 5em!important;
    }
    .blue{
        color: #1b287b;
    }
    .custom-border-right{
        border-right: 1px solid white;
        height: 200px;
        margin-bottom: 50px;
    }
    .custom-border-left{
        border-left: 1px solid black;
        height: 200px;
        margin-bottom: 50px;
    }

    ul{
        padding-inline-start: 0 !important;
    }

    li {
        display: inline-block;
        font-size: 1.5em;
        list-style-type: none;
        padding: 1em;
        text-transform: uppercase;
        color: #fff;
        padding: 10px !important;
    }

    li span {
        display: block;
        font-size: 4.5rem;
        color: #fff;
    }

    @media (min-width: 768px) {

        .img-banner-responsive{
            height: 758px;
        }
        .img-banner-responsive2{
            height: 650px;
        }
        .img-responsive{
            height: 90px;
        }

        .img-early-bird-responsive{
            height: 110px;
        }
    }

    @media (min-width: 1800px) {

        .img-banner-responsive{
            height: 1070px;
        }
    }
</style>
<body>
<section>
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="w-100 img-banner-responsive" style="background-image: url({{ asset('images/finfolk/finfolk-website-02.jpg') }});
					background-repeat: no-repeat;
					background-position: center;
					background-size: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="w-100 img-banner-responsive" style="background-image: url({{ asset('images/finfolk/vid-dummy.png') }});
					background-repeat: no-repeat;
					background-position: center;
					background-size: cover;">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="d-none d-md-block pb-4" style="background-image: url({{ asset('images/finfolk/finfolk-website-03.jpg') }});
	        background-repeat: no-repeat;
	        background-position: center;
            background-size: cover;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <p class="font-custom-titillium-semi-bold-upright font-color-light-red" style="font-size: 50px;">VIP Seat</p>
                <p class="font-custom-titillium-semi-bold-upright font-color-light-red pb-3"style="font-size: 20px;">limited for 30 persons</p>
                <p class="font-custom-titillium-semi-bold-upright text-white pb-3" style="font-size: 20px;">Benefit VIP</p>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-1"></div>
            <div class="col-2 text-center custom-border-right">
                <img src="{{ asset('images/finfolk/finfolk-website-05.png') }}" alt="harusnya front seat" width="130px">
                <p class="font-custom-titillium-semi-bold-upright pt-2 text-white font-size-benefit" style="margin-top:31px;">Front Seat</p>
            </div>
            <div class="col-2 text-center custom-border-right">
                <img src="{{ asset('images/finfolk/finfolk-website-06.png') }}" alt="harusnya digital handout" width="100px">
                <p class="font-custom-titillium-semi-bold-upright pt-2 text-white font-size-benefit" style="margin-top:9px;">Digital Handout</p>
            </div>
            <div class="col-2 text-center custom-border-right">
                <img src="{{ asset('images/finfolk/finfolk-website-07.png') }}" alt="harusnya lunch with speakers" width="100px">
                <p class="font-custom-titillium-semi-bold-upright pt-2 text-white font-size-benefit" style="margin-top:0px;">Lunch with <br/>Speakers</p>
            </div>
            <div class="col-2 text-center custom-border-right">
                <img src="{{ asset('images/finfolk/finfolk-website-08.png') }}" alt="harusnya private gathering" width="100px">
                <p class="font-custom-titillium-semi-bold-upright pt-2 text-white font-size-benefit" style="margin-top:0px;">Salt Venture<br/> Private<br/> Gathering</p>
            </div>
            <div class="col-2 text-center">
                <img src="{{ asset('images/finfolk/finfolk-website-09.png') }}" alt="harusnya voucher" width="120px">
                <p class="font-custom-titillium-semi-bold-upright pt-2 text-white font-size-benefit" style="margin-top:28px;">Land X Voucher<br/> worth <br/>Rp 1.000.000</p>
            </div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div>
                    <div class="img-early-bird-responsive" style="background-image: url({{ asset('images/finfolk/finfolk-website-13.png') }});
							background-repeat: no-repeat;
							background-position: center;
							background-size: contain;">
                        <div class="box h-100 d-flex justify-content-center flex-column">
                            <span class="font-custom-titillium-semi-bold-upright text-white" style="font-size: 20px;">Rp 2.500.000,-</span>
                            <span class="font-custom-titillium-semi-bold-upright text-white" style="font-size: 20px;">EARLY BIRD : Rp 2.250.000,-</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- VIP mobile start -->
<section class="d-block d-md-none pb-5" style="background-image: url({{ asset('images/finfolk/mobile-finfolk-03.jpg') }});
	        background-repeat: no-repeat;
	        background-position: center;
            background-size: cover;">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-12 text-center mt-5">
                <p class="font-custom-titillium-semi-bold-upright font-color-light-red" style="font-size: 40px;">VIP Seat</p>
                <p class="font-custom-titillium-semi-bold-upright font-color-light-red mb-4" style="font-size: 20px;">limited for 30 persons</p>
                <p class="font-custom-titillium-semi-bold-upright text-white" style="font-size: 20px;">Benefit VIP</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 text-center mb-4">
                <img class="mb-3" src="{{ asset('images/finfolk/finfolk-website-05.png') }}" alt="harusnya front seat" width="90px">
                <p class="font-custom-titillium-semi-bold-upright font-size-benefit-mobile text-white">Front Seat</p>
                <hr class="mx-auto mt-4" style="border-bottom: 2px solid #fff;width: 40%;"/>
            </div>
            <div class=" col-12 text-center mb-4">
                <img class="mb-3" src="{{ asset('images/finfolk/finfolk-website-06.png') }}" alt="harusnya digital handout" width="70px">
                <p class="font-custom-titillium-semi-bold-upright font-size-benefit-mobile text-white">Digital Handout</p>
                <hr class="mx-auto mt-4" style="border-bottom: 2px solid #fff;width: 40%;"/>
            </div>
            <div class="col-12 text-center mb-4">
                <img class="mb-3" src="{{ asset('images/finfolk/finfolk-website-07.png') }}" alt="harusnya lunch with speakers" width="70px">
                <p class="font-custom-titillium-semi-bold-upright font-size-benefit-mobile text-white">Lunch with Speakers</p>
                <hr class="mx-auto mt-4" style="border-bottom: 2px solid #fff;width: 40%;"/>
            </div>
            <div class="col-12 text-center mb-4">
                <img class="mb-3" src="{{ asset('images/finfolk/finfolk-website-08.png') }}" alt="harusnya private gathering" width="70px">
                <p class="font-custom-titillium-semi-bold-upright font-size-benefit-mobile text-white">Salt Venture Private<br/> Gathering</p>
                <hr class="mx-auto mt-4" style="border-bottom: 2px solid #fff;width: 40%;"/>
            </div>
            <div class="col-12 text-center mb-4">
                <img class="mb-3" src="{{ asset('images/finfolk/finfolk-website-09.png') }}" alt="harusnya voucher" width="90px">
                <p class="font-custom-titillium-semi-bold-upright font-size-benefit-mobile text-white">Land X Voucher<br/> worth Rp 1.000.000</p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 text-center">
                <div>
                    <div style="background-image: url({{ asset('images/finfolk/finfolk-website-13.png') }});
	                    background-repeat: no-repeat;
	                    background-position: center;
                        background-size: contain;
                        height: 100px;">
                        <div class="box h-100 d-flex justify-content-center flex-column">
                            <span class="font-custom-titillium-semi-bold-upright text-white" style="font-size: 18px;">Rp 2.500.000,-</span>
                            <span class="font-custom-titillium-semi-bold-upright text-white" style="font-size: 18px;">EARLY BIRD : Rp 2.250.000,-</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- VIP mobile end -->

<section class="d-none d-md-block mb-5">
    <div class="container-fluid">
        <div class="row blue mb-5">
            <div class="col-12 text-center mt-5">
                <h1 class="font-custom-titillium-semi-bold-upright" style="font-size: 60px;">General Seat</h1>
                <span class="font-custom-titillium-semi-bold-upright" style="font-size: 28px;">270 persons</span><br/><br/><br/>
                <span class="font-custom-titillium-semi-bold-upright" style="font-size: 28px;">Benefit</span>
            </div>
        </div>
        <div class="row blue">
            <div class="col-3"></div>
            <div class="col-2 text-center">
                <img src="{{ asset('images/finfolk/finfolk-website-10.png') }}" alt="harusnya digital handout" width="100px">
                <p class="font-custom-titillium-semi-bold-upright font-size-benefit pt-2" style="margin-top:9px;">Digital Handout</p>
            </div>
            <div class="col-2 text-center custom-border-left">
                <img src="{{ asset('images/finfolk/finfolk-website-11.png') }}" alt="harusnya lunch with speakers" width="100px">
                <p class="font-custom-titillium-semi-bold-upright font-size-benefit pt-2" style="margin-top:18px;">Lunch Buffet</p>
            </div>
            <div class="col-2 text-center custom-border-left">
                <img src="{{ asset('images/finfolk/finfolk-website-12.png') }}" alt="harusnya voucher" width="120px">
                <p class="font-custom-titillium-semi-bold-upright font-size-benefit pt-2" style="margin-top:28px;">Land X Voucher</p>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-3">
            <div class="col-12 text-center">
                <div class="img-early-bird-responsive" style="background-image: url('{{ asset('images/finfolk/finfolk-website-14.png') }}');
					background-repeat: no-repeat;
					background-position: center;
					background-size: contain;">
                    <div class="box h-100 d-flex justify-content-center flex-column">
                        <span class="font-custom-titillium-semi-bold-upright text-white" style="font-size: 18px;">Rp 1.500.000,-</span>
                        <span class="font-custom-titillium-semi-bold-upright text-white" style="font-size: 18px;">EARLY BIRD : Rp 1.250.000,-</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center blue mt-5">
                <span style="font-size: 20px;">Book by Whats app: </span>
                <span class="font-weight-bold" style ="font-size: 20px;">081288822284</span>
            </div>
        </div>
    </div>
</section>

<!-- Reguler mobile start -->
<section class="d-block d-md-none mb-5">
    <div class="container-fluid">
        <div class="row blue mb-5">
            <div class="col-12 text-center mt-5">
                <p class="font-custom-titillium-semi-bold-upright" style="font-size: 40px;">General Seat</p>
                <p class="font-custom-titillium-semi-bold-upright pb-3"style="font-size: 20px;">270 persons</p>
                <p class="font-custom-titillium-semi-bold-upright" style="font-size: 20px;">Benefit</p>
            </div>
        </div>
        <div class="row blue">
            <div class="col-12 text-center mb-4">
                <img class="mb-3" src="{{ asset('images/finfolk/finfolk-website-10.png') }}" alt="harusnya digital handout" width="70px">
                <p class="font-custom-titillium-semi-bold-upright py-2 font-size-benefit-mobile">Digital Handout</p>
                <hr class="mx-auto mt-4" style="border-bottom: 2px solid #000; width: 55%;"/>
            </div>
            <div class="col-12 text-center mb-4">
                <img class="mb-3" src="{{ asset('images/finfolk/finfolk-website-11.png') }}" alt="harusnya lunch with speakers" width="70px">
                <p class="font-custom-titillium-semi-bold-upright py-2 font-size-benefit-mobile">Lunch Buffet</p>
                <hr class="mx-auto mt-4" style="border-bottom: 2px solid #000;width: 55%;"/>
            </div>
            <div class="col-12 text-center mb-4">
                <img class="mb-3" src="{{ asset('images/finfolk/finfolk-website-12.png') }}" alt="harusnya voucher" width="90px">
                <p class="font-custom-titillium-semi-bold-upright py-2 font-size-benefit-mobile">Land X Voucher</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 text-center">
                <div class="img-early-bird-responsive" style="background-image: url({{ asset('images/finfolk/finfolk-website-14.png') }});
					background-repeat: no-repeat;
					background-position: center;
					background-size: contain;">
                    <div class="box h-100 d-flex justify-content-center flex-column">
                        <span class="font-custom-titillium-semi-bold-upright text-white" style="font-size: 18px;">Rp 1.500.000,-</span>
                        <span class="font-custom-titillium-semi-bold-upright text-white" style="font-size: 18px;">EARLY BIRD : Rp 1.250.000,-</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center blue mt-5">
                <p class="font-custom-titillium-regular-upright" style="font-size: 20px;">Book by Whats app : <b>081288822284</b></p>
            </div>
        </div>
    </div>
</section>
<!-- Reguler mobile end -->

<section class="py-5" style="background-color: #182583;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="font-custom-titillium-semi-bold-upright text-white" style="font-size: 50px;">Launching Soon</h1>
            </div>
        </div>
        <div class="d-none d-md-block">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 col-12 text-center">
                    <div class="flex-w flex-sa-m cd100 p-t-42 p-b-22 p-l-50 p-r-50 respon1">
                        <div class="flex-col-c-b wsize2 m-b-20">
                            <span class="font-custom-titillium-semi-bold-upright l1-txt2 p-b-4 days">35</span>
                            <span class="font-custom-titillium-regular-upright m2-txt2" style="padding-top: 20px;">DAYS</span>
                        </div>

                        <span class="l1-txt2 p-b-22" style="padding-bottom: 73px;">:</span>

                        <div class="flex-col-c-m wsize2 m-b-20">
                            <span class="font-custom-titillium-semi-bold-upright l1-txt2 p-b-4 hours">17</span>
                            <span class="font-custom-titillium-regular-upright m2-txt2" style="padding-top: 20px;">HOURS</span>
                        </div>

                        <span class="l1-txt2 p-b-22" style="padding-bottom: 73px;">:</span>

                        <div class="flex-col-c-m wsize2 m-b-20">
                            <span class="font-custom-titillium-semi-bold-upright l1-txt2 p-b-4 minutes">50</span>
                            <span class="font-custom-titillium-regular-upright m2-txt2" style="padding-top: 20px;">MINUTES</span>
                        </div>

                        <span class="l1-txt2 p-b-22" style="padding-bottom: 73px;">:</span>

                        <div class="flex-col-c-m wsize2 m-b-20">
                            <span class="font-custom-titillium-semi-bold-upright l1-txt2 p-b-4 seconds">39</span>
                            <span class="font-custom-titillium-regular-upright m2-txt2" style="padding-top: 20px;">SECONDS</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <div class="d-md-none d-block">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="flex-w flex-sa-m cd100 p-t-42 p-b-22 p-l-50 p-r-50 respon1">
                        <div class="flex-col-c-m m-b-20" style="width: 40px;">
                            <span class="font-custom-titillium-semi-bold-upright l1-txt1 p-b-4 days">35</span>
                            <span class="font-custom-titillium-regular-upright m2-txt2" style="padding-top: 20px; font-size: 15px;">DAYS</span>
                        </div>

                        <span class="l1-txt2" style="padding-bottom: 65px;">:</span>

                        <div class="flex-col-c-m m-b-20" style="width: 40px;">
                            <span class="font-custom-titillium-semi-bold-upright l1-txt1 p-b-4 hours">17</span>
                            <span class="font-custom-titillium-regular-upright m2-txt2" style="padding-top: 20px; font-size: 15px;">HOURS</span>
                        </div>

                        <span class="l1-txt2" style="padding-bottom: 65px;">:</span>

                        <div class="flex-col-c-m m-b-20" style="width: 40px;">
                            <span class="font-custom-titillium-semi-bold-upright l1-txt1 p-b-4 minutes">50</span>
                            <span class="font-custom-titillium-regular-upright m2-txt2" style="padding-top: 20px; font-size: 15px;">MINUTES</span>
                        </div>

                        <span class="l1-txt2" style="padding-bottom: 65px;">:</span>

                        <div class="flex-col-c-m m-b-20" style="width: 40px;">
                            <span class="font-custom-titillium-semi-bold-upright l1-txt1 p-b-4 seconds">39</span>
                            <span class="font-custom-titillium-regular-upright m2-txt2" style="padding-top: 20px; font-size: 15px;">SECONDS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('js/countdowntime/moment.min.js') }}"></script>
<script src="{{ asset('js/countdowntime/moment-timezone.min.js') }}"></script>
<script src="{{ asset('js/countdowntime/moment-timezone-with-data.min.js') }}"></script>
<script src="{{ asset('js/countdowntime/countdowntime.js') }}"></script>

<script>
    $('.cd100').countdown100({
        /*Set Endtime here*/
        /*Endtime must be > current time*/
        endtimeYear: 2019,
        endtimeMonth: 6,
        endtimeDate: 19,
        endtimeHours: 10,
        endtimeMinutes: 0,
        endtimeSeconds: 0,
        timeZone: "Asia/Jakarta"
        // ex:  timeZone: "America/New_York"
        //go to " http://momentjs.com/timezone/ " to get timezone
    });
</script>
</body>
</html>