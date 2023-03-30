<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" type="text/css" href="{{ asset('static/css/style.css') }}">
        <title>El escondite otaku</title>
    </head>
    <body>
        <nav>
            <a href="/">
                <h3 class="nav_titulo">El escondite otaku</h3>
            </a>
            <ul>
                <li>
                    <button><a href="\">Home</a></button>
                </li>
                <li>
                    <button><a href="\noticias">Noticias</a></button> 
                </li>
                <li>
                    <button><a href="\categorias"> Categorias </a></button>
                </li>
                <li>
                    <button><a href="\nosotros"> Sobre nosotros</a></button>
                </li>
                <li>
                    <button>
                        <a href="\carrito">
                            <img src="{{ asset('static/images/carrito.jpg') }}" alt="Carrito de compras">
                            <span class="cart-items">0</span>
                        </a>
                    </button>
                </li>
                @guest
                    <li>
                    <button> <a href="\login">Login</a> </button>
                    </li>
                    <li>
                        <button> <a href="\register">Register</a> </button>
                    </li>
                    @else
                        <button>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </button>
                @endguest
            </ul>
        </nav>
        <div class="container">
            <div class="itemCarrusel">
                <div class="tarjetaCarrusel">A</div>
                <div class="flechasCarrusel">
                    <i>Izquierda</i>
                    <i>Derecha</i>
                </div>
            </div> 
        </div> 
    </body>
</html>