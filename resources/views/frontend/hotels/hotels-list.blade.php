@extends('frontend.layouts.pageTemplate')
@section('content');
@php use App\Http\Controllers\FrontEnd\PageController; @endphp

<!--====== HOTELS LIST ==========-->
<section class="hot-page2-alp hot-page2-pa-sp-top all-hot-bg">
    <div class="container">
        <div class="row inner_banner inner_banner_3 bg-none">
            <div class="hot-page2-alp-tit">
                <h1>Hotels </h1>
                <ul>
                    <li><a href="{{route('frontend.home')}}">Home</a> </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Hotels & Restaurants</a> </li>
                </ul>
                <p>{{$hotelCount > 1 ? $hotelCount.' Hotels' : $hotelCount.' Hotel'}} available </p>
            </div>
        </div>
        <div class="row">
            <div class="hot-page2-alp-con">
                <!--LEFT LISTINGS-->
                <div class="col-md-3 hot-page2-alp-con-left">
                    <!--PART 1 : LEFT LISTINGS-->
                    <div class="hot-page2-alp-con-left-1">
                        <h3>Suggesting Hotels</h3>
                    </div>
                    <!--PART 2 : LEFT LISTINGS-->
                    <div class="hot-page2-hom-pre hot-page2-alp-left-ner-notb">
                        <ul>
                            <!--LISTINGS-->
                            @foreach($hotelList as $list)
                            <li>
                                <a href="{{url("hotel/$list->h_id")}}">
                                    <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> 
                                        @if(!empty(PageController::getHotelImage($list->h_id)))
                                        <img src="{{ asset('storage/photogallery').'/'.PageController::getHotelImage($list->h_id)->name }}" alt="{{ $list->title }}" class="img-responsive"/>
                                    @else
                                         <img src="https://via.placeholder.com/350x200" alt="No Image found" />
                                    @endif       
                                    </div>
                                    <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                                        <h5>{{$list->title}}</h5> <span>City: {{$list->location}}</span>
                                    </div>
                                    <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> 
                                        {{-- <span>4.4</span>  --}}
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--PART 7 : LEFT LISTINGS-->
                    {{-- <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
                        <h4><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Room Available Check</h4>
                        <div class="hot-page2-alp-l-com1 hot-room-ava-check">
                            <form>
                                <ul>
                                    <li>
                                        <label>Enter Your City</label>
                                        <input type="text" placeholder="Enter City"> </li>
                                    <li>
                                        <label>Depart Date</label>
                                        <input type="date"> </li>
                                    <li>
                                        <label>Return Date</label>
                                        <input type="date"> </li>
                                    <li>
                                        <input type="submit" value="SUBMIT"> </li>
                                </ul>
                            </form>
                        </div>
                    </div> --}}
                    <!--PART 4 : LEFT LISTINGS-->
                    {{-- <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
                        <h4><i class="fa fa-map-marker" aria-hidden="true"></i> Select City & Country</h4>
                        <div class="hot-page2-alp-l-com1 hot-page2-alp-p4">
                            <form>
                                <ul>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp41" class="styled" type="checkbox" checked="">
                                            <label for="chp41"> Nashville, USA </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp42" class="styled" type="checkbox">
                                            <label for="chp42"> Hull, England </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp43" class="styled" type="checkbox">
                                            <label for="chp43"> Seoul, South Korea </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp44" class="styled" type="checkbox">
                                            <label for="chp44"> Ljubljana, Slovenia </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp45" class="styled" type="checkbox">
                                            <label for="chp45"> Wroclaw, Poland </label>
                                        </div>
                                    </li>
                                </ul>
                            </form> <a href="javascript:void(0);" class="hot-page2-alp-p4-btn-s">view more</a>
                        </div>
                    </div> --}}
                    <!--END PART 4 : LEFT LISTINGS-->
                    <!--PART 5 : LEFT LISTINGS-->
                    {{-- <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
                        <h4><i class="fa fa-dollar" aria-hidden="true"></i> Select Price Range</h4>
                        <div class="hot-page2-alp-l-com1 hot-page2-alp-p5">
                            <form>
                                <ul>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp51" class="styled" type="checkbox" checked="">
                                            <label for="chp51"> $5000 - Above </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp52" class="styled" type="checkbox">
                                            <label for="chp52"> $4000 - $5000 </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp53" class="styled" type="checkbox">
                                            <label for="chp53"> $3000 - $4000 </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp54" class="styled" type="checkbox">
                                            <label for="chp54"> $2000 - $3000 </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp55" class="styled" type="checkbox">
                                            <label for="chp55"> $2000 - Below </label>
                                        </div>
                                    </li>
                                </ul>
                            </form> <a href="javascript:void(0);" class="hot-page2-alp-p5-btn-s">view more</a>
                        </div>
                    </div> --}}
                    <!--END PART 5 : LEFT LISTINGS-->
                    <!--PART 6 : LEFT LISTINGS-->
                    {{-- <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
                        <h4><i class="fa fa-star-o" aria-hidden="true"></i> Select Ratings</h4>
                        <div class="hot-page2-alp-l-com1 hot-page2-alp-p5">
                            <form>
                                <ul>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp61" class="styled" type="checkbox" checked="">
                                            <label for="chp61"> <span class="ho-hot-rat-star-list">
                                                    <span class="hot-list-left-part-rat">5.0</span> <i
                                                        class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                                        aria-hidden="true"></i><i class="fa fa-star"
                                                        aria-hidden="true"></i><i class="fa fa-star"
                                                        aria-hidden="true"></i><i class="fa fa-star"
                                                        aria-hidden="true"></i> </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp62" class="styled" type="checkbox">
                                            <label for="chp62"> <span class="ho-hot-rat-star-list">
                                                    <span class="hot-list-left-part-rat">4.0</span> <i
                                                        class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                                        aria-hidden="true"></i><i class="fa fa-star"
                                                        aria-hidden="true"></i><i class="fa fa-star"
                                                        aria-hidden="true"></i><i class="fa fa-star-o"
                                                        aria-hidden="true"></i> </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp63" class="styled" type="checkbox">
                                            <label for="chp63"> <span class="ho-hot-rat-star-list">
                                                    <span class="hot-list-left-part-rat">3.0</span> <i
                                                        class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                                        aria-hidden="true"></i><i class="fa fa-star"
                                                        aria-hidden="true"></i><i class="fa fa-star-o"
                                                        aria-hidden="true"></i><i class="fa fa-star-o"
                                                        aria-hidden="true"></i> </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp64" class="styled" type="checkbox">
                                            <label for="chp64"> <span class="ho-hot-rat-star-list">
                                                    <span class="hot-list-left-part-rat">2.0</span> <i
                                                        class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                                        aria-hidden="true"></i><i class="fa fa-star-o"
                                                        aria-hidden="true"></i><i class="fa fa-star-o"
                                                        aria-hidden="true"></i><i class="fa fa-star-o"
                                                        aria-hidden="true"></i> </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp65" class="styled" type="checkbox">
                                            <label for="chp65"> <span class="ho-hot-rat-star-list">
                                                    <span class="hot-list-left-part-rat">1.0</span> <i
                                                        class="fa fa-star" aria-hidden="true"></i><i
                                                        class="fa fa-star-o" aria-hidden="true"></i><i
                                                        class="fa fa-star-o" aria-hidden="true"></i><i
                                                        class="fa fa-star-o" aria-hidden="true"></i><i
                                                        class="fa fa-star-o" aria-hidden="true"></i> </span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </form> <a href="javascript:void(0);" class="hot-page2-alp-p5-btn-s">view more</a>
                        </div>
                    </div> --}}
                    <!--END PART 5 : LEFT LISTINGS-->
                    <!--PART 6 : LEFT LISTINGS-->
                    <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
                        <h4><i class="fa fa-heart-o" aria-hidden="true"></i> Hotel Amenities</h4>
                        <div class="hot-page2-alp-l-com1 hot-page2-alp-p5">
                            <form>
                                <ul>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp71" class="styled" type="checkbox" checked="0">
                                            <label for="chp71"> Swimming pools </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp72" class="styled" type="checkbox">
                                            <label for="chp72"> Wi-Fi & Computer </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp73" class="styled" type="checkbox">
                                            <label for="chp73"> Kitchen facilities </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp74" class="styled" type="checkbox">
                                            <label for="chp74"> Music & GYM </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="chp75" class="styled" type="checkbox">
                                            <label for="chp75"> Dining </label>
                                        </div>
                                    </li>
                                </ul>
                            </form> <a href="javascript:void(0);" class="hot-page2-alp-p5-btn-s">view more</a>
                        </div>
                    </div>
                    <!--END PART 7 : LEFT LISTINGS-->
                </div>
                <!--END LEFT LISTINGS-->
                <!--RIGHT LISTINGS-->
                <div class="col-md-9 hot-page2-alp-con-right">
                    <div class="hot-page2-alp-con-right-1">
                        <!--LISTINGS-->
                        <div class="row">
                            @foreach($hotelList as $list)
                            <!--LISTINGS START-->
                            <div class="hot-page2-alp-r-list">
                                <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                                    <a href="javascript:void(0);">
                                        <div class="hotel-list-score">4.5</div>
                                        <div class="hot-page2-hli-1"> 
                                            @if(!empty(PageController::getHotelImage($list->h_id)))
                                        <img src="{{ asset('storage/photogallery').'/'.PageController::getHotelImage($list->h_id)->name }}" alt="{{ $list->title }}" class="img-responsive"/>
                                    @else
                                         <img src="https://via.placeholder.com/350x200" alt="No Image found" />
                                    @endif  
                                        </div>
                                        <div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms:
                                            {{$list->available_room}} </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <div class="hot-page2-alp-ri-p2">
                                        <a href="{{url("hotel/$list->h_id")}}">
                                            <h3>{{$list->title}}</h3>
                                        </a>
                                        <ul>
                                            <li>{{$list->location}}</li>
                                            <li>{{$list->contact}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="hot-page2-alp-ri-p3">
                                        {{-- <div class="hot-page2-alp-r-hot-page-rat">25%Off</div>  --}}
                                        <span
                                            class="hot-list-p3-1">Price Per Night</span>
                                        <span class="hot-list-p3-2">{{$list->price}}</span><span
                                            class="hot-list-p3-4">
                                            <a href="{{url('/booking')}}" class="hot-page2-alp-quot-btn">Book Now</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!--END LISTINGS-->
                            @endforeach

                        </div>
                    </div>
                </div>
                <!--END RIGHT LISTINGS-->
            </div>
        </div>
    </div>
</section>
<!--====== TIPS BEFORE TRAVEL ==========-->
@endsection