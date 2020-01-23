<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name') }}</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="{{asset('images/fav.ico') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mob.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- MOBILE MENU -->
    <section>
        @include('frontend.templates.mobile-menu')
    </section>
    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        @include('frontend.templates.top-bar')

        <!-- LOGO AND MENU SECTION -->
        @include('frontend.templates.desktop-menu')

        <!-- LOGO AND MENU SECTION -->
    </section>
    <!--END HEADER SECTION-->

    @yield('content')

    <!--====== TIPS BEFORE TRAVEL ==========-->
    <section>
        <div class="rows tips tips-home tb-space home_title">
            <div class="container tips_1">
                <!-- TIPS BEFORE TRAVEL -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h3>Tips Before Travel</h3>
                    @foreach ($tips->slice(0, 3) as $tip)
                    <div class="tips_left tips_left_{{$loop->index+1}}">
                        <h5>{{$tip->tip_title}}</h5>
                        <p>{{$tip->tip_description}}</p>
                    </div>
                    @endforeach
                    {{-- <div class="tips_left tips_left_2">
                        <h5>Register with your embassy</h5>
                        <p>Mauris efficitur, ante sit amet rhoncus malesuada, orci justo sollicitudin.</p>
                    </div>
                    <div class="tips_left tips_left_3">
                        <h5>Always have local cash</h5>
                        <p>Donec et placerat ante. Etiam et velit in massa. </p>
                    </div> --}}
                </div>
                <!-- CUSTOMER TESTIMONIALS -->
                <div class="col-md-8 col-sm-6 col-xs-12 testi-2">
                    <!-- TESTIMONIAL TITLE -->
                    <h3>Customer Testimonials</h3>
                    {{-- @foreach ($testimonials as $testimonial)
                        <div class="testi">
                            <h4>{{ $testimonial->name }}</h4>
                    <p>{!! str_limit($testimonial->testimonial, $limit = 200, $end = '...') !!}</p>
                    <address>{{ $testimonial->address }}</address>
                </div>

                @endforeach
                <a href="#" class="link-btn pull-right">more info</a> --}}

                <div class="container content">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->

                        <div class="carousel-inner">
                            @foreach ($testimonials as $key=>$testimonial)
                            @php
                            if ($key == 0)
                            {
                            $active ='active';
                            }
                            else
                            {
                            $active = '';
                            }

                            @endphp
                            <div class="item {{ $active }}">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <div class="thumbnail adjust1">
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                {{-- <img src="{{ asset('storage/photogallery').'/'.$testimonial->image }}"
                                                alt="{{ $testimonial->name }}'s Image"> --}}
                                                <img class="media-object img-rounded img-responsive"
                                                    src="{{ asset('storage/photogallery').'/'.$testimonial->image }}">
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-12">
                                                <div class="caption">
                                                    {{-- <p class="text-info lead adjust2">Testimonials</p>  --}}
                                                    {!! str_limit($testimonial->testimonial, $limit = 200, $end = '...')
                                                    !!}</p>
                                                    <blockquote class="adjust2">
                                                        <strong>{{ $testimonial->name }}</strong>
                                                        <small>
                                                            <cite
                                                                title="Source Title">{{ $testimonial->address }}</cite>
                                                        </small>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div> <!-- Controls -->

                    </div>
                </div>

                <!-- ARRANGEMENTS & HELPS -->
                {{-- <h3>Arrangement & Helps</h3>
                    <div class="arrange">
                        <ul>
                            <!-- LOCATION MANAGER -->
                            <li>
                                <a href="#"><img src="images/Location-Manager.png" alt=""> </a>
                            </li>
                            <!-- PRIVATE GUIDE -->
                            <li>
                                <a href="#"><img src="images/Private-Guide.png" alt=""> </a>
                            </li>
                            <!-- ARRANGEMENTS -->
                            <li>
                                <a href="#"><img src="images/Arrangements.png" alt=""> </a>
                            </li>
                            <!-- EVENT ACTIVITIES -->
                            <li>
                                <a href="#"><img src="images/Events-Activities.png" alt=""> </a>
                            </li>
                        </ul>
                    </div> --}}
            </div>
        </div>
        </div>
    </section>
    <!--====== FOOTER 1 ==========-->
    {{-- <section>
        <div class="rows">
            <div class="footer1 home_title tb-space">
                <div class="pla1 container">
                    <!-- FOOTER OFFER 1 -->
                    @foreach ($individualPackages->slice(0,2) as $item)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="disco">
                            <h3>{{ $item->discount }}%<span>OFF</span></h3>
    <h4>{{ $item->location }}</h4>
    <p>valid only {{ date('Y | M |d  D', strtotime($item->end_date))}}</p> <a
        href="{{ url('/tour-details') }}/{{ $item->p_id }}">Book Now</a>
    </div>
    </div>
    @endforeach

    <!-- FOOTER MOST POPULAR VACATIONS -->
    <div class="col-md-6 col-sm-12 col-xs-12 foot-spec footer_places">
        <h4><span>Most Popular</span> Vacations</h4>
        <ul>
            @foreach ($individualPackages as $item)
            <li><a href="{{ url('/tour-details') }}/{{ $item->p_id }}">{{ $item->title }}</a> </li>
            @endforeach

        </ul>
    </div>
    </div>
    </div>
    </div>
    </section> --}}
    <!--====== FOOTER 2 ==========-->
    <section>
        <div class="rows">
            <div class="footer">
                <div class="container">
                    <div class="foot-sec2">
                        <div>
                            <div class="row">
                                <div class="col-sm-3 foot-spec foot-com">
                                    <h4><span>Holiday</span> Tour & Travels</h4>
                                    <p>{{$webInfo->website_description}}
                                    </p>
                                </div>
                                <div class="col-sm-3 foot-spec foot-com">
                                    <h4><span>Address</span> & Contact Info</h4>
                                    <p>{{$webInfo->address}}
                                    </p>
                                    <p> <span class="strong">Phone: </span> <span
                                            class="highlighted">{{$webInfo->contact_number}}</span> </p>
                                </div>
                                <div class="col-sm-3 col-md-3 foot-spec foot-com">
                                    <h4><span>SUPPORT</span> & HELP</h4>
                                    <ul class="two-columns">
                                        <li> <a href="javascript:void()">About Us</a> </li>
                                        <li> <a href="javascript:void()">FAQ</a> </li>
                                        <li> <a href="javascript:void()">Feedbacks</a> </li>
                                        <li> <a href="javascript:void()">Blog </a> </li>
                                        <li> <a href="javascript:void()">Use Cases</a> </li>
                                        <li> <a href="javascript:void()">Advertise us</a> </li>
                                        <li> <a href="javascript:void()">Discount</a> </li>
                                        <li> <a href="javascript:void()">Vacations</a> </li>
                                        <li> <a href="javascript:void()">Branding Offers </a> </li>
                                        <li> <a href="javascript:void()">Contact Us</a> </li>
                                    </ul>
                                </div>
                                <div class="col-sm-3 foot-social foot-spec foot-com">
                                    <h4><span>Follow</span> with us</h4>
                                    <p>{{$webInfo->follow_us_information}}
                                    </p>
                                    <ul>
                                        <li><a href="{{$webInfo->facebook_url}}"><i class="fa fa-facebook"
                                                    aria-hidden="true"></i></a> </li>
                                        <li><a href="{{$webInfo->google_url}}"><i class="fa fa-google-plus"
                                                    aria-hidden="true"></i></a> </li>
                                        <li><a href="{{$webInfo->twitter_url}}"><i class="fa fa-twitter"
                                                    aria-hidden="true"></i></a> </li>
                                        <li><a href="{{$webInfo->instagram_url}}"><i class="fa fa-linkedin"
                                                    aria-hidden="true"></i></a> </li>
                                        <li><a href="{{$webInfo->youtube_url}}"><i class="fa fa-youtube"
                                                    aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FOOTER - COPYRIGHT ==========-->
    <section>
        <div class="rows copy">
            <div class="container">
                <p>Copyrights © {{date('Y')}} {{config('app.name')}}. All Rights Reserved</p>
            </div>
        </div>
    </section>

    <!--========= Scripts ===========-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.js') }}"></script>
    <script src="{{asset('js/wow.min.js') }}"></script>
    <script src="{{asset('js/materialize.min.js') }}"></script>
    <script src="{{asset('js/custom.js') }}"></script>

    {{-- <script>
        $(document).ready(function(){
    $(".tips_left_1").css("background-image", "url({{ asset('storage/tourTips').'/'.$tips->image }})");
    });
    </script> --}}
</body>

</html>
