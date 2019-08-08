@include('frontend.layouts.fronthead')
<!--====== BANNER ==========-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=387699278601802&autoLogAppEvents=1">
</script>
<section>
    <div class="rows inner_banner inner_banner_4">
        <div class="container">
            <h2><span>{{$sipkg->title}} -</span> {{$spkg->p_name}}</h2>
            <ul>
                <li><a href="#inner-page-title">Home</a>
                </li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                <li><a href="#inner-page-title" class="bread-acti">{{$sipkg->title}}</a>
                </li>
            </ul>
            <p>Book travel packages and enjoy your holidays with distinctive experience</p>
        </div>
    </div>
</section>
<!--====== TOUR DETAILS - BOOKING ==========-->
<section>
    <div class="rows banner_book" id="inner-page-title">
        <div class="container">
            <div class="banner_book_1">
                <ul>
                    <li class="dl1">Location : {{$sipkg->location}}</li>
                    <li class="dl2">Price : {{$sipkg->price}}</li>
                    <li class="dl3">Duration : {{$sipkg->duration}}</li>
                    <li class="dl4"><a href="{{url('/booking')}}">Book Now</a> </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--====== TOUR DETAILS ==========-->
<section>
    <div class="rows inn-page-bg com-colo">
        <div class="container inn-page-con-bg tb-space">
            <div class="col-md-9">

                <!--====== TOUR TITLE ==========-->
                <div class="tour_head">
                    <h2>{{$sipkg->title}} <span class="tour_star"><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star-half-o" aria-hidden="true"></i></span><span
                            class="tour_rat">4.5</span></h2>
                </div>
                <!--====== TOUR DESCRIPTION ==========-->
                <div class="tour_head1">
                    <h3>Description</h3>
                    {{$sipkg->description}}
                </div>
                <!--====== ROOMS: HOTEL BOOKING ==========-->
                <div class="tour_head1 hotel-book-room">
                    <h3>Photo Gallery</h3>

                    @if($pg->count() > 0)
                    <div id="myCarousel1" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ol class="carousel-indicators carousel-indicators-1">

                            @foreach($pg as $g)

                            <li data-target="#myCarousel1" data-slide-to="0">
                                <img src='{{asset("storage/pkgGall/$g->image_name")}}' alt="">
                            </li>
                            @endforeach
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner carousel-inner1" role="listbox">

                            @foreach($pg as $g)
                            <div class="item {{ $loop->index == 0 ? 'active' : '' }}">
                                <img src='{{asset("storage/pkgGall/$g->image_name")}}' alt="Chania" width="460"
                                    height="345">
                            </div>
                            @endforeach

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                            <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span> </a>
                        <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                            <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1"
                                    aria-hidden="true"></i></span> </a>
                        @else
                        <h2 class="text-info">No Images To Show</h2>

                    </div>
                    @endif
                </div>
                <!--====== TOUR LOCATION ==========-->
                <div class="tour_head1 tout-map map-container">
                    <h3>Location</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.744468026517!2d85.32060941542433!3d27.72517493131423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1919b80b60ad%3A0xd0d150a470c839!2sLaxmi+Heights!5e0!3m2!1sen!2sin!4v1565063847449!5m2!1sen!2sin"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <!--====== ABOUT THE TOUR ==========-->
                {{-- <div class="tour_head1">
                    <h3>About The Tour</h3>
                    <table>
                        <tr>
                            <th>Places covered</th>
                            <th class="event-res">Inclusions</th>
                            <th class="event-res">Exclusions</th>
                            <th>Event Date</th>
                        </tr>
                        <tr>
                            <td>Rio De Janeiro ,Brazil</td>
                            <td class="event-res">Accommodation</td>
                            <td class="event-res">Return Airfare & Taxes</td>
                            <td>Nov 12, 2017</td>
                        </tr>
                        <tr>
                            <td>Iguassu Falls </td>
                            <td class="event-res">8 Breakfast, 3 Dinners</td>
                            <td class="event-res">Arrival & Departure transfers</td>
                            <td>Nov 14, 2017</td>
                        </tr>
                        <tr>
                            <td>Peru,Lima </td>
                            <td class="event-res">First-class Travel</td>
                            <td class="event-res">travel insurance</td>
                            <td>Nov 16, 2017</td>
                        </tr>
                        <tr>
                            <td>Cusco & Buenos Aires </td>
                            <td class="event-res">Free Sightseeing</td>
                            <td class="event-res">Service tax of 4.50%</td>
                            <td>Nov 18, 2017</td>
                        </tr>
                    </table>
                </div> --}}
                <!--====== DURATION ==========-->
                <div class="tour_head1 l-info-pack-days days">
                    <h3>Detailed Day Wise Itinerary</h3>

                    @if(isset($it) && $it->count()>0)

                    <ul>
                        @foreach($it as $i)
                        <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <h4><span>Day : {{$loop->iteration}}</span> {{$i->itinerary_title}}</h4>
                            <p>{{$i->itinerary_description}}</p>
                        </li>
                        @endforeach
                    </ul>

                    @else

                    <h2 class="text-info">No Itinerary</h2>

                    @endif

                </div>
                <div>
                    <div class="fb-comments" data-href="https://www.facebook.com/deshataan" data-width=""
                        data-numposts="5"></div>
                </div>

            </div>
        </div>
        <div class="col-md-3 tour_r">
            <!--====== SPECIAL OFFERS ==========-->
            <div class="tour_right tour_offer">
                <div class="band1"><img src="images/offer.png" alt="" /> </div>
                <p>Special Offer</p>
                <h4>$500<span class="n-td">
                        <span class="n-td-1">$800</span>
                    </span>
                </h4> <a href="booking.html" class="link-btn">Book Now</a>
            </div>
            <!--====== TRIP INFORMATION ==========-->
            <div class="tour_right tour_incl tour-ri-com">
                <h3>Trip Information</h3>
                <ul>
                    <li>Location : Rio,Brazil</li>
                    <li>Arrival Date: Nov 12, 2017</li>
                    <li>Departure Date: Nov 21, 2017</li>
                    <li>Free Sightseeing & Hotel</li>
                </ul>
            </div>
            <!--====== PACKAGE SHARE ==========-->
            <div class="tour_right head_right tour_social tour-ri-com">
                <h3>Share This Package</h3>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                </ul>
            </div>
            <!--====== HELP PACKAGE ==========-->
            <div class="tour_right head_right tour_help tour-ri-com">
                <h3>Help & Support</h3>
                <div class="tour_help_1">
                    <h4 class="tour_help_1_call">Call Us Now</h4>
                    <h4><i class="fa fa-phone" aria-hidden="true"></i> 10-800-123-000</h4>
                </div>
            </div>
            <!--====== PUPULAR TOUR PACKAGES ==========-->
            <div class="tour_right tour_rela tour-ri-com">
                <h3>Popular Packages</h3>
                <div class="tour_rela_1"> <img src="images/related1.png" alt="" />
                    <h4>Dubai 7Days / 6Nights</h4>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                        default model text</p> <a href="#" class="link-btn">View this Package</a>
                </div>
                <div class="tour_rela_1"> <img src="images/related2.png" alt="" />
                    <h4>Mauritius 4Days / 3Nights</h4>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                        default model text</p> <a href="#" class="link-btn">View this Package</a>
                </div>
                <div class="tour_rela_1"> <img src="images/related3.png" alt="" />
                    <h4>India 14Days / 13Nights</h4>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                        default model text</p> <a href="#" class="link-btn">View this Package</a>
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
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="disco">
                        <h3>30%<span>OFF</span></h3>
                        <h4>Eiffel Tower,Rome</h4>
                        <p>valid only for 24th Dec</p> <a href="booking.html">Book Now</a>
                    </div>
                </div>
                <!-- FOOTER OFFER 2 -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="disco1 disco">
                        <h3>42%<span>OFF</span></h3>
                        <h4>Colosseum,Burj Al Arab</h4>
                        <p>valid only for 18th Nov</p> <a href="booking.html">Book Now</a>
                    </div>
                </div>
                <!-- FOOTER MOST POPULAR VACATIONS -->
                <div class="col-md-6 col-sm-12 col-xs-12 foot-spec footer_places">
                    <h4><span>Most Popular</span> Vacations</h4>
                    <ul>
                        <li><a href="tour-details.html">Angkor Wat</a> </li>
                        <li><a href="tour-details.html">Buckingham Palace</a> </li>
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
                        <li><a href="tour-details.html">Musée d'Orsay</a> </li>
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
                                <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To
                                    Airport</p>
                                <p> <span class="strong">Phone: </span> <span class="highlighted">+101-1231-1231</span>
                                </p>
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
                                    available</p>
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
            <p>Copyrights © 2017 Company Name. All Rights Reserved</p>
        </div>
    </div>
</section>
<section>
    <div class="icon-float">
        <ul>
            <li><a href="#" class="sh">1k <br> Share</a> </li>
            <li><a href="#" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="gp1"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="wa1"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> </li>
        </ul>
    </div>
</section>
