<!-- Footer -->
<footer class="bg-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h5>REGISTER YOUR INTEREST HERE</h5>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-xl-2">

                            </div>
                            <div class="col-xl-8 col-12 text-center">
                                <form id="subscription_form">
                                    <input type="hidden" id="csrf_token" name="_token" value="{{ csrf_token() }}">
                                    <div class="row mb-2">
                                        <div class="col-12">
                                            <input class="form-control text-center" type="text" name="subscribe_name" id="subscribe_name" placeholder="Your Name" required/>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12">
                                            <input class="form-control text-center" type="email" name="subscribe_email" id="subscribe_email" placeholder="Your Email" required/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="submit" class="btn btn-dark form-control" value="Submit"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xl-2">

                            </div>
                        </div>
                        <div id="subscribe_success_message" class="row mb-3" style="display: none;">
                            <div class="col-12">
                                <h5 class="text-center">Thank You F.O.R Registering</h5>
                            </div>
                        </div>
                        {{--<div class="row mb-3">--}}
                        {{--<div class="col-12 text-center">--}}
                        {{--<span class="fa-stack text-black-50">--}}
                        {{--<i class="fas fa-circle fa-stack-2x"></i>--}}
                        {{--<i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>--}}
                        {{--</span>--}}
                        {{--<span class="fa-stack text-black-50">--}}
                        {{--<i class="fas fa-circle fa-stack-2x"></i>--}}
                        {{--<i class="fab fa-twitter fa-stack-1x fa-inverse"></i>--}}
                        {{--</span>--}}
                        {{--<span class="fa-stack text-black-50">--}}
                        {{--<i class="fas fa-circle fa-stack-2x"></i>--}}
                        {{--<i class="fab fa-instagram fa-stack-1x fa-inverse"></i>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-12">
                <div class="card border-0">
                    <div class="card-body" style="background-color: #ececed;">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h5>DOWNLOAD HERE F.O.R</h5>
                                <h5>OUR NEWSLETTER</h5>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                <a href="{{ route('frontend.download') }}" class="btn btn-dark p-3 w-50" style="font-size: 13px;">GET NEWSLETTER</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <p>Jl. MH Thamrin No. 07, Pakualam, Serpong Utara<br/>
                                    Kota Tangerang Selatan, Banten, 15143</p>
                                <p>Telp: 0812 889 88958</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>