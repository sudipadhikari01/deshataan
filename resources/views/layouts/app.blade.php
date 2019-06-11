<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
                                <h4>Home pages</h4>
                                <ul>
                                    <li><a href="booking-all.html">Home page 1</a></li>
                                    <li><a href="booking-all.html">Home page 2</a></li>
                                    <li><a href="booking-tour-package.html">Home page 3</a></li>
                                    <li><a href="booking-hotel.html">Home page 4</a></li>
                                    <li><a href="booking-car-rentals.html">Home page 5</a></li>
                                    <li><a href="booking-flight.html">Home page 6</a></li>
                                    <li><a href="booking-slider.html">Home page 7</a></li>
                                </ul>
                                <h4>Tour Packages</h4>
                                <ul>
                                    <li><a href="all-package.html">All Package</a></li>
                                    <li><a href="family-package.html">Family Package</a></li>
                                    <li><a href="honeymoon-package.html">Honeymoon Package</a></li>
                                    <li><a href="group-package.html">Group Package</a></li>
                                    <li><a href="weekend-package.html">WeekEnd Package</a></li>
                                    <li><a href="regular-package.html">Regular Package</a></li>
                                    <li><a href="custom-package.html">Custom Package</a></li>
                                </ul>
                                <h4>Sighe Seeings Pages</h4>
                                <ul>
                                    <li><a href="places.html">Seight Seeing 1</a></li>
                                    <li><a href="places-1.html">Seight Seeing 2</a></li>
                                    <li><a href="places-2.html">Seight Seeing 3</a></li>
                                </ul>
                                <h4>User Dashboard</h4>
                                <ul>
                                    <li><a href="dashboard.html">My Bookings</a></li>
                                    <li><a href="db-my-profile.html">My Profile</a></li>
                                    <li><a href="db-my-profile-edit.html">My Profile edit</a></li>
                                    <li><a href="db-travel-booking.html">Tour Packages</a></li>
                                    <li><a href="db-hotel-booking.html">Hotel Bookings</a></li>
                                    {{-- <li><a href="db-event-booking.html">Event bookings</a></li> --}}
                                    <li><a href="db-payment.html">Make Payment</a></li>
                                    <li><a href="db-refund.html">Cancel Bookings</a></li>
                                    <li><a href="db-all-payment.html">Prient E-Tickets</a></li>
                                    <li><a href="db-event-details.html">Event booking details</a></li>
                                    <li><a href="db-hotel-details.html">Hotel booking details</a></li>
                                    <li><a href="db-travel-details.html">Travel booking details</a></li>
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
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                                        <a href="{{url('/family-package')}}" class="mm-arr">Packages</a>
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
                                                            <li><a href="booking-all.html">All Booking</a></li>
                                                            <li><a href="booking-tour-package.html">Tour Package
                                                                    Booking</a></li>
                                                            <li><a href="booking-hotel.html">Hotel Booking</a></li>
                                                            <li><a href="booking-car-rentals.html">Car Rentals
                                                                    Booking</a></li>
                                                            <li><a href="booking-flight.html">Flight Booking</a></li>
                                                            <li><a href="booking-slider.html">Slider Booking</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mm1-com mm1-s4">
                                                        <ul>
                                                            <li><a href="all-package.html">All Package</a></li>
                                                            <li><a href="family-package.html">Family Package</a></li>
                                                            <li><a href="honeymoon-package.html">Honeymoon Package</a>
                                                            </li>
                                                            <li><a href="group-package.html">Group Package</a></li>
                                                            <li><a href="weekend-package.html">WeekEnd Package</a></li>
                                                            <li><a href="regular-package.html">Regular Package</a></li>
                                                            <li><a href="custom-package.html">Custom Package</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="admi-menu">
                                        <a href="#" class="mm-arr">Seight Seeing</a>
                                        <!-- MEGA MENU 1 -->
                                        <div class="mm-pos">
                                            <div class="admi-mm m-menu">
                                                <div class="m-menu-inn">
                                                    <div class="mm2-com mm1-com mm1-s1">
                                                        <div class="ed-course-in">
                                                            <a class="course-overlay" href="places.html">
                                                                <img src="images/sight/1.jpg" alt="">
                                                                <span>Seight Seeing - 1</span>
                                                            </a>
                                                        </div>
                                                        <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non
                                                            eros. Vestibulum congue nec eros quis lacinia. Mauris non
                                                            tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.
                                                        </p>
                                                        <a href="places.html" class="mm-r-m-btn">Read more</a>
                                                    </div>
                                                    <div class="mm2-com mm1-com mm1-s1">
                                                        <div class="ed-course-in">
                                                            <a class="course-overlay" href="places-1.html">
                                                                <img src="images/sight/2.jpg" alt="">
                                                                <span>Seight Seeing - 2</span>
                                                            </a>
                                                        </div>
                                                        <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non
                                                            eros. Vestibulum congue nec eros quis lacinia. Mauris non
                                                            tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.
                                                        </p>
                                                        <a href="places-1.html" class="mm-r-m-btn">Read more</a>
                                                    </div>
                                                    <div class="mm2-com mm1-com mm1-s1">
                                                        <div class="ed-course-in">
                                                            <a class="course-overlay" href="places-2.html">
                                                                <img src="images/sight/3.jpg" alt="">
                                                                <span>Seight Seeing - 3</span>
                                                            </a>
                                                        </div>
                                                        <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non
                                                            eros. Vestibulum congue nec eros quis lacinia. Mauris non
                                                            tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.
                                                        </p>
                                                        <a href="places-2.html" class="mm-r-m-btn">Read more</a>
                                                    </div>
                                                    <div class="mm2-com mm1-com mm1-s4">
                                                        <div class="ed-course-in">
                                                            <a class="course-overlay" href="places-3.html">
                                                                <img src="images/sight/4.jpg" alt="">
                                                                <span>Seight Seeing - 4</span>
                                                            </a>
                                                        </div>
                                                        <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non
                                                            eros. Vestibulum congue nec eros quis lacinia. Mauris non
                                                            tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.
                                                        </p>
                                                        <a href="places-3.html" class="mm-r-m-btn">Read more</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="hotels-list.html">Hotels</a></li>
                                    <!--<li><a class='dropdown-button ed-sub-menu' href='#' data-activates='dropdown1'>Courses</a></li>-->
                                    <li class="cour-menu">
                                        <a href="#!" class="mm-arr">All Pages</a>
                                        <!-- MEGA MENU 1 -->
                                        <div class="mm-pos">
                                            <div class="cour-mm m-menu">
                                                <div class="m-menu-inn">
                                                    <div class="mm1-com mm1-cour-com mm1-s3">
                                                        <h4>Home pages</h4>
                                                        <ul>
                                                            <li><a href="booking-all.html">Home page 1</a></li>
                                                            <li><a href="booking-all.html">Home page 2</a></li>
                                                            <li><a href="booking-tour-package.html">Home page 3</a></li>
                                                            <li><a href="booking-hotel.html">Home page 4</a></li>
                                                            <li><a href="booking-car-rentals.html">Home page 5</a></li>
                                                            <li><a href="booking-flight.html">Home page 6</a></li>
                                                            <li><a href="booking-slider.html">Home page 7</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mm1-com mm1-cour-com mm1-s3">
                                                        <h4>Tour Packages</h4>
                                                        <ul>
                                                            <li><a href="all-package.html">All Package</a></li>
                                                            <li><a href="family-package.html">Family Package</a></li>
                                                            <li><a href="honeymoon-package.html">Honeymoon Package</a>
                                                            </li>
                                                            <li><a href="group-package.html">Group Package</a></li>
                                                            <li><a href="weekend-package.html">WeekEnd Package</a></li>
                                                            <li><a href="regular-package.html">Regular Package</a></li>
                                                            <li><a href="custom-package.html">Custom Package</a></li>
                                                        </ul>
                                                        <h4 class="ed-dr-men-mar-top">Sighe Seeings Pages</h4>
                                                        <ul>
                                                            <li><a href="places.html">Seight Seeing 1</a></li>
                                                            <li><a href="places-1.html">Seight Seeing 2</a></li>
                                                            <li><a href="places-2.html">Seight Seeing 3</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mm1-com mm1-cour-com mm1-s3">
                                                        <h4>User Dashboard</h4>
                                                        <ul>
                                                            <li><a href="dashboard.html">My Bookings</a></li>
                                                            <li><a href="db-my-profile.html">My Profile</a></li>
                                                            <li><a href="db-my-profile-edit.html">My Profile edit</a>
                                                            </li>
                                                            <li><a href="db-travel-booking.html">Tour Packages</a></li>
                                                            <li><a href="db-hotel-booking.html">Hotel Bookings</a></li>
                                                            <li><a href="db-event-booking.html">Event bookings</a></li>
                                                            <li><a href="db-payment.html">Make Payment</a></li>
                                                            <li><a href="db-refund.html">Cancel Bookings</a></li>
                                                            <li><a href="db-all-payment.html">Prient E-Tickets</a></li>
                                                            <li><a href="db-event-details.html">Event booking
                                                                    details</a></li>
                                                            <li><a href="db-hotel-details.html">Hotel booking
                                                                    details</a></li>
                                                            <li><a href="db-travel-details.html">Travel booking
                                                                    details</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mm1-com mm1-cour-com mm1-s3">
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
                                                            <li><a href="register.html">Register</a></li>
                                                            <li><a href="login.html">Login and Sign in</a></li>
                                                            <li><a href="forgot-pass.html">Forgot pass</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mm1-com mm1-cour-com mm1-s4">
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
                                    </li>
                                    <li><a href="events.html">Events</a>
                                    </li>
                                    <li><a href="dashboard.html">Profile</a>
                                    </li>
                                    <li><a href="contact.html">Contact us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--
        <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                            <form>
                                <div class="sf-type">
                                    <div class="sf-input">
                                        <input type="text" id="sf-box" placeholder="Search course and discount courses">
                                    </div>
                                    <div class="sf-list">
                                        <ul>
                                            <li><a href="course-details.html">Accounting/Finance</a></li>
                                            <li><a href="course-details.html">civil engineering</a></li>
                                            <li><a href="course-details.html">Art/Design</a></li>
                                            <li><a href="course-details.html">Marine Engineering</a></li>
                                            <li><a href="course-details.html">Business Management</a></li>
                                            <li><a href="course-details.html">Journalism/Writing</a></li>
                                            <li><a href="course-details.html">Physical Education</a></li>
                                            <li><a href="course-details.html">Political Science</a></li>
                                            <li><a href="course-details.html">Sciences</a></li>
                                            <li><a href="course-details.html">Statistics</a></li>
                                            <li><a href="course-details.html">Web Design/Development</a></li>
                                            <li><a href="course-details.html">SEO</a></li>
                                            <li><a href="course-details.html">Google Business</a></li>
                                            <li><a href="course-details.html">Graphics Design</a></li>
                                            <li><a href="course-details.html">Networking Courses</a></li>
                                            <li><a href="course-details.html">Information technology</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sf-submit">
                                    <input type="submit" value="Search Course">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>--> --}}


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
