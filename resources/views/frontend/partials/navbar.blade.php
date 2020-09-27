<div class="navbar-fixed">
    <nav class="indigo darken-4">
        <div class="container">
            <div class="nav-wrapper">
                <a href="{{ route('home') }}" class="brand-logo">
                    {{config('app.name')}}
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>

                <ul class="right hide-on-med-and-down">
                    <li class="{{ Request::is('/') ? 'active' : '' }}">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    @guest
                        <li><a href="{{ route('login') }}"><i class="material-icons">input</i></a></li>
                    @else
                    <li>
                        <a class="dropdown-trigger" href="#!" data-target="dropdown-auth-frontend">
                            {{ ucfirst(Auth::user()->name) }}
                        <li>
                            <a class="dropdownitem" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="material-icons">power_settings_new</i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        </a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

</div>
