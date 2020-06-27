<html dir="ltr" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Finfolk Live - Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Finfolk, Property, Event">
    <title>Finfolk Live</title>

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/custom-font.css') }}">
</head>
<style>
    .img-banner-responsive{
        height: 250px;
    }
    .img-banner-responsive2{
        height: 1550px;
    }
    .img-responsive{
        height: 90px;
    }

    .img-early-bird-responsive{
        height: 70px;
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
        height: 74px;
        margin-bottom: 50px;
    }

    .custom-border-right-desktop{
        border-right: 1px solid white;
        height: 195px;
        margin-bottom: 50px;
    }

    .custom-border-right2{
        border-right: 1px solid black;
        height: 90px;
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
        text-transform: uppercase;
        color: #fff;
        padding: 10px !important;
    }

    li span {
        display: block;
        font-size: 4.5rem;
        color: #fff;
    }

    .galleries img{
        width: 100%;
        height: auto;
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
            height: 100px;
        }

        .galleries img{
            /*width: initial;*/
            height: auto;
        }
    }

    @media (min-width: 1800px) {

        .img-banner-responsive{
            height: 1050px;
        }
    }
</style>
<body>
<section class="d-none d-md-block">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="w-100 img-banner-responsive" style="background-image: url({{ asset('images/finfolk/june/finfolk_june_desktop_01.png') }});
					background-repeat: no-repeat;
					background-position: center;
					background-size: cover;">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="d-block d-md-none">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="w-100" style="background-image: url({{ asset('images/finfolk/june/finfolk_june_mobile_01.png') }});
					background-repeat: no-repeat;
					background-position: center;
                    background-size: cover;
                    height: 650px;">
                </div>
            </div>
        </div>
    </div>
</section>

{{--DISRUPTING THE NEXT DECADE--}}
<section class="d-none d-md-block">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="w-100" style="background-image: url({{ asset('images/finfolk/june/finfolk_june_desktop_02.png') }});
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                    height: 4800px;">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="d-block d-md-none">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="w-100 img-banner-responsive" style="background-image: url({{ asset('images/finfolk/june/finfolk_june_mobile_02.png') }});
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                    height: 1800px;">
                </div>
            </div>
        </div>
    </div>
</section>

{{--SPEAKERS LINE UP--}}
<section class="d-none d-md-block">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="w-100" style="background-image: url({{ asset('images/finfolk/june/finfolk_june_desktop_03.png') }});
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                    height: 6000px;">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="d-block d-md-none">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="w-100 img-banner-responsive" style="background-image: url({{ asset('images/finfolk/june/finfolk_june_mobile_03.png') }});
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                    height: 3400px;">
                </div>
            </div>
        </div>
    </div>
</section>

