@extends('frontend.layouts.pageTemplate')


@section('content')
@php use App\Http\Controllers\FrontEnd\PageController; @endphp
<!--====== BANNER ==========-->
<section>
    <div class="rows inner_banner inner_banner_5">
        <div class="container">
            <h2><span>{!!
                    ucfirst( Str::contains($pkg->p_name, 'Package') == true ?
                    Str::replaceLast('Package',' <span>Packages</span>',$pkg->p_name) :
                    "$pkg->p_name <span>Packages</span>" )
                    !!} -</span> Top {{ ucfirst($pkg->p_name) }}
            </h2>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                <li><a href="javascript:void()" class="bread-acti">{{ ucfirst($pkg->p_name )}} Package</a></li>
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
                    ucfirst( Str::contains($pkg->p_name, 'Package') == true ?
                    Str::replaceLast('Package','<span>Packages</span>',$pkg->p_name) :
                    "$pkg->p_name <span>Packages</span>" )
                    !!}
                </h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                    {!! $pkg->p_desc !!}

            </div>

            @if (isset($ipkgs))
            @foreach($ipkgs as $p) {{-- loop indi pkgs --}}
            <!--===== PLACES ======-->
            <div class="rows p2_2">
                <div class="col-md-6 col-sm-6 col-xs-12 p2_1">
                    {{-- <div class="band"><img src="{{ asset('images/band.png') }}" alt="" />
                    </div> --}}
                    @if(!empty($p->discount))
                            <div class="bandText"> {{$p->discount}}% <br> OFF </div>
                            <div class="band"> <img src="{{ asset('images/band-all.png') }}" alt="" /> </div>
                        @endif

                    @if(!empty(PageController::getImage($p->p_id)))
                    <img src="{{ asset('storage/pkgGall').'/'.PageController::getImage($p->p_id)->image_name }}"
                        alt="" />
                    @else
                    <img src="{{ asset('storage/pkgGall/540x270.png') }}" alt="" />
                    @endif
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 p2">
                    <h3>{{$p->title}}<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o"
                                aria-hidden="true"></i></span></h3>
                    {{-- <p>{!! $p->description !!}</p> --}}
                    <div class="ticket">
                        <ul>
                            <li>Available Tickets : {{$p->ticket_quantity}}</li>
                            <li>Start Date : {{  date('Y | M | d D', strtotime($p->start_date))}}</li>
                            <li>End Date : {{ date('Y | M |d  D', strtotime($p->end_date))}}</li>
                        </ul>
                    </div>
                    <div class="p2_book">
                        <ul>
                            <li><a href="{{url('/booking')}}" class="link-btn">Book Now</a>
                            </li>
                            <li><a href="{{url('/tour-details')}}/{{$p->p_id}}" class="link-btn">View Package</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <!--===== PLACES END ======-->
            @endforeach
            @else
            <p class="text-center text-danger">No Packges Added on this Category</p>
            @endif

        </div>
    </div>
</section>

@endsection
