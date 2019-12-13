@extends('frontend.layouts.pageTemplate')

@section('content');
@php use App\Http\Controllers\FrontEnd\PageController; @endphp

<!--====== BANNER ==========-->
@include('frontend.templates.breadcrumbs')
<!--====== PLACES ==========-->
<section>
    <div class="rows inn-page-bg com-colo">
        <div class="container inn-page-con-bg tb-space pad-bot-redu-5" id="inner-page-title">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title col-md-12">
                <h2>Our <span> packages</span></h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages
                    and enjoy your holidays with distinctive experience</p>
            </div>
{{-- @dump($pkgs) --}}
            @foreach($pkgs as $p) {{-- loog indi pkgs --}}
            <!--===== PLACES ======-->
            <div class="rows p2_2">
                <div class="col-md-6 col-sm-6 col-xs-12 p2_1">
                    <div class="band">
                        {{-- <img src="images/band.png" alt="" /> --}}
                    </div>
                    {{-- <img src="images/iplace-2.jpg" alt="" /> --}}
                    @if(!empty(PageController::getImage($p->p_id)))
                    <img src="{{ asset('storage/pkgGall').'/'.PageController::getImage($p->p_id)->image_name }}"
                        alt="package image" style="width:80%;" class="img-responsive"/>
                    @else
                    <img src="{{ asset('storage/pkgGall/540x270.png') }}" alt="" />
                    @endif
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 p2">
                    <h3>{{$p->p_name}} <span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o"
                                aria-hidden="true"></i></span></h3>
                    <p>{!! $p->p_desc !!}</p>
                    {{-- <div class="ticket">
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
                    </div> --}}
                    <div class="p2_book">
                        <ul>
                            <li><a href="{{url('/booking')}}" class="link-btn">Book Now</a>
                            </li>
                            <li><a href="{{url('/package')}}/{{ $p->p_id }}" class="link-btn">View Package</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--===== PLACES END ======-->
            @endforeach
            <div class="center">

                {{ $pkgs->links() }}
            </div>

        </div>
    </div>
</section>
@endsection
