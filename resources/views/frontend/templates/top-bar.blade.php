<div class="ed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ed-com-t1-left">
                    <ul>
                        <li><a href="#">Contact: Lazimpat, Kathmandu, Nepal</a>
                        </li>
                        <li><a href="#">Phone: +977-014444865</a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="ed-com-t1-right">
                    <ul>
                        @guest

                        <li><a href="{{url('/login')}}">Sign In</a>
                        </li>
                        <li><a href="{{ route('register') }}">Sign Up</a>
                        </li>

                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ ucfirst(Auth::user()->name) }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="{{ route('frontend.home') }}" class="dropdown-item">Dashboard</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endif
                    </ul>
                </div> --}}
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
