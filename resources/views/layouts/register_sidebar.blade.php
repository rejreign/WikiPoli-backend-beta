 <header id="header" class="container-fluid">
            <div class="container">
                <nav class="navbar navbar-expand-lg" id="navbar">
                    <a href="index.html" class="navbar-brand logo">
                        <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png"
                            alt="WikiPoli Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="nav navbar-nav ml-auto menu">
                            <li class="nav-item @if(request()->path() == 'posts') active @endif">
                                <a class="nav-link " href="{{url('posts')}}"><strong>Posts</strong></a>
                            </li>
                            <li class="nav-item  @if(request()->path() == 'login') active @endif">
                                <a class="nav-link" href="{{route('login')}}"><strong>Login</strong></a>
                            </li>
                            <li class="nav-item  @if(request()->path() == 'register') active @endif">
                                <a class="nav-link" href="{{route('register')}}" id="nav-register">Register</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>