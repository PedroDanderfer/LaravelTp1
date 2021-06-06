<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <title>Venturi</title>
</head>
<body>
    <header>
        <div>
            <button id="navMobileBtn">
                <div>
                    <span>Menú principal</span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <h1><a href="{{ route('home') }}">Venturi</a></h1>
        </div>
        <nav id="navMobile">
            <div>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#">Ofertas</a></li>
                    <li><span class="categoriasBtn" id="navCategoriasBtn">Categorias</span> 
                        <ul id="navCategorias">
                            <li><a href="#">Categoria1</a></li>
                            <li><a href="#">Categoria2</a></li>
                            <li><a href="#">Categoria3</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    @auth
                        @if(Auth::user()->hasRole('seller') && Auth::user()->can('create post'))
                        <li class="postLi"><a href="#">Crear post</a></li>
                        @endif
                        @if(Auth::user()->hasRole('admin') && Auth::user()->can('access admin panel'))
                        <li class="adminLi"><a href="#">Panel de administrador</a></li>
                        @endif
                    @endauth
                    <li class="perfilLi"><x-header.usuario/></li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="display">
        @yield('login')
        @yield('register')
        @yield('home')
    </div>
    <script src="{{ asset('js/navMobile.js') }}"></script>
    <script src="{{ asset('js/navPerfil.js') }}"></script>
</body>
</html>