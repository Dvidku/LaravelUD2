<header>
    <h1>Mi Blog CRUD</h1>
    <nav>
        <a href="{{ route('articulos.index') }}">Inicio Artículos</a>
        <a href="{{ route('articulos.create') }}">Crear Artículo</a>

        @guest
            <a href="{{ route('login') }}">Iniciar Sesión</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Registro</a>
            @endif
        @endguest

        @auth
            <a href="{{ route('dashboard') }}">Dashboard</a>

            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <a
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault(); this.closest('form').submit();"
                    style="margin-left: 0;"
                >
                    Cerrar Sesión
                </a>
            </form>
        @endauth
    </nav>
</header>
