@extends('frontend.layouts.pageTemplate')
@section('content')
@php use App\Http\Controllers\FrontEnd\PageController; @endphp
{{-- {{ dump($hotel) }} --}}
<!--====== BANNER ==========-->
<section>
    <div class="rows inner_banner inner_banner_5">
        <div class="container">
            <h2><span>{!!
                    ucfirst( Str::contains($hotel->title, 'Package') == true ?
                    Str::replaceLast('Package',' <span>Packages</span>',$hotel->tittle) :
                    "$hotel->title <span>Packages</span>" )
                    !!} -</span> Top {{ ucfirst($hotel->title) }}
            </h2>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                <li><a href="javascript:void()" class="bread-acti">{{ ucfirst($hotel->title )}} Hotel</a></li>
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
                <h2>
                    {!!
                    ucfirst( Str::contains($hotel->title, 'Package') == true ?
                    Str::replaceLast('Package','<span>Packages</span>',$hotel->title) :
                    "$hotel->title <span>Packages</span>" )
                    !!}
                </h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>{{ $hotel->description }}</p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="rows inn-page-bg com-colo">
        <div class="container inn-page-con-bg tb-space">
            <div class="col-md-9">
                <div class="tour_head1 hotel-book-room">
                    <h3>Photo Gallery</h3>
        
                    @if($hotelPhotoGallery->count() > 0)
                        <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators carousel-indicators-1">
        
                                @foreach($hotelPhotoGallery as $hotelPhoto)
        
                                <li data-target="#myCarousel1" data-slide-to="{{$loop->index}}">
                                    <img src='{{asset("storage/photogallery/$hotelPhoto->name")}}' alt=""
                                        style="width:80px; height:50px">
                                </li>
                                @endforeach
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner carousel-inner1" role="listbox">
        
                                @foreach($hotelPhotoGallery as $hotelPhoto)
                                <div class="item {{ $loop->index == 0 ? 'active' : '' }}">
                                    <img src='{{asset("storage/photogallery/$hotelPhoto->name")}}' alt="Chania"
                                        style="width:100%; height:450px" height="345">
                                </div>
                                @endforeach
        
                            </div>
                            <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                                    <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span> </a>
                                <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                                    <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1"
                                            aria-hidden="true"></i></span> </a>
                            </div>
                    @else
                        <h2 class="text-info">No Images To Show</h2>
                    @endif
                </div>
            </div>

            <div class="col-md-3 tour_r">
                <!--====== SPECIAL OFFERS ==========-->
                <div class="tour_right tour_offer">
                    {{-- <div class="band1"><img src="{{asset('images/offer.png')}}" alt="" /> </div> --}}
                    {{-- <p>Special Offer</p> --}}
                    <h4>{{$hotel->price}}<span class="n-td">
                            <span class="n-td-1"></span>
                        </span>
                    </h4> <a href="{{url('/booking')}}" class="link-btn">Book Now</a>
                </div>
                <!--====== TRIP INFORMATION ==========-->
                <div class="tour_right tour_incl tour-ri-com">
                    <h3>Trip Information</h3>
                    <ul>
                        <li>Location : {{ucfirst($hotel->location)}}</li>
                        <li>Rooms : @if ($hotel->available_room > 0)
                            {{ $hotel->available_room }}'s Available
                        @else
                            "Sorry Rooms Unavailable right now"
                        @endif</li>
                        {{-- <li>Arrival Date: {{ date('M d, Y',strtotime($hotel->start_date)) }}</li> --}}
                        {{-- <li>Departure Date: {{ date('M d, Y',strtotime($hotel->end_date)) }}</li> --}}
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
                        <h4><i class="fa fa-phone" aria-hidden="true"></i> {{ $hotel->contact }}</h4>
                    </div>
                </div>
                <!--====== PUPULAR TOUR PACKAGES ==========-->
                <div class="tour_right tour_rela tour-ri-com">
                    <h3>Popular Packages</h3>
                    @foreach ($individualPackages->slice(0, 5) as $indPak)
                    <div class="tour_rela_1"> 
                        @if( !empty(PageController::getImage($indPak->p_id)) )
                        <img src="{{ asset('storage/pkgGall').'/'.PageController::getImage($indPak->p_id)->image_name }}"
                            alt="Tour Booking" title="Tour Booking">
                        @else
                        <img src="https://via.placeholder.com/350x200" alt="No Image found" />
                        @endif
                        <h4>{{ $indPak->title }} | {{ $indPak->duration }}</h4>
                        <p>{!! str_limit($indPak->description, $limit = 100, $end = '...')  !!}</p> <a href="{{ url('/tour-details') }}/{{ $indPak->p_id }}" class="link-btn">View this Package</a>
                    </div>
                    @endforeach
                    {{-- <div class="tour_rela_1"> <img src="{{ asset('images/related2.png') }}" alt="" />
                        <h4>Mauritius 4Days / 3Nights</h4>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                            default model text</p> <a href="#" class="link-btn">View this Package</a>
                    </div>
                    <div class="tour_rela_1"> <img src="{{ asset('images/related3.png') }}" alt="" />
                        <h4>India 14Days / 13Nights</h4>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                            default model text</p> <a href="#" class="link-btn">View this Package</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection