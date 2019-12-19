@extends('frontend.layouts.pageTemplate')
@section('content')
@php use App\Http\Controllers\FrontEnd\PageController; @endphp
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

@endsection