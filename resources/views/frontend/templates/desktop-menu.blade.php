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
                                                <a class="course-overlay menu-about" href="all-package.html">
                                                    <img src="{{ asset('images/sight/5.jpg') }}" alt="">
                                                    <span>Popular Package</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="mm1-com mm1-s2">
                                            <p>Want to change the world? At Berkeley we’re doing just that.
                                                When you join the Golden Bear community, you’re part of an
                                                institution that shifts the global conversation every single
                                                day.</p>
                                            <a href="all-package.html" class="mm-r-m-btn">Read more</a>
                                        </div>
                                        <div class="mm1-com mm1-s3">
                                            <ul>
                                                @if(empty($pkgs))
                                                No pkgs
                                                @else
                                                @foreach($pkgs as $pkg)
                                                <li>
                                                    <a href="{{url('/package\/')}}{{ $pkg->p_id }}">{{ $pkg->p_name }}
                                                    </a>
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

                        <li><a href="{{route('frontend.contact')}}">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
