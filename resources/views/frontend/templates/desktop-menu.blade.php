<div class="top-logo" data-spy="affix" data-offset-top="250">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wed-logo">
                    <a href="{{route('frontend.home')}}"><img src="{{ asset('images/logo.png') }}" alt="" />
                    </a>
                </div>
                <div class="main-menu">
                    <ul>
                        <li><a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="about-menu">
                            <a href="javascript:void()" class="mm-arr">Packages</a>
                            <!-- MEGA MENU 1 -->
                            <div class="mm-pos">
                                <div class="about-mm m-menu">
                                    <div class="m-menu-inn">
                                        <div class="mm1-com mm1-s1">
                                            <div class="ed-course-in">
                                                <a class="course-overlay menu-about" href="{{ url('/packages') }}">
                                                    <img src="{{ asset('images/sight/5.jpg') }}" alt="">
                                                    <span>View All Packages</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="mm1-com mm1-s2">
                                            <p>Choose from the multiple packages that suits you most with your lifestyle</p>
                                            <a href="{{ url('/packages') }}" class="mm-r-m-btn">Read more</a>
                                        </div>
                                        <div class="mm1-com mm1-s3">
                                            <ul>
                                                @if(empty($allPackages))
                                                No pkgs
                                                @else
                                                @foreach($topPackages->slice(0,5) as $pkg)
                                                <li>
                                                    <a
                                                        href="{{url('/package\/')}}{{ $pkg->p_id }}">{{ preg_match('(package|Package|packages|Packages)', $pkg->p_name) == 0 ? $pkg->p_name." Packages" : $pkg->p_name  }}</a>
                                                </li>
                                                @endforeach
                                                @endif
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <li><a href="{{route('frontend.hotels')}}">Hotels</a></li>

                        <li><a href="{{route('contact')}}">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
