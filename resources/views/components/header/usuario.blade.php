<div>
    @auth
        <div class="navPerfil">
            <span id="navPerfilBtn" class="nombreNavPerfil">{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
            <ul id="navPerfilMenu">
                <li><a href="#">Mi cuenta</a></li>
                <li>
                    <form method="POST" action="{{ route('auth.logout') }}">
                        @csrf
                        <input type="submit" value="Cerrar sesión"/>
                    </form>
                </li>
            </ul>
        </div>
    @endauth

    @guest
        <a href="{{ route('login.view') }}">Inicia sesión</a> <span>o</span> <a href="{{ route('register.view') }}">Registrate</a>
    @endguest
</div>