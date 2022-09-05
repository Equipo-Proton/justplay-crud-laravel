<header>

    <a href="{{ url('/') }}">
        <div class="left-header">

            <img src="{{URL::asset('/img/icono.png')}}" />
            <img class="h-50 p-2" src="{{URL::asset('/img/justplay.png')}}" />
        </div>
    </a>

    <h1 class="eventandloginbutton text-white fs-2 justify-content-center find">@yield('title', 'FIND YOUR SPORTS PARTNER')</h1>
    <div id="myeventsbutton" class="right-header text-white ">
        @if (Auth::check() && ! Auth::user()->isAdmin)
        <a href="{{ route('myEvents') }}" class="btn btn-danger border-white mr-2">My Events</a>
        @endif
        @guest
        @if (Route::has('login'))
        <li class="nav-item text-white">
            <a class="nav-link" href="{{ route('register') }}"><img src="{{URL::asset('/img/register.png')}}" /></a>
        </li>
        @endif

        @if (Route::has('register'))
        <li class="nav-item text-white">
            <a class="nav-link" href="{{ route('login') }}"><img src="{{URL::asset('/img/login.png')}}" /></a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle  pt-1.5 mr-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
    </div>
    </ul>
    </div>
    </div>
    </nav>





</header>