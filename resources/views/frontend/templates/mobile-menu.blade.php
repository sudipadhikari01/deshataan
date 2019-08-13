<div class="ed-mob-menu">
    <div class="ed-mob-menu-con">
        <div class="ed-mm-left">
            <div class="wed-logo">
                <a href="{{route('frontend.home')}}"><img src="{{asset('images/logo.png') }}" alt="" />
                </a>
            </div>
        </div>
        <div class="ed-mm-right">
            <div class="ed-mm-menu">
                <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                <div class="ed-mm-inn">
                    <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                    <a href="{{route('frontend.home')}}">
                        <h4>Home</h4>
                    </a>

                    <h4>Packages</h4>
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
                    <h4>Hotels</h4>

                    <h4>Contact</h4>

                    {{-- login register part --}}
                    @guest
                    <h4 class="ed-dr-men-mar-top">User login pages</h4>
                    <ul>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="{{url('/login')}}">Login and Sign in</a></li>
                        <li><a href="forgot-pass.html">Forgot pass</a></li>
                    </ul>
                    @else
                    <h4>{{ ucfirst(Auth::user()->name) }}</h4>
                    <ul>
                        <li><a href="{{route('frontend.home')}}">Dashboard</a></li>
                        <li>
                            <a href="#"
                                onclick="event.preventDefault();document.getElementById('logout-form-mobile').submit();">Logout</a>
                            <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
