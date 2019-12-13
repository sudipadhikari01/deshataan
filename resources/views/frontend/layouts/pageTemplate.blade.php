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
                    <div class="tips_left tips_left_1">
                        <h5>Bring copies of your passport</h5>
                        <p>Aliquam pretium id justo eget tristique. Aenean feugiat vestibulum blandit.</p>
                    </div>
                    <div class="tips_left tips_left_2">
                        <h5>Register with your embassy</h5>
                        <p>Mauris efficitur, ante sit amet rhoncus malesuada, orci justo sollicitudin.</p>
                    </div>
                    <div class="tips_left tips_left_3">
                        <h5>Always have local cash</h5>
                        <p>Donec et placerat ante. Etiam et velit in massa. </p>
                    </div>
                </div>
                <!-- CUSTOMER TESTIMONIALS -->
                <div class="col-md-8 col-sm-6 col-xs-12 testi-2">
                    <!-- TESTIMONIAL TITLE -->
                    <h3>Customer Testimonials</h3>
                    <div class="testi">
                        <h4>John William</h4>
                        <p>Ut sed sem quis magna ultricies lacinia et sed tortor. Ut non tincidunt nisi, non elementum
                            lorem. Aliquam gravida sodales</p>
                        <address>Illinois, United States of America</address>
                    </div>
                    <!-- ARRANGEMENTS & HELPS -->
                    <h3>Arrangement & Helps</h3>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FOOTER 1 ==========-->
    <section>
        <div class="rows">
            <div class="footer1 home_title tb-space">
                <div class="pla1 container">
                    <!-- FOOTER OFFER 1 -->
                    @foreach ($individualPackages->slice(0,2) as $item)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="disco">
                            <h3>{{ $item->discount }}%<span>OFF</span></h3>
                            <h4>{{ $item->location }}</h4>
                            <p>valid only {{ date('Y | M |d  D', strtotime($item->end_date))}}</p> <a href="{{ url('/tour-details') }}/{{ $item->p_id }}">Book Now</a>
                        </div>
                    </div>
                    @endforeach
                    <!-- FOOTER OFFER 2 -->
                    {{-- <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="disco1 disco">
                            <h3>42%<span>OFF</span></h3>
                            <h4>Colosseum,Burj Al Arab</h4>
                            <p>valid only for 18th Nov</p> <a href="booking.html">Book Now</a>
                        </div>
                    </div> --}}
                    <!-- FOOTER MOST POPULAR VACATIONS -->
                    <div class="col-md-6 col-sm-12 col-xs-12 foot-spec footer_places">
                        <h4><span>Most Popular</span> Vacations</h4>
                        <ul>
                            @foreach ($individualPackages as $item)
                            <li><a href="{{ url('/tour-details') }}/{{ $item->p_id }}">{{ $item->title }}</a> </li>
                            @endforeach
                            {{-- <li><a href="tour-details.html">Buckingham Palace</a> </li>
                            <li><a href="tour-details.html">High Line</a> </li>
                            <li><a href="tour-details.html">Sagrada Família</a> </li>
                            <li><a href="tour-details.html">Statue of Liberty </a> </li>
                            <li><a href="tour-details.html">Notre Dame de Paris</a> </li>
                            <li><a href="tour-details.html">Taj Mahal</a> </li>
                            <li><a href="tour-details.html">The Louvre</a> </li>
                            <li><a href="tour-details.html">Tate Modern, London</a> </li>
                            <li><a href="tour-details.html">Gothic Quarter</a> </li>
                            <li><a href="tour-details.html">Table Mountain</a> </li>
                            <li><a href="tour-details.html">Bayon</a> </li>
                            <li><a href="tour-details.html">Great Wall of China</a> </li>
                            <li><a href="tour-details.html">Hermitage Museum</a> </li>
                            <li><a href="tour-details.html">Yellowstone</a> </li>
                            <li><a href="tour-details.html">Musée d'Orsay</a> </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.
                                    </p>
                                </div>
                                <div class="col-sm-3 foot-spec foot-com">
                                    <h4><span>Address</span> & Contact Info</h4>
                                    <p>Lazimpat, Kathmandu, Nepal
                                    </p>
                                    <p> <span class="strong">Phone: </span> <span
                                            class="highlighted">+977-01-4444865</span> </p>
                                </div>
                                <div class="col-sm-3 col-md-3 foot-spec foot-com">
                                    <h4><span>SUPPORT</span> & HELP</h4>
                                    <ul class="two-columns">
                                        <li> <a href="#">About Us</a> </li>
                                        <li> <a href="#">FAQ</a> </li>
                                        <li> <a href="#">Feedbacks</a> </li>
                                        <li> <a href="#">Blog </a> </li>
                                        <li> <a href="#">Use Cases</a> </li>
                                        <li> <a href="#">Advertise us</a> </li>
                                        <li> <a href="#">Discount</a> </li>
                                        <li> <a href="#">Vacations</a> </li>
                                        <li> <a href="#">Branding Offers </a> </li>
                                        <li> <a href="#">Contact Us</a> </li>
                                    </ul>
                                </div>
                                <div class="col-sm-3 foot-social foot-spec foot-com">
                                    <h4><span>Follow</span> with us</h4>
                                    <p>Join the thousands of other There are many variations of passages of Lorem Ipsum
                                        available
                                    </p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
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
</body>

</html>
