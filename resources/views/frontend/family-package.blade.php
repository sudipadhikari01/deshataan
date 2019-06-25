@include('frontend.layouts.app')

<!-- TOP SEARCH BOX -->
<div class="search-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-form">
                    <form class="tourz-search-form" method="POST" action="{{url('/search-result')}}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="input-field">
                            <input type="text" id="select-city" class="autocomplete" name="city">
                            <label for="select-city">Enter city</label>
                        </div>
                        {{-- <div class="input-field">
                        <input type="text" id="select-search" class="autocomplete">
                        <label for="select-search" class="search-hotel-type">Search over a million tour and travels, sight seeings, hotels and more</label>
                    </div> --}}
                        <div class="input-field">
                            <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END TOP SEARCH BOX -->

</section>
<!--END HEADER SECTION-->


<!--====== BANNER ==========-->
<section>
    <div class="rows inner_banner inner_banner_5">
        <div class="container">
            <h2><span>Family Package -</span> Top Family Packages In The World</h2>
            <ul>
                <li><a href="#inner-page-title">Home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                <li><a href="#inner-page-title" class="bread-acti">Family Package</a></li>
            </ul>
            <p>Book travel packages and enjoy your holidays with distinctive experience</p>
        </div>
    </div>
</section>
<!--====== PLACES ==========-->
<section>
    <div class="rows inn-page-bg com-colo">
        <div class="container inn-page-con-bg tb-space pad-bot-redu-5" id="inner-page-title">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title col-md-12">
                <h2>Family <span> packages</span></h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages
                    and enjoy your holidays with distinctive experience</p>
            </div>
            <!--===== PLACES ======-->
            <div class="rows p2_2">
                <div class="col-md-6 col-sm-6 col-xs-12 p2_1">
                    <div class="band"><img src="images/band.png" alt="" />
                    </div>
                    <img src="images/iplace-2.jpg" alt="" />
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 p2">
                    <h3>Family Package 12 Night/13 Days <span><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star-half-o" aria-hidden="true"></i></span></h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    <div class="ticket">
                        <ul>
                            <li>Available Tickets : 48</li>
                            <li>Start Date : 12.01.2015</li>
                            <li>End Date : 12.01.2015</li>
                        </ul>
                    </div>
                    <div class="featur">
                        <h4>Package Locations</h4>
                        <ul>
                            <li>Rio, Brazil(3 days)</li>
                            <li>8 Breakfast, 3 Dinners</li>
                            <li>First class Sightseeing</li>
                            <li>Lorem ipsum</li>
                        </ul>
                    </div>
                    <div class="p2_book">
                        <ul>
                            <li><a href="{{url('/booking')}}" class="link-btn">Book Now</a>
                            </li>
                            <li><a href="{{url('/tour-details')}}" class="link-btn">View Package</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--===== PLACES END ======-->
            <!--===== PLACES ======-->
            <div class="rows p2_2">
                <div class="col-md-6 col-sm-6 col-xs-12 p2_1">
                    <img src="images/iplace-1.jpg" alt="" />
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 p2">
                    <h3>Family Package 6 Night/7 Days <span><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star-half-o" aria-hidden="true"></i></span></h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    <div class="ticket">
                        <ul>
                            <li>Available Tickets : 48</li>
                            <li>Start Date : 12.01.2015</li>
                            <li>End Date : 12.01.2015</li>
                        </ul>
                    </div>
                    <div class="featur">
                        <h4>Tour Inclusions</h4>
                        <ul>
                            <li>Accommodation</li>
                            <li>8 Breakfast, 3 Dinners</li>
                            <li>First class Sightseeing</li>
                            <li>Lorem ipsum</li>
                        </ul>
                    </div>
                    <div class="p2_book">
                        <ul>
                            <li><a href="booking.html" class="link-btn">Book Now</a>
                            </li>
                            <li><a href="tour-details.html" class="link-btn">View Package</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--===== PLACES END ======-->
            <!--===== PLACES ======-->
            <div class="rows p2_2">
                <div class="col-md-6 col-sm-6 col-xs-12 p2_1">
                    <img src="images/iplace-3.jpg" alt="" />
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 p2">
                    <h3>Family Package 14 Night/15 Days <span><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star-half-o" aria-hidden="true"></i></span></h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    <div class="ticket">
                        <ul>
                            <li>Available Tickets : 48</li>
                            <li>Start Date : 12.01.2015</li>
                            <li>End Date : 12.01.2015</li>
                        </ul>
                    </div>
                    <div class="featur">
                        <h4>Tour Inclusions</h4>
                        <ul>
                            <li>Accommodation</li>
                            <li>8 Breakfast, 3 Dinners</li>
                            <li>First class Sightseeing</li>
                            <li>Lorem ipsum</li>
                        </ul>
                    </div>
                    <div class="p2_book">
                        <ul>
                            <li><a href="booking.html" class="link-btn">Book Now</a>
                            </li>
                            <li><a href="tour-details.html" class="link-btn">View Package</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--===== PLACES END ======-->
            <!--===== PLACES ======-->
            <div class="rows p2_2">
                <div class="col-md-6 col-sm-6 col-xs-12 p2_1">
                    <img src="images/iplace-4.jpg" alt="" />
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 p2">
                    <h3>Family Package 4 Night/5 Days <span><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star-half-o" aria-hidden="true"></i></span></h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    <div class="ticket">
                        <ul>
                            <li>Available Tickets : 48</li>
                            <li>Start Date : 12.01.2015</li>
                            <li>End Date : 12.01.2015</li>
                        </ul>
                    </div>
                    <div class="featur">
                        <h4>Tour Inclusions</h4>
                        <ul>
                            <li>Accommodation</li>
                            <li>8 Breakfast, 3 Dinners</li>
                            <li>First class Sightseeing</li>
                            <li>Lorem ipsum</li>
                        </ul>
                    </div>
                    <div class="p2_book">
                        <ul>
                            <li><a href="booking.html" class="link-btn">Book Now</a>
                            </li>
                            <li><a href="tour-details.html" class="link-btn">View Package</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--===== PLACES END ======-->
            <!--===== PLACES ======-->
            <div class="rows p2_2">
                <div class="col-md-6 col-sm-6 col-xs-12 p2_1">
                    <img src="images/iplace-5.jpg" alt="" />
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 p2">
                    <h3>Family Package 6 Night/7 Days <span><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star-half-o" aria-hidden="true"></i></span></h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    <div class="ticket">
                        <ul>
                            <li>Available Tickets : 48</li>
                            <li>Start Date : 12.01.2015</li>
                            <li>End Date : 12.01.2015</li>
                        </ul>
                    </div>
                    <div class="featur">
                        <h4>Tour Inclusions</h4>
                        <ul>
                            <li>Accommodation</li>
                            <li>8 Breakfast, 3 Dinners</li>
                            <li>First class Sightseeing</li>
                            <li>Lorem ipsum</li>
                        </ul>
                    </div>
                    <div class="p2_book">
                        <ul>
                            <li><a href="booking.html" class="link-btn">Book Now</a>
                            </li>
                            <li><a href="tour-details.html" class="link-btn">View Package</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--===== PLACES END ======-->
            <!--===== PLACES ======-->
            <div class="rows p2_2">
                <div class="col-md-6 col-sm-6 col-xs-12 p2_1">
                    <img src="images/iplace-6.jpg" alt="" />
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 p2">
                    <h3>Family Package 29 Night/30 Days <span><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star-half-o" aria-hidden="true"></i></span></h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    <div class="ticket">
                        <ul>
                            <li>Available Tickets : 48</li>
                            <li>Start Date : 12.01.2015</li>
                            <li>End Date : 12.01.2015</li>
                        </ul>
                    </div>
                    <div class="featur">
                        <h4>Tour Inclusions</h4>
                        <ul>
                            <li>Accommodation</li>
                            <li>8 Breakfast, 3 Dinners</li>
                            <li>First class Sightseeing</li>
                            <li>Lorem ipsum</li>
                        </ul>
                    </div>
                    <div class="p2_book">
                        <ul>
                            <li><a href="booking.html" class="link-btn">Book Now</a>
                            </li>
                            <li><a href="tour-details.html" class="link-btn">View Package</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                            <a href="#"><img src="images/Location-Manager.png" alt="">
                            </a>
                        </li>
                        <!-- PRIVATE GUIDE -->
                        <li>
                            <a href="#"><img src="images/Private-Guide.png" alt="">
                            </a>
                        </li>
                        <!-- ARRANGEMENTS -->
                        <li>
                            <a href="#"><img src="images/Arrangements.png" alt="">
                            </a>
                        </li>
                        <!-- EVENT ACTIVITIES -->
                        <li>
                            <a href="#"><img src="images/Events-Activities.png" alt="">
                            </a>
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
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="disco">
                        <h3>30%<span>OFF</span></h3>
                        <h4>Eiffel Tower,Rome</h4>
                        <p>valid only for 24th Dec</p>
                        <a href="booking.html">Book Now</a>
                    </div>
                </div>
                <!-- FOOTER OFFER 2 -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="disco1 disco">
                        <h3>42%<span>OFF</span></h3>
                        <h4>Colosseum,Burj Al Arab</h4>
                        <p>valid only for 18th Nov</p>
                        <a href="booking.html">Book Now</a>
                    </div>
                </div>
                <!-- FOOTER MOST POPULAR VACATIONS -->
                <div class="col-md-6 col-sm-12 col-xs-12 foot-spec footer_places">
                    <h4><span>Most Popular</span> Vacations</h4>
                    <ul>
                        <li><a href="tour-details.html">Angkor Wat</a>
                        </li>
                        <li><a href="tour-details.html">Buckingham Palace</a>
                        </li>
                        <li><a href="tour-details.html">High Line</a>
                        </li>
                        <li><a href="tour-details.html">Sagrada Família</a>
                        </li>
                        <li><a href="tour-details.html">Statue of Liberty </a>
                        </li>
                        <li><a href="tour-details.html">Notre Dame de Paris</a>
                        </li>
                        <li><a href="tour-details.html">Taj Mahal</a>
                        </li>
                        <li><a href="tour-details.html">The Louvre</a>
                        </li>
                        <li><a href="tour-details.html">Tate Modern, London</a>
                        </li>
                        <li><a href="tour-details.html">Gothic Quarter</a>
                        </li>
                        <li><a href="tour-details.html">Table Mountain</a>
                        </li>
                        <li><a href="tour-details.html">Bayon</a>
                        </li>
                        <li><a href="tour-details.html">Great Wall of China</a>
                        </li>
                        <li><a href="tour-details.html">Hermitage Museum</a>
                        </li>
                        <li><a href="tour-details.html">Yellowstone</a>
                        </li>
                        <li><a href="tour-details.html">Musée d'Orsay</a>
                        </li>
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
                                <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
                            </div>
                            <div class="col-sm-3 foot-spec foot-com">
                                <h4><span>Address</span> & Contact Info</h4>
                                <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To
                                    Airport</p>
                                <p>
                                    <span class="strong">Phone: </span>
                                    <span class="highlighted">+101-1231-1231</span>
                                </p>
                            </div>
                            <div class="col-sm-3 col-md-3 foot-spec foot-com">
                                <h4><span>SUPPORT</span> & HELP</h4>
                                <ul class="two-columns">
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="#">Feedbacks</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog </a>
                                    </li>
                                    <li>
                                        <a href="#">Use Cases</a>
                                    </li>
                                    <li>
                                        <a href="#">Advertise us</a>
                                    </li>
                                    <li>
                                        <a href="#">Discount</a>
                                    </li>
                                    <li>
                                        <a href="#">Vacations</a>
                                    </li>
                                    <li>
                                        <a href="#">Branding Offers </a>
                                    </li>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-3 foot-social foot-spec foot-com">
                                <h4><span>Follow</span> with us</h4>
                                <p>Join the thousands of other There are many variations of passages of Lorem Ipsum
                                    available</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                    </li>
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
            <p>Copyrights © 2017 Company Name. All Rights Reserved</p>
        </div>
    </div>
</section>

<section>
    <div class="icon-float">
        <ul>
            <li><a href="#" class="sh">1k <br> Share</a>
            </li>
            <li><a href="#" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" class="gp1"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" class="wa1"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
</section>
