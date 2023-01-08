<style>
    .nav-item::after {
        content: '';
        display: block;
        width: 0px;
        height: 2px;
        background: #ffffff;
        transition: 0.2s;
    }

    .nav-item:hover::after {
        width: 100%;
    }

    @media screen and (max-width: 1000px) {

        ul.leftsidelist .nav-item,
        .nav-brand {
            display: none;
        }
    }
</style>

<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #252525; height:50px">
    <!--Navbar content-->
    <div class="container-fluid">

        <!--Left Side Of Navbar -->
        <ul class="navbar-nav navbar-collapse me-auto leftsidelist">
            <li class="nav-brand">
                <a class="navbar-brand" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-house-fill" viewbox="0 0 20 16">
                        <path
                            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                    </svg>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('anuncios') }}">Todos os Anúncios</a>
            </li>
            @auth
            @if(Auth::user()->tipo == "Empregador")
            <li class="nav-item">
                <a class="nav-link" href="{{ url('meusAnuncios')}}">Meus Anúncios</a>
            </li>
            @endif
            @endauth
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav d-flex align-items-center">
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
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    Olá, {{Auth::user()->name}}
                </a>

                <div class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdown">
                    @if(Auth::user()->isAdmin == '1')
                    <a class="dropdown-item" href="{{ url('/dashboard') }}">
                        Dashboard
                    </a>
                    @endif
                    <a class="dropdown-item" href="{{url('/profile', Auth::user()->id)}}">Perfil </a>
                    <!-- VER ISTO -->

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
        </ul>
    </div>
</nav>