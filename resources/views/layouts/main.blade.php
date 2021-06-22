<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('css/products.css') }}" rel="stylesheet">
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
    <link href="{{ asset('css/createProduct.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminUsers.css') }}" rel="stylesheet">
    <link href="{{ asset('css/comingSoon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/notification.css') }}" rel="stylesheet">
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
                    <li><a href="{{ route('product.getOffers') }}">Ofertas</a></li>
                    <li><span class="categoriasBtn" id="navCategoriasBtn">Categorias</span> 
                        <ul id="navCategorias">
                            <li><a href="{{ route('comingSoon') }}">Categoria uno</a></li>
                            <li><a href="{{ route('comingSoon') }}">Categoria dos</a></li>
                            <li><a href="{{ route('comingSoon') }}">Categoria tres</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    @auth
                        @if(Auth::user()->hasRole('seller') || Auth::user()->hasRole('admin') && Auth::user()->can('create post'))
                        <li class="postLi"><a href="{{ route('product.createView') }}">Crear post</a></li>
                        @endif
                        @if(Auth::user()->hasRole('admin') && Auth::user()->can('access admin panel'))
                        <li class="adminLi"><a href="{{ route('admin.panel') }}">Panel de administrador</a></li>
                        @endif
                    @endauth
                    <li class="perfilLi"><x-header.usuario/></li>
                </ul>
            </div>
        </nav>
    </header>
    @if(Request::is('admin/*') || Request::is('admin'))
        <nav id="navAdmin">
            <ul>
                <li><a href="{{ route('admin.users') }}">Usuarios</a></li>
                <li><a href="{{ route('admin.comingSoon') }}">Productos</a></li>
                <li><a href="{{ route('admin.comingSoon') }}">Ordenes</a></li>
            </ul>
        </nav>
    @endif
    <div id="display">
        @if (Session::has('success_message'))
            <x-notification.alert type="success" message="{{ Session::get('success_message') }}"/>
        @elseif(Session::has('error_message'))
            <x-notification.alert type="error" message="{{ Session::get('error_message') }}"/>
        @endif
        @yield('login')
        @yield('register')
        @yield('home')
        @yield('createPost')
        @yield('usersAdminPanel')
        @yield('product')
        @yield('products')
        @yield('comingSoon')
    </div>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/displayNavigation.js') }}"></script>
    <script src="{{ asset('js/navMobile.js') }}"></script>
    <script src="{{ asset('js/navPerfil.js') }}"></script>
</body>
</html>