@include('layouts.app')
    <!--HEADER SECTION-->
    <section>
        <div class="tourz-search" style="margin-top:-32px">
            <div class="container">
                <div class="row">
                    <div class="tourz-search-1">
                        <h1>Plan Your Travel Now!</h1>
                        <p>Experience the various exciting tour and travel packages and Make hotel reservations, find vacation packages, search cheap hotels and events</p>
                    <form class="tourz-search-form" method="POST" action="{{url('/search-result')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="input-field">
                                <input type="text" id="select-city" class="autocomplete" name="search-city">
                                <label for="select-city">Enter city</label>
                            </div>
                            <div class="input-field">
                                <input type="text" id="select-search" class="autocomplete" name="search-package-type">
                                <label for="select-search" class="search-hotel-type">Search over a million tour and travels, sight seeings, hotels and more</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
                        </form>
                        <div class="tourz-hom-ser">
                            <ul>
                                <li>
                                    <a href="booking-tour-package.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="0.5s"><img src="images/icon/2.png" alt=""> Tour</a>
                                </li>
                                <li>
                                    <a href="booking-flight.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="1s"><img src="images/icon/31.png" alt=""> Flight</a>
                                </li>
                                <li>
                                    <a href="booking-car-rentals.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="1.5s"><img src="images/icon/30.png" alt=""> Car Rentals</a>
                                </li>
                                <li>
                                    <a href="booking-hotel.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="2s"><img src="images/icon/1.png" alt=""> Hotel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->

    <section>
        <div class="rows pad-bot-redu tb-space">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Top <span>Tour Packages</span></h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
                </div>
                <div>
                    <!-- TOUR PLACE 1 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">
                        <!-- OFFER BRAND -->
                        <div class="band"> <img src="images/band.png" alt="" /> </div>
                        <!-- IMAGE -->
                        <div class="v_place_img"> <img src="images/t5.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <!-- TOUR TITLE & ICONS -->
                        <div class="b_pack rows">
                            <!-- TOUR TITLE -->
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details.html">Rio de Janeiro<span class="v_pl_name">(Brazil)</span></a></h4>
                            </div>
                            <!-- TOUR ICONS -->
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 2 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.7s">
                        <!-- OFFER BRAND -->
                        <div class="band"> <img src="images/band1.png" alt="" /> </div>
                        <!-- IMAGE -->
                        <div class="v_place_img"> <img src="images/t1.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <!-- TOUR TITLE & ICONS -->
                        <div class="b_pack rows">
                            <!-- TOUR TITLE -->
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details.html">Paris<span class="v_pl_name">(England)</span></a></h4>
                            </div>
                            <!-- TOUR ICONS -->
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 3 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.9s">
                        <div class="v_place_img"><img src="images/t2.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details.html">South India<span class="v_pl_name">(India)</span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.1s">
                        <div class="v_place_img"><img src="images/t3.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details.html">The Great Wall<span class="v_pl_name">(China)</span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 5 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.3s">
                        <div class="v_place_img"><img src="images/t4.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details.html">Nail Island<span class="v_pl_name">(Andaman)</span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 6 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.5s">
                        <div class="v_place_img"><img src="images/t6.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details.html">Mauritius<span class="v_pl_name">(Indiana)</span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== HOME HOTELS ==========-->
    <section>
        <div class="rows tb-space pad-top-o pad-bot-redu">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Popular <span>Cities</span> </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
                </div>
                <!-- CITY -->
                <div class="col-md-6">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="images/listing/home.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con">
                                <h5>Europe</h5>
                                <p><span>12 Packages</span> Starting from $2400</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="images/listing/home3.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Dubai</h5>
                                <p>Starting from $2400</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="images/listing/home2.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>India</h5>
                                <p>Starting from $2400</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="images/listing/home1.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Usa</h5>
                                <p>Starting from $2400</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="images/listing/home4.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>London</h5>
                                <p>Starting from $2400</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--====== HOME HOTELS ==========-->
    <section>
        <div class="rows tb-space pad-top-o pad-bot-redu">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Hotels <span>booking open now! </span> </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
                </div>
                <!-- HOTEL GRID -->
                <div class="to-ho-hotel">
                    <!-- HOTEL GRID -->
                    <div class="col-md-4">
                        <div class="to-ho-hotel-con">
                            <div class="to-ho-hotel-con-1">
                                <div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
                                <div class="hom-hot-av-tic"> Available Tickets: 42 </div> <img src="images/hotels/1.jpg" alt=""> </div>
                            <div class="to-ho-hotel-con-23">
                                <div class="to-ho-hotel-con-2">
                                    <a href="hotel-details.html">
                                        <h4>GTC Grand Chola</h4>
                                    </a>
                                </div>
                                <div class="to-ho-hotel-con-3">
                                    <ul>
                                        <li>City: illunois,united states
                                            <div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o"
                                                    aria-hidden="true"></i> </div>
                                        </li>
                                        <li><span class="ho-hot-pri-dis">$720</span><span class="ho-hot-pri">$420</span> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- HOTEL GRID -->
                    <div class="col-md-4">
                        <div class="to-ho-hotel-con">
                            <div class="to-ho-hotel-con-1">
                                <div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
                                <div class="hom-hot-av-tic"> Available Tickets: 520 </div> <img src="images/hotels/2.jpg" alt=""> </div>
                            <div class="to-ho-hotel-con-23">
                                <div class="to-ho-hotel-con-2">
                                    <a href="hotel-details.html">
                                        <h4>Taaj Grand Resorts</h4>
                                    </a>
                                </div>
                                <div class="to-ho-hotel-con-3">
                                    <ul>
                                        <li>City: illunois,united states
                                            <div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o"
                                                    aria-hidden="true"></i> </div>
                                        </li>
                                        <li><span class="ho-hot-pri-dis">$840</span><span class="ho-hot-pri">$540</span> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- HOTEL GRID -->
                    <div class="col-md-4">
                        <div class="to-ho-hotel-con">
                            <div class="to-ho-hotel-con-1">
                                <div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
                                <div class="hom-hot-av-tic"> Available Tickets: 92 </div> <img src="images/hotels/3.jpg" alt=""> </div>
                            <div class="to-ho-hotel-con-23">
                                <div class="to-ho-hotel-con-2">
                                    <a href="hotel-details.html">
                                        <h4>Keep Grand Hotels</h4>
                                    </a>
                                </div>
                                <div class="to-ho-hotel-con-3">
                                    <ul>
                                        <li>City: illunois,united states
                                            <div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o"
                                                    aria-hidden="true"></i> </div>
                                        </li>
                                        <li><span class="ho-hot-pri-dis">$680</span><span class="ho-hot-pri">$380</span> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== SECTION: FREE CONSULTANT ==========-->
    <section>
        <div class="offer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="offer-l"> <span class="ol-1"></span> <span class="ol-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> <span class="ol-4">Standardized Budget Rooms</span>                            <span class="ol-3"></span> <span class="ol-5">$99/-</span>
                            <ul>
                                <li class="wow fadeInUp" data-wow-duration="0.5s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="images/icon/dis1.png" alt="">
									</a><span>Free WiFi</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.7s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="images/icon/dis2.png" alt=""> </a><span>Breakfast</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.9s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="images/icon/dis3.png" alt=""> </a><span>Pool</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="1.1s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="images/icon/dis4.png" alt=""> </a><span>Television</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="1.3s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="images/icon/dis5.png" alt=""> </a><span>GYM</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="offer-r">
                            <div class="or-1"> <span class="or-11">go</span> <span class="or-12">Stays</span> </div>
                            <div class="or-2"> <span class="or-21">Get</span> <span class="or-22">70%</span> <span class="or-23">Off</span> <span class="or-24">use code: RG5481WERQ</span> <span class="or-25"></span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== EVENTS ==========-->
    <section>
        <div class="rows tb-space">
            <div class="container events events-1" id="inner-page-title">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Top <span>Events</span> in this month</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Event Name.." title="Type in a name">
                <table id="myTable">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Event Name</th>
                            <th class="e_h1">Date</th>
                            <th class="e_h1">Time</th>
                            <th class="e_h1">Location</th>
                            <th>Book</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="images/iplace-1.jpg" alt="" /><a href="hotels-list.html" class="events-title">Taj Mahal,Agra, India</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Australia</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="images/iplace-2.jpg" alt="" /><a href="hotels-list.html" class="events-title">Salesforce Summer, Dubai</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Dubai</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="images/iplace-3.jpg" alt="" /><a href="hotels-list.html" class="events-title">God Towers, TOKYO, JAPAN</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">JAPAN</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img src="images/iplace-4.jpg" alt="" /><a href="hotels-list.html" class="events-title">TOUR DE ROMANDIE, Switzerland</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Switzerland</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><img src="images/iplace-5.jpg" alt="" /><a href="hotels-list.html" class="events-title">TOUR DE POLOGNE, Poland</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Poland</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><img src="images/iplace-6.jpg" alt="" /><a href="hotels-list.html" class="events-title">Future of Marketing,Sydney, Australia</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Australia</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><img src="images/iplace-7.jpg" alt="" /><a href="hotels-list.html" class="events-title">Eiffel Tower, Paris</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">France</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><img src="images/iplace-8.jpg" alt="" /><a href="hotels-list.html" class="events-title">PARIS - ROUBAIX, England</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">England</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td><img src="images/iplace-9.jpg" alt="" /><a href="hotels-list.html" class="events-title">Dubai Beach Resort, Dubai</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Dubai</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td><img src="images/iplace-4.jpg" alt="" /><a href="hotels-list.html" class="events-title">TOUR DE POLOGNE, Poland</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Poland</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--====== POPULAR TOUR PLACES ==========-->
    <section>
        <div class="rows pla pad-bot-redu tb-space">
            <div class="pla1 p-home container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title spe-title-1">
                    <h2>Top <span>Sight Seeing</span> in this month</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <div class="popu-places-home">
                    <!-- POPULAR PLACES 1 -->
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="images/place2.jpg" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Honeymoon Package</span> 7 Days / 6 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="tour-details.html" class="link-btn">more info</a> </div>
                    </div>
                    <!-- POPULAR PLACES 2 -->
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="images/place1.jpg" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Family package</span> 14 Days / 13 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="tour-details.html" class="link-btn">more info</a> </div>
                    </div>
                </div>
                <div class="popu-places-home">
                    <!-- POPULAR PLACES 3 -->
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="images/place3.jpg" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Weekend Package </span> 3 Days / 2 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="tour-details.html" class="link-btn">more info</a> </div>
                    </div>
                    <!-- POPULAR PLACES 4 -->
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="images/place4.jpg" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Group Package</span> 10 Days / 9 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="tour-details.html" class="link-btn">more info</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== REQUEST A QUOTE ==========-->
    <section>
        <div class="ho-popu tb-space pad-bot-redu">
            <div class="rows container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Top <span>Branding</span> for this month</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <div class="ho-popu-bod">
                    <div class="col-md-4">
                        <div class="hot-page2-hom-pre-head">
                            <h4>Top Branding <span>Hotels</span></h4>
                        </div>
                        <div class="hot-page2-hom-pre">
                            <ul>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/hotels/1.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Taaj Club House</h5> <span>City: illunois, United States</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.5</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/hotels/2.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Universal luxury Grand Hotel</h5> <span>City: Rio,Brazil</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.2</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/hotels/3.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Barcelona Grand Pales</h5> <span>City: Chennai,India</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>5.0</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/hotels/4.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Lake Palace view Hotel</h5> <span>City: Beijing,China</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>2.5</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/hotels/8.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>First Class Grandd Hotel</h5> <span>City: Berlin,Germany</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.0</span> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hot-page2-hom-pre-head">
                            <h4>Top Branding <span>Packages</span></h4>
                        </div>
                        <div class="hot-page2-hom-pre">
                            <ul>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/trends/1.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Family Package Luxury</h5> <span>Duration: 7 Days and 6 Nights</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.1</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/trends/2.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Honeymoon Package Luxury</h5> <span>Duration: 14 Days and 13 Nights</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.4</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/trends/3.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Group Package Luxury</h5> <span>Duration: 28 Days and 29 Nights</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>3.0</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/trends/4.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Regular Package Luxury</h5> <span>Duration: 12 Days and 11 Nights</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>3.5</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/trends/1.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Custom Package Luxury</h5> <span>Duration: 10 Days and 10 Nights</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>5.0</span> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hot-page2-hom-pre-head">
                            <h4>Top Branding <span>Reviewers</span></h4>
                        </div>
                        <div class="hot-page2-hom-pre">
                            <ul>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/reviewer/1.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Christopher</h5> <span>No of Reviews: 620, City: illunois</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/reviewer/2.png" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Matthew</h5> <span>No of Reviews: 48, City: Rio</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/reviewer/3.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Stephanie</h5> <span>No of Reviews: 560, City: Chennai</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/reviewer/4.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Robert</h5> <span>No of Reviews: 920, City: Beijing</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/reviewer/5.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Danielle</h5> <span>No of Reviews: 768, City: Berlin</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== REQUEST A QUOTE ==========-->
    <section>
        <div class="foot-mob-sec tb-space">
            <div class="rows container">
                <!-- FAMILY IMAGE(YOU CAN USE ANY PNG IMAGE) -->
                <div class="col-md-6 col-sm-6 col-xs-12 family"> <img src="images/mobile.png" alt="" /> </div>
                <!-- REQUEST A QUOTE -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- THANK YOU MESSAGE -->
                    <div class="foot-mob-app">
                        <h2>Have you tried our mobile app?</h2>
                        <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Easy Hotel Booking</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Tour and Travel Packages</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Package Reviews and Ratings</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Manage your Bookings, Enquiry and Reviews</li>
                        </ul>
                        <a href="#"><img src="images/android.png" alt=""> </a>
                        <a href="#"><img src="images/apple.png" alt=""> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== REQUEST A QUOTE ==========-->
    <!--<section>
        <div class="form tb-space">
            <div class="rows container">
                <div class="spe-title">
                    <h2>Book your <span>favourite Package</span> Now!</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form_1">
                    <div class="succ_mess">Thank you for contacting us we will get back to you soon.</div>
                    <form id="home_form" name="home_form" action="mail/send.php">
                        <ul>
                            <li>
                                <input type="text" name="ename" value="" id="ename" placeholder="Name" required>
                            </li>
                            <li>
                                <input type="tel" name="emobile" value="" id="emobile" placeholder="Mobile" required>
                            </li>
                            <li>
                                <input type="email" name="eemail" value="" id="eemail" placeholder="Email id" required>
                            </li>
                            <li>
                                <input type="text" name="esubject" value="" id="esubject" placeholder="Subject" required>
                            </li>
                            <li>
                                <input type="text" name="ecity" value="" id="ecity" placeholder="City" required>
                            </li>
                            <li>
                                <input type="text" name="ecount" value="" id="ecount" placeholder="Country" required>
                            </li>
                            <li>
                                <textarea name="emess" cols="40" rows="3" id="text-comment" placeholder="Enter your message"></textarea>
                            </li>
                            <li>
                                <input type="submit" value="Submit" id="send_button">
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 family">
                    <img src="images/family.png" alt="" />
                </div>
            </div>
        </div>
    </section>-->
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
                        <p>Ut sed sem quis magna ultricies lacinia et sed tortor. Ut non tincidunt nisi, non elementum lorem. Aliquam gravida sodales</p> <address>Illinois, United States of America</address> </div>
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
                            <p>valid only for 24th Dec</p> <a href="booking.html">Book Now</a> </div>
                    </div>
                    <!-- FOOTER OFFER 2 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="disco1 disco">
                            <h3>42%<span>OFF</span></h3>
                            <h4>Colosseum,Burj Al Arab</h4>
                            <p>valid only for 18th Nov</p> <a href="booking.html">Book Now</a> </div>
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
                                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
                                </div>
                                <div class="col-sm-3 foot-spec foot-com">
                                    <h4><span>Address</span> & Contact Info</h4>
                                    <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
                                    <p> <span class="strong">Phone: </span> <span class="highlighted">+101-1231-1231</span> </p>
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
                                    <p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
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
                <p>Copyrights © 2018 Company Name. All Rights Reserved</p>
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
    <!--========= Scripts ===========-->
    <script src="js/jquery-latest.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/main.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2019 08:08:06 GMT -->
</html>