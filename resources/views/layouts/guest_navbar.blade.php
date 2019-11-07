

<header id="header" class="container-fluid">
    <div class="container">
        <nav class="navbar navbar-expand-lg" id="navbar">
            <a href="{{url('/')}}" class="navbar-brand logo">
                <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" alt="WikiPoli Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav ml-auto menu">
                    <li class="nav-item">
                        <a class="nav-link " @if(request()->path() == '/') id="nav-register" @endif href="{{url('/')}}"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " @if(request()->path() == 'posts') id="nav-register" @endif href="{{url('posts')}}"><strong>Posts</strong></a>
                    </li>
                    @Auth
                    

                    <li class="nav-item">
                        <a class="nav-link" @if(request()->path() == 'settings') id="nav-register" @endif  href="{{url('settings')}}"><strong>Profile</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" @if(request()->path() == 'profile') id="nav-register" @endif  href="{{url('profile')}}"><strong>Settings</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"   ><strong>{{Auth::user()->username}}</strong></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <strong>  {{ __('Logout') }}</strong>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link"  @if(request()->path() == 'login') id="nav-register" @endif href="{{url('login')}}"><strong>Login</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  @if(request()->path() == 'register') id="nav-register" @endif href="{{url('register')}}" ><strong>Register</strong></a>
                    </li>
                    @endAuth

                </ul>
            </div>
        </nav>
    </div>
</header>
