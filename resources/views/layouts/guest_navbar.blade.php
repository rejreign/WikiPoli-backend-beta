
<nav class="navbar navbar-expand-sm navbar-light">
                <a class="navbar-brand" href="{{url('/')}}">
    <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" class="navimg">
</a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item @if(request()->path() == 'posts') active @endif">
                <a class="nav-link text-primary pr-5" href="{{url('posts')}}">Posts <span class="sr-only">(current)</span></a>
                                                                            </li>
                                                                            @Auth
                                                                            <div class="collapse navbar-collapse" id="collapsibleNavId">
                                                                                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                                                                                    <li class="nav-item dropdown">
                                                                                        <a class="nav-link text-primary pr-2 dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> {{Auth::user()->username}}</a></a>
                                                                                        <div class="dropdown-menu bg-light" aria-labelledby="dropdownId">
                                                                                            <a class="dropdown-item" href="{{ url('user_setting') }}">Settings</a>
                                                                                            <div class="dropdown-divider"></div>
                                                                                            <a href="{{ route('logout') }}" class="dropdown-item"
                                                                                               onclick="event.preventDefault();
                                                                                                       document.getElementById('logout-form').submit();">
                                                                                                {{ __('Logout') }}
                                                                                            </a>
                                                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                                                @csrf
                                                                                            </form>
                                                                                        </div>
                                                                                    </li>
                                                                            </div> 
                                                                            @else

                                                                            <li class="nav-item">
                                                                                <a class="nav-link pr-5 text-primary" href="{{route('login')}}">Login</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link text-primary  pr-2" href="{{route('register')}}">Register</a>
                                                                            </li>
                                                                            @endAuth

                                                                    </div>
                                                                    </nav>