{{--TICKET--}}
<section class="d-none d-md-block">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="w-100" style="background-image: url({{ asset('images/finfolk/june/finfolk_june_desktop_04.png') }});
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                    height: 700px;">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="d-block d-md-none">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="w-100 img-banner-responsive" style="background-image: url({{ asset('images/finfolk/june/finfolk_june_mobile_04.png') }});
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                    height: 660px;">
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">
                {{--                <div class="w-100 img-banner-responsive" style="background-image: url({{ asset('images/finfolk/vid-dummy.png') }});--}}
                {{--					background-repeat: no-repeat;--}}
                {{--					background-position: center;--}}
                {{--					background-size: cover;">--}}
                {{--                </div>--}}
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{url('https://www.youtube.com/embed/eRvqVuMdf_0')}}" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- GALLERY --}}
<section class="pb-5 mb-5">
    <div class="container-fluid">
        <div class="row blue mb-5">
            <div class="col-12 text-center mt-5">
                <h1 class="font-custom-titillium-semi-bold-upright" style="font-size: 60px;">Gallery</h1>
            </div>
        </div>
        <div class="row blue">
            <div class="col-lg-3 col-6 text-center mb-3 mb-md-0">
                <div class="mx-3">
                    <a data-fancybox="gallery" class="galleries" href="{{ asset('images/finfolk/finfolk_gallery_01.jpg') }}">
                        <img src="{{ asset('images/finfolk/finfolk_gallery_thumbnail_01.jpg') }}" alt="gallery 1">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6 text-center mb-3 mb-md-0">
                <div class="mx-3">
                    <a data-fancybox="gallery" class="galleries" href="{{ asset('images/finfolk/finfolk_gallery_02.jpg') }}">
                        <img src="{{ asset('images/finfolk/finfolk_gallery_thumbnail_02.jpg') }}" alt="gallery 2">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6 text-center">
                <div class="mx-3">
                    <a data-fancybox="gallery" class="galleries" href="{{ asset('images/finfolk/finfolk_gallery_03.jpg') }}">
                        <img src="{{ asset('images/finfolk/finfolk_gallery_thumbnail_03.jpg') }}" alt="gallery 3">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6 text-center">
                <div class="mx-3">
                    <a data-fancybox="gallery" class="galleries" href="{{ asset('images/finfolk/finfolk_gallery_04.jpg') }}">
                        <img src="{{ asset('images/finfolk/finfolk_gallery_thumbnail_04.jpg') }}" alt="gallery 4">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{--ZOOM--}}
<section class="d-none d-md-block py-5" style="background-color: #f2f2f2">
    <div class="container-fluid">
        <div class="row blue my-4">
            <div class="col-12 text-center">
                <h1 class="font-custom-titillium-semi-bold-upright" style="font-size: 60px;">2 Days Online Conference</h1>
                <span class="font-custom-titillium-semi-bold-upright" style="font-size: 28px;">18 & 19 July 2020</span><br/><br/>
            </div>
            <div class="col-12 text-center">
                <p class="font-custom-titillium-semi-bold-upright" style="font-size: 28px;">LIVE ON  <img src="{{ asset('images/finfolk/june/finfolk_june_zoom.png') }}" class="pb-3" style="height: 50px; width: auto;"></p>
            </div>
        </div>
    </div>
</section>
<section class="d-block d-md-none py-5" style="background-color: #f2f2f2">
    <div class="container-fluid">
        <div class="row blue my-4">
            <div class="col-12 text-center">
                <h1 class="font-custom-titillium-semi-bold-upright" style="font-size: 30px;">2 Days Online Conference</h1>
                <span class="font-custom-titillium-semi-bold-upright" style="font-size: 16px;">18 & 19 July 2020</span><br/><br/>
            </div>
            <div class="col-12 text-center">
                <p class="font-custom-titillium-semi-bold-upright" style="font-size: 16px;">LIVE ON  <img src="{{ asset('images/finfolk/june/finfolk_june_zoom.png') }}" class="pb-1" style="height: 30px; width: auto;"></p>
            </div>
        </div>
    </div>
</section>

{{--RUNDOWN--}}
<section class="d-none d-md-block pb-4" style="background-color: #0132a9;">
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-12 text-center mt-5">
                <p class="font-custom-titillium-semi-bold-upright text-white" style="font-size: 50px;">Rundown</p>
            </div>
        </div>
        <div class="row mb-5 font-custom-titillium-regular" style="font-size: 18px;">
            <div class="col-lg-2"></div>
            <div class="col-lg-4" style="border-right: 1px solid #fff;">
                <div class="row text-white">
                    <div class="col-lg-4">
                        <span class="font-weight-bold">18 July</span><br/>
                        <span>10.00 - 10.45</span><br/>
                        <span>11.00 - 11.45</span><br/>
                        <span>13.00 - 13.45</span>
                    </div>
                    <div class="col-lg-8">
                        <br/>
                        <span>: Danny Sutradewa</span><br/>
                        <span>: David Tjokro</span><br/>
                        <span>: Dennis Hadi</span>
                    </div>
                </div>
                <br/>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4">
                <div class="row text-white">
                    <div class="col-lg-4">
                        <span class="font-weight-bold">19 July</span><br/>
                        <span>10.00 - 10.45</span><br/>
                        <span>11.00 - 11.45</span><br/>
                        <span>13.00 - 13.45</span><br/>
                        <span>14.00 - 14.35</span>
                    </div>
                    <div class="col-lg-8">
                        <br/>
                        <span>: Danny Sutradewa</span><br/>
                        <span>: David Tjokro</span><br/>
                        <span>: Dennis Hadi</span><br/>
                        <span>: Pamela Wirjadinata & Monica Tan</span>
                    </div>
                </div>
                <br/>
            </div>
            <div class="col-lg-1"></div>
        </div>
        <div class="row mb-4">
            <div class="col-12 text-center">
                <div>
                    <div class="img-early-bird-responsive" style="background-color: #fff;
                            border-radius: 40px;
                            margin: 0 auto;
                            width: 18%;">
                        <div class="box h-100 d-flex justify-content-center flex-column">
                            <span class="font-custom-titillium-semi-bold-upright" style="font-size: 20px; color: #1b287b;">Registration</span>
                            <span class="font-custom-titillium-semi-bold-upright" style="font-size: 20px; color: #1b287b;">Rp 350.000,-</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 text-center">
                <p class="font-custom-titillium-regular text-white" style="font-size: 28px;">Book by Whats app : 0819 9188 8991</p>
            </div>
        </div>
    </div>
</section>
<section class="d-block d-md-none pb-4" style="background-color: #0132a9;">
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-12 text-center mt-5">
                <p class="font-custom-titillium-semi-bold-upright text-white" style="font-size: 30px;">Rundown</p>
            </div>
        </div>
        <div class="row font-custom-titillium-regular text-white pb-4" style="font-size: 12px;">
            <div class="col-4">
                <span class="font-weight-bold">18 July</span><br/>
                <span>10.00 - 10.45</span><br/>
                <span>11.00 - 11.45</span><br/>
                <span>13.00 - 13.45</span>
            </div>
            <div class="col-8">
                <br/>
                <span>: Danny Sutradewa</span><br/>
                <span>: David Tjokro</span><br/>
                <span>: Dennis Hadi</span>
            </div>
        </div>
        <div class="row font-custom-titillium-regular text-white pb-4" style="font-size: 12px;">
            <div class="col-4">
                <span class="font-weight-bold">19 July</span><br/>
                <span>10.00 - 10.45</span><br/>
                <span>11.00 - 11.45</span><br/>
                <span>13.00 - 13.45</span><br/>
                <span>14.00 - 14.35</span>
            </div>
            <div class="col-8">
                <br/>
                <span>: Danny Sutradewa</span><br/>
                <span>: David Tjokro</span><br/>
                <span>: Dennis Hadi</span><br/>
                <span>: Pamela Wirjadinata & Monica Tan</span>
                </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 text-center">
                <div>
                    <div class="img-early-bird-responsive" style="background-color: #fff;
                            border-radius: 40px;
                            margin: 0 auto;
                            width: 50%;">
                        <div class="box h-100 d-flex justify-content-center flex-column">
                            <span class="font-custom-titillium-semi-bold-upright" style="font-size: 16px; color: #1b287b;">Registration</span>
                            <span class="font-custom-titillium-semi-bold-upright" style="font-size: 16px; color: #1b287b;">Rp 350.000,-</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 text-center">
                <p class="font-custom-titillium-regular text-white" style="font-size: 20px;">Book by Whats app : 0819 9188 8991</p>
            </div>
        </div>
    </div>
</section>

{{--<section class="d-none d-md-block pb-4" style="background-color: #1b287b;">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="row mb-2">--}}
{{--            <div class="col-12 text-center mt-5">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright" style="font-size: 50px; color: #fc1b73;">VIP Seat</p>--}}
{{--                <p class="font-custom-titillium-semi-bold-upright pb-3"style="font-size: 20px; color: #fc1b73;">limited for 30 persons</p>--}}
{{--                <p class="font-custom-titillium-semi-bold-upright text-white pb-3" style="font-size: 20px;">Benefit VIP</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row mb-3">--}}
{{--            <div class="col-2 text-center custom-border-right-desktop">--}}
{{--                <img src="{{ asset('images/finfolk/finfolk-website-05.png') }}" alt="harusnya front seat" width="110px" class="mt-3">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright pt-2 text-white font-size-benefit" style="margin-top:31px;">Front Seat</p>--}}
{{--            </div>--}}
{{--            <div class="col-2 text-center custom-border-right-desktop">--}}
{{--                <img src="{{ asset('images/finfolk/finfolk-website-06.png') }}" alt="harusnya digital handout" width="110px">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright pt-2 text-white font-size-benefit" style="margin-top:9px;">Digital Handout</p>--}}
{{--            </div>--}}
{{--            <div class="col-2 text-center custom-border-right-desktop">--}}
{{--                <img src="{{ asset('images/finfolk/finfolk-lunch-white.png') }}" alt="lunch" width="110px">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright pt-2 text-white font-size-benefit" style="margin-top:15px;">Lunch</p>--}}
{{--            </div>--}}
{{--            <div class="col-2 text-center custom-border-right-desktop">--}}
{{--                <img src="{{ asset('images/finfolk/finfolk-website-08.png') }}" alt="salt venture gathering" width="100px">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright pt-2 text-white font-size-benefit" style="margin-top:0px;">Salt Venture<br/> Gathering</p>--}}
{{--            </div>--}}
{{--            <div class="col-2 text-center custom-border-right-desktop">--}}
{{--                <img src="{{ asset('images/finfolk/finfolk-planner-white.png') }}" alt="finfolk 2020 planner" width="80">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright pt-2 text-white font-size-benefit" style="margin-top:5px;">Finfolk 2020<br/>Planner</p>--}}
{{--            </div>--}}
{{--            <div class="col-2 text-center">--}}
{{--                <img src="{{ asset('images/finfolk/finfolk-website-15.png') }}" alt="premium audio pack" width="100px" class="mt-3">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright pt-2 text-white font-size-benefit" style="margin-top:28px;">Premium Audio <br/>Pack</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row mb-5">--}}
{{--            <div class="col-12 text-center">--}}
{{--                <div>--}}
{{--                    <div class="img-early-bird-responsive" style="background-color: #fff;--}}
{{--                            border-radius: 60px;--}}
{{--                            margin: 0 auto;--}}
{{--                            width: 24%;">--}}
{{--                        <div class="box h-100 d-flex justify-content-center flex-column">--}}
{{--                            <span class="font-custom-titillium-semi-bold-upright" style="font-size: 28px; color: #1b287b;">Rp 2.750.000,-</span>--}}
{{--                            <span class="font-custom-titillium-semi-bold-upright" style="font-size: 20px; color: #1b287b;">Early Bird Before 23rd March : Rp 2.400.000,-</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="d-block d-md-none pb-4" style="background-color: #1b287b;">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="row px-3">--}}
{{--            <div class="col-12 text-center mt-5">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright" style="font-size: 50px; color: #fc1b73;">VIP Seat</p>--}}
{{--                <p class="font-custom-titillium-semi-bold-upright pb-3"style="font-size: 20px; color: #fc1b73;">limited for 30 persons</p>--}}
{{--                <p class="font-custom-titillium-semi-bold-upright text-white pb-5" style="font-size: 20px;">Benefit VIP</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row px-3" style="margin-bottom: -25px;">--}}
{{--            <div class="col-4 text-center custom-border-right">--}}
{{--                <img src="{{ asset('images/finfolk/mobile-finfolk-05.png') }}" alt="harusnya front seat" width="50px">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright pt-2 text-white font-size-benefit-mobile" style="margin-top:9px;">Front Seat</p>--}}
{{--            </div>--}}
{{--            <div class="col-4 text-center custom-border-right">--}}
{{--                <img src="{{ asset('images/finfolk/mobile-finfolk-06.png') }}" alt="harusnya digital handout" width="30px">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright pt-2 text-white font-size-benefit-mobile" style="margin-top:8px;">Digital Handout</p>--}}
{{--            </div>--}}
{{--            <div class="col-4 text-center">--}}
{{--                <img src="{{ asset('images/finfolk/finfolk-lunch-white.png') }}" alt="lunch" width="40px">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright pt-2 text-white font-size-benefit-mobile" style="margin-top:5px;">Lunch</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row px-3">--}}
{{--            <div class="col-4 text-center custom-border-right">--}}
{{--                <img src="{{ asset('images/finfolk/mobile-finfolk-08.png') }}" alt="harusnya private gathering" width="40px">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright pt-2 text-white font-size-benefit-mobile" style="margin-top:9px;">Salt Venture<br/> Gathering</p>--}}
{{--            </div>--}}
{{--            <div class="col-4 text-center custom-border-right">--}}
{{--                <img src="{{ asset('images/finfolk/finfolk-planner-white.png') }}" alt="finfolk planner 2020" width="40px">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright pt-2 text-white font-size-benefit-mobile" style="margin-top:8px;">Finfolk 2020<br/>Planner</p>--}}
{{--            </div>--}}
{{--            <div class="col-4 pt-3 text-center">--}}
{{--                <img src="{{ asset('images/finfolk/mobile-finfolk-10.png') }}" alt="harusnya voucher" width="50px">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright pt-2 text-white font-size-benefit-mobile" style="margin-top:8px;">Premium Audio<br/> Pack</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row mb-5">--}}
{{--            <div class="col-12 text-center">--}}
{{--                <div>--}}
{{--                    <div class="img-early-bird-responsive" style="background-color: #fff;--}}
{{--                            border-radius: 50px;--}}
{{--                            margin: 0 auto;--}}
{{--                            width: 90%;">--}}
{{--                        <div class="box h-100 d-flex justify-content-center flex-column">--}}
{{--                            <span class="font-custom-titillium-semi-bold-upright" style="font-size: 20px; color: #1b287b">Rp 2.750.000,-</span>--}}
{{--                            <span class="font-custom-titillium-semi-bold-upright" style="font-size: 14px; color: #1b287b">Early Bird Before 23rd March : Rp 2.400.000,-</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- VIP mobile end -->

{{--<section class="d-none d-md-block mb-5">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="row blue mb-5">--}}
{{--            <div class="col-12 text-center mt-5">--}}
{{--                <h1 class="font-custom-titillium-semi-bold-upright" style="font-size: 60px;">General Seat</h1>--}}
{{--                <span class="font-custom-titillium-semi-bold-upright" style="font-size: 28px;">270 persons</span><br/><br/><br/>--}}
{{--                <span class="font-custom-titillium-semi-bold-upright" style="font-size: 28px;">Benefit</span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row blue">--}}
{{--            <div class="col-3"></div>--}}
{{--            <div class="col-2 text-center">--}}
{{--                <img src="{{ asset('images/finfolk/finfolk-website-10.png') }}" alt="digital handout" width="100px">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright font-size-benefit pt-2" style="margin-top:9px;">Digital Handout</p>--}}
{{--            </div>--}}
{{--            <div class="col-2 text-center custom-border-left">--}}
{{--                <img src="{{ asset('images/finfolk/finfolk-planner-blue.png') }}" alt="finfolk 2020 planner" width="80px">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright font-size-benefit pt-1" style="margin-top:18px;">Finfolk 2020<br/>Planner</p>--}}
{{--            </div>--}}
{{--            <div class="col-2 text-center custom-border-left pt-3">--}}
{{--                <img src="{{ asset('images/finfolk/finfolk-website-16.png') }}" alt="premium audio pack" width="110px">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright font-size-benefit pt-2" style="margin-top:28px;">Premium Audio<br/>Pack</p>--}}
{{--            </div>--}}
{{--            <div class="col-3"></div>--}}
{{--        </div>--}}
{{--        <div class="row mt-3">--}}
{{--            <div class="col-12 text-center">--}}
{{--                <div class="img-early-bird-responsive" style="background-image: url('{{ asset('images/finfolk/finfolk-website-14.png') }}');--}}
{{--					background-repeat: no-repeat;--}}
{{--					background-position: center;--}}
{{--					background-size: contain;">--}}
{{--                    <div class="box h-100 d-flex justify-content-center flex-column">--}}
{{--                        <span class="font-custom-titillium-semi-bold-upright text-white" style="font-size: 28px;">Rp 1.750.000,-</span>--}}
{{--                        <span class="font-custom-titillium-semi-bold-upright text-white" style="font-size: 18px;">Early Bird Before 23rd March : Rp 1.400.000,-</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-12 text-center blue mt-5">--}}
{{--                <span style="font-size: 20px;">Book by Whats app: </span>--}}
{{--                <span class="font-weight-bold" style ="font-size: 20px;">0877 1091 9015</span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="d-block d-md-none mb-5">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="row blue mb-5">--}}
{{--            <div class="col-12 text-center mt-5">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright" style="font-size: 40px;">General Seat</p>--}}
{{--                <p class="font-custom-titillium-semi-bold-upright pb-3"style="font-size: 20px;">270 persons</p>--}}
{{--                <p class="font-custom-titillium-semi-bold-upright" style="font-size: 20px;">Benefit</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row blue">--}}
{{--            <div class="col-4 text-center custom-border-right2">--}}
{{--                <img src="{{ asset('images/finfolk/mobile-finfolk-02.png') }}" alt="digital handout" width="50px">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright pt-2 font-size-benefit-mobile" style="margin-top:5px;">Digital Handout</p>--}}
{{--            </div>--}}
{{--            <div class="col-4 text-center custom-border-right2">--}}
{{--                <img src="{{ asset('images/finfolk/finfolk-planner-blue.png') }}" alt="finfolk 2020 planner" width="40px">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright pt-2 font-size-benefit-mobile" style="margin-top:11px;">Finfolk 2020<br/>Planner</p>--}}
{{--            </div>--}}
{{--            <div class="col-4 pt-2 text-center">--}}
{{--                <img src="{{ asset('images/finfolk/mobile-finfolk-13.png') }}" alt="premium audio pack" width="50px"  style="margin-top: 9px;">--}}
{{--                <p class="font-custom-titillium-semi-bold-upright pt-2 font-size-benefit-mobile" style="margin-top:12px;">Premium Audio<br/>Pack</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row mt-3">--}}
{{--            <div class="col-12 text-center">--}}
{{--                <div class="img-early-bird-responsive" style="background-image: url({{ asset('images/finfolk/finfolk-website-14.png') }});--}}
{{--					background-repeat: no-repeat;--}}
{{--					background-position: center;--}}
{{--					background-size: contain;">--}}
{{--                    <div class="box h-100 d-flex justify-content-center flex-column">--}}
{{--                        <span class="font-custom-titillium-semi-bold-upright text-white" style="font-size: 20px;">Rp 1.750.000,-</span>--}}
{{--                        <span class="font-custom-titillium-semi-bold-upright text-white" style="font-size: 14px;">Early Bird Before 23rd March : Rp 1.400.000,-</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-12 text-center blue mt-5">--}}
{{--                <p class="font-custom-titillium-regular-upright" style="font-size: 20px;">Book by Whats app : <b>0877 1091 9015</b></p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<section class="py-5 d-none d-md-block" style="background-image: url({{ asset('images/finfolk/finfolk-website-04.jpg') }});
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        height: 500px;">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-12 text-center">
                {{-- <h1 class="font-custom-titillium-semi-bold-upright text-white" style="font-size: 50px;">Launching Soon</h1> --}}
                <img src="{{ asset('images/finfolk/logo-finfolk-pc.png') }}" alt="harusnya logo finfolk pc" width="300px">
            </div>
        </div>
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
</section>

<section class="pt-4 pb-5 d-md-none d-block" style="background-image: url({{ asset('images/finfolk/mobile-finfolk-04.jpg') }});
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        height: 400px;">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-12 text-center">
                {{-- <h1 class="font-custom-titillium-semi-bold-upright text-white" style="font-size: 40px;">Launching Soon</h1> --}}
                <img src="{{ asset('images/finfolk/logo-finfolk-mobile.png') }}" alt="harusnya logo finfolk mobile" width="250px">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <div class="flex-w flex-sa-m cd100 p-t-42 p-l-50 p-r-50 respon1">
                    <div class="flex-col-c-m m-b-20" style="width: 40px;">
                        <span class="font-custom-titillium-semi-bold-upright l1-txt1 p-b-4 days" style="font-size: 40px;">35</span>
                        <span class="font-custom-titillium-regular-upright m2-txt2" style="padding-top: 3px; font-size: 12px;">DAYS</span>
                    </div>

                    <span class="l1-txt1" style="padding-bottom: 53px;">:</span>

                    <div class="flex-col-c-m m-b-20" style="width: 40px;">
                        <span class="font-custom-titillium-semi-bold-upright l1-txt1 p-b-4 hours" style="font-size: 40px;">17</span>
                        <span class="font-custom-titillium-regular-upright m2-txt2" style="padding-top: 3px; font-size: 12px;">HOURS</span>
                    </div>

                    <span class="l1-txt1" style="padding-bottom: 53px;">:</span>

                    <div class="flex-col-c-m m-b-20" style="width: 40px;">
                        <span class="font-custom-titillium-semi-bold-upright l1-txt1 p-b-4 minutes" style="font-size: 40px;">50</span>
                        <span class="font-custom-titillium-regular-upright m2-txt2" style="padding-top: 3px; font-size: 12px;">MINUTES</span>
                    </div>

                    <span class="l1-txt1" style="padding-bottom: 53px;">:</span>

                    <div class="flex-col-c-m m-b-20" style="width: 40px;">
                        <span class="font-custom-titillium-semi-bold-upright l1-txt1 p-b-4 seconds" style="font-size: 40px;">39</span>
                        <span class="font-custom-titillium-regular-upright m2-txt2" style="padding-top: 3px; font-size: 12px;">SECONDS</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="{{ asset('js/countdowntime/moment.min.js') }}"></script>
<script src="{{ asset('js/countdowntime/moment-timezone.min.js') }}"></script>
<script src="{{ asset('js/countdowntime/moment-timezone-with-data.min.js') }}"></script>
<script src="{{ asset('js/countdowntime/countdowntime.js') }}"></script>


<script>

    $('.cd100').countdown100({
        /*Set Endtime here*/
        /*Endtime must be > current time*/
        endtimeYear: 2020,
        endtimeMonth: 7,
        endtimeDate: 18,
        endtimeHours: 0,
        endtimeMinutes: 0,
        endtimeSeconds: 0,
        timeZone: "Asia/Jakarta"
        // ex:  timeZone: "America/New_York"
        //go to " http://momentjs.com/timezone/ " to get timezone
    });
</script>
</body>
</html>
