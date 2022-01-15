<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img width="40px" src="{{URL::to('/iconhome.png')}}" alt="homepage">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class ="nav-item active">
                            <a class="nav-link" href="{{url('/anuncios')}}">Todos os Anúncios </a>
                        </li>
                    </ul>
                    
                    <!-- Middle Of Navbar -->
                    <div class="container">
                        <div class="row height d-flex justify-content-center align-items-center">
                            <div class="col-md-6">
                                <form action="{{url('/searchanuncio')}}" method="get" role="search">
                                    {{ csrf_field() }}
                                    <div class="input-group">
                                        <input type="search" class="form-control" style="border-radius: 20px; margin-left: -40px" name="q" placeholder="Search...">
                                            <button type="submit" class="btn btn-default rounded-circle" >
                                                <em class="fa fa-search " ></em>
                                            </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> 

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Olá, {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->tipo)
                                        <a class="dropdown-item" href="{{ url('/dashboard') }}">
                                            Dashboard
                                        </a>
                                    @endif

                                    <a class="dropdown-item" href="{{url('/user/profile')}}">Perfil </a>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
        </nav>