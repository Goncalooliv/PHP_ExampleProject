<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','PROJ ESOF LAPR')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color:#6c757d">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img width="40px" src="{{URL::to('/iconhome.png')}}" alt="homepage">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class ="nav-item active">
                            <a class="nav-link" href="{{url('/anuncios')}}">Todos os Anúncios </a>
                        </li>
                        @guest

                        @else

                            @if (Auth::user()->tipo == 'Empregador')
                                <a class="nav-link" href="{{ url('anuncios/create')}}"> Criar Anuncio</a>
                            @endif
                        @endguest
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
                                                <i class="fa fa-search " ></i>
                                            </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> 

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Bem Vindo, {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="user/profile/{{Auth::user()->id}}">Perfil </a>

                                    @if(Auth::user()->tipo == 'Empregador')
                                        <a class="dropdown-item" href="{{url('anuncios/meusAnuncios')}}">Anuncios</a>
                                    @endif

                                    @if (Auth::user()->isAdmin)
                                        <a class="dropdown-item" href="{{ url('/dashboard') }}">
                                            Dashboard
                                        </a>
                                    @endif
                                    
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

        <main class="py-4">
            @yield('content')
        </main>
        @include('includes.footer')
    </div>
</body>
</html>
