@extends('frontend.layouts.pageTemplate')

@section('content');
@php use App\Http\Controllers\FrontEnd\PageController; @endphp


<!--END HEADER SECTION-->

<!--HEADER SECTION-->
<section>
    <div class="tourz-search">
        <div class="container">
            <div class="row">
                <div class="tourz-search-1">
                    <h1>Plan Your Travel Now!</h1>
                    <p>Experience the various exciting tour and travel packages and Make hotel reservations, find
                        vacation packages, search cheap hotels and events</p>
                    {{-- <form class="tourz-search-form">
                            <div class="input-field">
                                <input type="text" id="select-city" class="autocomplete">
                                <label for="select-city">Enter city</label>
                            </div>
                            <div class="input-field">
                                <input type="text" id="select-search" class="autocomplete">
                                <label for="select-search" class="search-hotel-type">
                                    Search over a million tour and travels, sight seeings, hotels and more
                                </label>
                            </div>
                            <div class="input-field">
                                <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn">
                            </div>
                        </form> --}}
                    <div class="tourz-hom-ser">
                        <ul>
                            <li>
                                <a href="Javascript:void(0);"
                                    class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp"
                                    data-wow-duration="0.5s"><img src="images/icon/2.png" alt=""> Tour</a>
                            </li>
                            <li>
                                <a href="Javascript:void(0);"
                                    class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp"
                                    data-wow-duration="1s"><img src="images/icon/31.png" alt=""> Flight</a>
                            </li>
                            <li>
                                <a href="Javascript:void(0);"
                                    class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp"
                                    data-wow-duration="1.5s"><img src="images/icon/30.png" alt=""> Car Rentals</a>
                            </li>
                            <li>
                                <a href="Javascript:void(0);"
                                    class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp"
                                    data-wow-duration="2s"><img src="images/icon/1.png" alt=""> Hotel</a>
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
            <div class="spe-title packages">
                <h2>Top <span>Tour Packages</span></h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
            </div>
            <div>

                @foreach($individualPackages->slice(0, 6) as $ip)
                {{-- <!-- TOUR PLACE {{$loop->iteration}} --> --}}
                <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">
                    <!-- OFFER BRAND -->

                    @if(!empty($ip->discount))
                    <div class="bandText"> {{$ip->discount}}% <br> OFF </div>
                    <div class="band"> <img src="{{ asset('images/band-all.png') }}" alt="" /> </div>
                    @endif


                    <!-- IMAGE -->
                    <div class="v_place_img">
                        @if( !empty(PageController::getImage($ip->p_id)) )
                        <img style="width:700px; height:200px"
                            data-original="{{ asset('storage/pkgGall').'/'.PageController::getImage($ip->p_id)->image_name }}"
                            alt="Tour Booking" title="Tour Booking" class="img-responsive lazyload" />
                        @else
                        <img data-original="https://via.placeholder.com/350x200" alt="Tour Booking"
                            title="Tour Booking" />
                        @endif
                    </div>
                    <!-- TOUR TITLE & ICONS -->
                    <div class="b_pack rows">
                        <!-- TOUR TITLE -->
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="{{url('/tour-details')}}/{{$ip->p_id}}">{!!$ip->title.'<span class="v_pl_name">
                                        ('.$ip->location.') </span>'!!}
                                    {{-- <span class="v_pl_name">(Brazil)</span> --}}
                                </a></h4>
                        </div>
                        <!-- TOUR ICONS -->
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/info.png" alt="Details" title="View more details" />
                                    </a>
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
                @endforeach
            </div>
        </div>
    </div>
</section>
<section>
    <div class="rows tb-space pad-top-o pad-bot-redu">
        <div class="container">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title hotels">
                <h2>Top <span> Hotels booking open now! </span> </h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and
                    enjoy your holidays with distinctive experience</p>
            </div>
            <!-- HOTEL GRID -->
            <div class="to-ho-hotel">
                <!-- HOTEL GRID -->
                @foreach ($hotelList as $hotel)
                <div class="col-md-4">
                    <div class="to-ho-hotel-con">
                        <div class="to-ho-hotel-con-1">
                            <div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
                            <div class="hom-hot-av-tic"> Available Rooms: {{ $hotel->available_room }} </div>
                            @if(!empty(PageController::getHotelImage($hotel->h_id)))
                            <img data-original="{{ asset('storage/photogallery').'/'.PageController::getHotelImage($hotel->h_id)->name }}"
                                alt="{{ $hotel->title }}" class="img-responsive" />
                            @else
                            <img data-original="https://via.placeholder.com/350x200" alt="No Image found" />
                            @endif
                        </div>
                        <div class="to-ho-hotel-con-23">
                            <div class="to-ho-hotel-con-2">
                                <a href="{{url('/hotel')}}/{{$hotel->h_id}}">
                                    <h4>{{ $hotel->title }}</h4>
                                </a>
                            </div>
                            <div class="to-ho-hotel-con-3">
                                <ul>
                                    <li>Location: {{ $hotel->location }}
                                        <div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star"
                                                aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                                class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                                aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                    </li>
                                    <li><span class="ho-hot-pri-dis">$720</span><span
                                            class="ho-hot-pri">{{ $hotel->price }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!--====== SECTION: FREE CONSULTANT ==========-->
<section>
    <div class="offer">
        <div class="container">
            <div class="row ">
                <div class="col-md-3"></div>
                <div class="col-md-6 ">
                    <div class="offer-l"> <span class="ol-1"></span> <span class="ol-2"><i class="fa fa-star"></i><i
                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i></span> <span class="ol-4">We Accept Crypto coins</span>
                        <span class="ol-3"></span> <span class="ol-5"></span>
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="0.5s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img
                                        src="images/icon/crupee.png" alt="">
                                </a><span>Crupee</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="0.7s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img
                                        src="images/icon/bitcoin.png" alt=""> </a><span>Bitcoin</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="0.9s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img
                                        src="images/icon/ethereum.png" alt=""> </a><span>Ethereum</span>
                            </li>

                        </ul>
                    </div>
                </div>
                {{-- <div class="col-md-6">
                    <div class="offer-r">
                        <div class="or-1"> <span class="or-11">go</span> <span class="or-12">Stays</span> </div>
                        <div class="or-2"> <span class="or-21">Get</span> <span class="or-22">70%</span> <span
                                class="or-23">Off</span> <span class="or-24">use code: RG5481WERQ</span> <span
                                class="or-25"></span> </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
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
                <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel
                    packages and enjoy your holidays with distinctive experience</p>
            </div>
            <div class="popu-places-home">
                <!-- POPULAR PLACES 1 -->
                @foreach ($packages->slice(0, 4) as $package)
                <div class="col-md-6 col-sm-6 col-xs-12 place">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        @if(!empty(PageController::getPackageImage($package->p_id)))
                        <img data-original="{{ asset('storage/pkgGall').'/'.PageController::getPackageImage($package->p_id)->image_name }}"
                            alt="{{ $package->image_name }}" class="img-responsive" />
                        @else
                        <img data-original="https://via.placeholder.com/350x200" alt="No Image found" />
                        @endif
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h3><span>{{ $package->p_name }}</span> 7 Days / 6 Nights</h3>
                        <p>{{ $package->desc }}</p>
                        <a href="{{url('/package')}}/{{ $package->p_id}}" class="link-btn">more info</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
</section>
<!--====== REQUEST A QUOTE ==========-->
<section>
    <div class="ho-popu tb-space pad-bot-redu">
        <div class="rows container">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title branding">
                <h2>Top <span>Branding</span> for this month</h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel
                    packages and enjoy your holidays with distinctive experience</p>
            </div>
            <div class="ho-popu-bod">
                <div class="col-md-4">
                    <div class="hot-page2-hom-pre-head">
                        <h4>Top Branding <span>Hotels</span></h4>
                    </div>
                    <div class="hot-page2-hom-pre">
                        <ul>
                            <!--LISTINGS-->
                            @foreach ($hotelList->slice(0, 5) as $hotel)
                            <li>
                                <a href="{{ url('/hotel') }}/{{ $hotel->h_id }}">
                                    <div class="hot-page2-hom-pre-1">
                                        @if(!empty(PageController::getHotelImage($hotel->h_id)))
                                        <img data-original="{{ asset('storage/photogallery').'/'.PageController::getHotelImage($hotel->h_id)->name }}"
                                            alt="{{ $hotel->title }}" class="img-responsive" />
                                        @else
                                        <img data-original="https://via.placeholder.com/350x200" alt="No Image found" />
                                        @endif
                                    </div>
                                    <div class="hot-page2-hom-pre-2">
                                        <a href="{{url('/hotel')}}/{{$hotel->h_id}}">
                                            <h5>{{ $hotel->title }}</h5>
                                        </a> <span>City: {{ $hotel->location }}</span>
                                    </div>
                                    {{-- <div class="hot-page2-hom-pre-3"> <span>
                                            4.5
                                        </span>
                                        </div> --}}
                                </a>
                            </li>
                            @endforeach

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
                            @foreach ($topPackages->slice(0, 5) as $package)
                            <li>
                                <a href="{{url('/package')}}/{{ $package->p_id}}">
                                    <div class="hot-page2-hom-pre-1">
                                        @if(!empty(PageController::getImage($package->p_id)))
                                        <img src="{{asset('assets/image/img-loading.gif') }}"
                                            data-original="{{ asset('storage/pkgGall').'/'.PageController::getImage($package->p_id)->image_name }}"
                                            alt="Package Image" />
                                        @else
                                        <img data-original="https://via.placeholder.com/350x200" alt="No Image found" />
                                        @endif
                                    </div>
                                    <div class="hot-page2-hom-pre-2">
                                        <h5>{{ $package->p_name }}</h5>
                                        {{-- <span>Duration: 7 Days and 6 Nights</span> --}}
                                    </div>
                                    {{-- <div class="hot-page2-hom-pre-3"> <span>4.1</span> </div> --}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hot-page2-hom-pre-head">
                        <h4>Top Individual <span>Packages</span></h4>
                    </div>
                    <div class="hot-page2-hom-pre">
                        <ul>
                            <!--LISTINGS-->
                            @foreach ($individualPackages->slice(0, 5) as $indPak)
                            <li>
                                <a href="{{ url('/tour-details') }}/{{ $indPak->p_id }}">
                                    <div class="hot-page2-hom-pre-1">
                                        @if( !empty(PageController::getImage($indPak->p_id)) )
                                        <img src="{{asset('assets/image/img-loading.gif') }}"
                                            data-original="{{ asset('storage/pkgGall').'/'.PageController::getImage($indPak->p_id)->image_name }}"
                                            alt="Tour Booking" title="Tour Booking">
                                        @else
                                        <img data-original="https://via.placeholder.com/350x200" alt="No Image found" />

                                        @endif
                                    </div>
                                    <div class="hot-page2-hom-pre-2">
                                        <h5>{{ $indPak->title }}</h5> <span>{{ $indPak->duration }}, City:
                                            {{ $indPak->location }}</span>
                                    </div>
                                    <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right"
                                            aria-hidden="true"></i> </div>
                                </a>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--========= Scripts ===========-->


@endsection