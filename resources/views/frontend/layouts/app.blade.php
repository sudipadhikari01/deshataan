<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/animate.css">
</head>

<body>
    <div id="app">
        <!-- Preloader -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>

        <!-- MOBILE MENU -->
        <section>
            <div class="ed-mob-menu">
                <div class="ed-mob-menu-con">
                    <div class="ed-mm-left">
                        <div class="wed-logo">
                            <a href="{{url('/')}}"><img src="images/logo.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="ed-mm-right">
                        <div class="ed-mm-menu">
                            <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                            <div class="ed-mm-inn">
                                <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                                <h4>Home</h4>
                                <h4>Tour Packages</h4>
                                <ul>
                                    {{-- loop here --}}
                                    <li><a href="all-package.html">All Package</a></li>
                                    <li><a href="family-package.html">Family Package</a></li>
                                    <li><a href="honeymoon-package.html">Honeymoon Package</a></li>
                                    <li><a href="group-package.html">Group Package</a></li>
                                    <li><a href="weekend-package.html">WeekEnd Package</a></li>
                                    <li><a href="regular-package.html">Regular Package</a></li>
                                    <li><a href="custom-package.html">Custom Package</a></li>
                                </ul>
                                <h4>Other pages:1</h4>
                                <ul>
                                    <li><a href="tour-details.html">Travel details</a></li>
                                    <li><a href="hotel-details.html">Hotel details</a></li>
                                    <li><a href="all-package.html">All package</a></li>
                                    <li><a href="hotels-list.html">All hotels</a></li>
                                    <li><a href="booking.html">Booking page</a></li>
                                </ul>
                                <h4 class="ed-dr-men-mar-top">User login pages</h4>
                                <ul>
                                    <li><a href="{{url('/register')}}">Register</a></li>
                                    <li><a href="{{url('/login')}}">Login and Sign in</a></li>
                                    <li><a href="forgot-pass.html">Forgot pass</a></li>
                                </ul>
                                <h4>Other pages:2</h4>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    {{-- <li><a href="events.html">Events</a></li> --}}
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="tips.html">Tips Before Travel</a></li>
                                    <li><a href="price-list.html">Price List</a></li>
                                    <li><a href="discount.html">Discount</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="sitemap.html">Site map</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--HEADER SECTION-->
        <section>
            <!-- TOP BAR -->
            <div class="ed-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ed-com-t1-left">
                                <ul>
                                    <li><a href="#">Contact: Lake Road, Suite 180 Farmington Hills, U.S.A.</a>
                                    </li>
                                    <li><a href="#">Phone: +101-1231-1231</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ed-com-t1-right">
                                <ul>
                                    @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                    @endif
                                    @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ ucfirst(Auth::user()->name) }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a href="{{ route('admin') }}" class="dropdown-item">Dashboard</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                    @endguest
                                </ul>
                            </div>
                            <div class="ed-com-t1-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LOGO AND MENU SECTION -->
            {{-- navbar menu div starts --}}
            <div class="top-logo" data-spy="affix" data-offset-top="250">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wed-logo">
                                <a href="{{url('/')}}"><img src="images/logo.png" alt="" />
                                </a>
                            </div>
                            <div class="main-menu">
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="about-menu">
                                        <a href="{{url('/packages')}}" class="mm-arr">Packages</a>
                                        <!-- MEGA MENU 1 -->
                                        <div class="mm-pos">
                                            <div class="about-mm m-menu">
                                                <div class="m-menu-inn">
                                                    <div class="mm1-com mm1-s1">
                                                        <div class="ed-course-in">
                                                            <a class="course-overlay menu-about"
                                                                href="all-package.html">
                                                                <img src="images/sight/5.jpg" alt="">
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

                                                            @else
                                                            @foreach($pkgs as $pkg)
                                                            <li><a href="#">{{ $pkg->p_name }}</a></li>
                                                            @endforeach
                                                            @endif
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li><a href="hotels-list.html">Hotels</a></li>

                                    <li><a href="contact.html">Contact us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <main class="py-4">
                @yield('content')
            </main>
    </div>


    <!--========= Scripts ===========-->
    <script src="js/jquery-latest.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
