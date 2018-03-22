<div id="hornav" class="container no-padding">
    <div class="row">
        <div class="col-md-12 no-padding">
            <div class="text-center visible-lg">
                <ul id="hornavmenu" class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    @guest
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Signup</a></li>
                    @else
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</div>