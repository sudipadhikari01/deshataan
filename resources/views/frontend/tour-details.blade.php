@extends('frontend.layouts.pageTemplate')
@section('content')
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
                <li><a href="{{ url('/') }}">Home</a>
                </li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                <li><a href="javascript:void()" class="bread-acti">{{$sipkg->title}}</a>
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
                    {!! $sipkg->description !!}
                </div>
                <!--====== ROOMS: HOTEL BOOKING ==========-->
                <div class="tour_head1 hotel-book-room">
                    <h3>Photo Gallery</h3>

                    @if($pg->count() > 0)
                    <div id="myCarousel1" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ol class="carousel-indicators carousel-indicators-1">

                            @foreach($pg as $g)

                            <li data-target="#myCarousel1" data-slide-to="{{$loop->index}}">
                                <img src='{{asset("storage/pkgGall/$g->image_name")}}' alt=""
                                    style="width:80px; height:50px">
                            </li>
                            @endforeach
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner carousel-inner1" role="listbox">

                            @foreach($pg as $g)
                            <div class="item {{ $loop->index == 0 ? 'active' : '' }}">
                                <img src='{{asset("storage/pkgGall/$g->image_name")}}' alt="Chania"
                                    style="width:850px; height:450px" height="345">
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
            </div>
            <!--======TOUR LOCATION==========-->
            <div class="tour_head1 tout-map map-container">
                <h3>Location</h3>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.744468026517!2d85.32060941542433!3d27.72517493131423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1919b80b60ad%3A0xd0d150a470c839!2sLaxmi+Heights!5e0!3m2!1sen!2sin!4v1565063847449!5m2!1sen!2sin"
                    frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <!--====== DURATION ==========-->
            <div class="tour_head1 l-info-pack-days days">
                <h3>Detailed Day Wise Itinerary</h3>

                @if(isset($it) && $it->count()>0)


                {!! $it->itinerary !!}

                @else

                <h2 class="text-info">No Itinerary</h2>

                @endif

            </div>
            <div>
                <div class="fb-comments" data-href="https://www.facebook.com/deshataan" data-width="100%"
                    data-numposts="5"></div>
            </div>

        </div>
        <div class="col-md-3 tour_r">
            <!--====== SPECIAL OFFERS ==========-->
            <div class="tour_right tour_offer">
                <div class="band1"><img src="{{asset('images/offer.png')}}" alt="" /> </div>
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
                    <li>Location : {{ucfirst($sipkg->location)}}</li>
                    <li>Arrival Date: {{ date('M d, Y',strtotime($sipkg->start_date)) }}</li>
                    <li>Departure Date: {{ date('M d, Y',strtotime($sipkg->end_date)) }}</li>
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
                <div class="tour_rela_1"> <img src="{{ asset('images/related1.png') }}" alt="" />
                    <h4>Dubai 7Days / 6Nights</h4>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                        default model text</p> <a href="#" class="link-btn">View this Package</a>
                </div>
                <div class="tour_rela_1"> <img src="{{ asset('images/related2.png') }}" alt="" />
                    <h4>Mauritius 4Days / 3Nights</h4>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                        default model text</p> <a href="#" class="link-btn">View this Package</a>
                </div>
                <div class="tour_rela_1"> <img src="{{ asset('images/related3.png') }}" alt="" />
                    <h4>India 14Days / 13Nights</h4>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                        default model text</p> <a href="#" class="link-btn">View this Package</a>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>
@endsection
